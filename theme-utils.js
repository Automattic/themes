import { spawn } from 'child_process';
import open from 'open';

const remoteSSH = 'wpcom-sandbox';
const sandboxPublicThemesFolder = '/home/wpdev/public_html/wp-content/themes/pub';
const isWin = process.platform === 'win32';


(function start() {
	let args = process.argv.slice(2);
	let command = args?.[0];
	switch (command) {
		case "push-button-deploy": return pushButtonDeploy();
		case "clean-sandbox": return cleanSandbox();
		case "status-sandbox": return statusSandbox();
		case "push-to-sandbox": return pushToSandbox();
		case "push-changes-to-sandbox": return pushChangesToSandbox();
		case "create-phabricator-diff": return createPhabricatorDiff();
	}
	return showHelp();
})();

function showHelp(){
	console.log('Help info can go here');
}

/*
 This is where the party's at!
 Version Bump anything that has changed.
 Build .zip files to upload to .org
 Clean the sandbox.
 Push up changes to the sandbox (only what changed between whatever branch you're on since it diverged from trunk)
 Create a phabricator diff (which gets opened in your browser)
*/
async function pushButtonDeploy() {
	//TODO: If this branch isn't current with trunk exit and require a rebase
	await versionBumpThemes();
	//TODO: If this results in version bumps (it should) commit that change to the branch (and push?)
	await buildChangedOrgZips();
	//TODO: Can these be automagically uploaded?
	await cleanSandbox();
	await pushChangesToSandbox();
	await createPhabricatorDiff();
	//TODO: Open a PR for this branch > trunk.  
	//Include the phabricator diff URL as a comment to the PR.
	//TODO: Tag this release?
}

async function versionBumpThemes() {
	console.log("Version Bumping");
	let result = await executeCommand(`./theme-batch-utils.sh version-bump`);
	console.log(result);
}

async function buildChangedOrgZips() {
	console.log("Building .org Zip files");
	let result = await executeCommand(`./theme-batch-utils.sh build-org-zip-if-changed`);
	console.log(result);
}

/*
 Clean the sandbox.
 checkout origin/trunk and ensure it's up-to-date.
 Remove any other changes.
*/
async function cleanSandbox() {
	console.log('Cleaning the Sandbox');
	await executeOnSandbox(`
		cd ${sandboxPublicThemesFolder};
		git reset --hard HEAD;
		git clean -fd;
		git checkout trunk;
		git pull;
		echo
	`)
	console.log('All done cleaning.');
	return statusSandbox();
}

async function statusSandbox() {
	let status = await executeOnSandbox(`
		cd ${sandboxPublicThemesFolder};
		git status;
	`);
	console.log(status);
}

/*
  Push exactly what is here up to the sandbox (with the exclusion of files noted in .sandbox-ignore)
*/
function pushToSandbox() {
	executeCommand(`
		rsync -av --no-p --no-times --exclude-from='.sandbox-ignore' ./ wpcom-sandbox:${sandboxPublicThemesFolder}/
	`);
}

/*
  Push only (and every) change since the point-of-diversion from /trunk
*/
async function pushChangesToSandbox() {

	console.log("Pushing Changes to Sandbox.");

	updateRemote();
	let branchName = await getBranchName();
	let hash = await getHashAtDivergence(branchName);

	let deletedFiles = await getDeletedFilesSince(hash);
	let changedFiles = await getComittedChangesSinceHash(hash, branchName);

	//remove deleted files from changed files
	changedFiles = changedFiles.filter( item => {
		return false === deletedFiles.includes(item);
	});

	if(deletedFiles.length > 0) {
		await executeOnSandbox(`
			cd ${sandboxPublicThemesFolder};
			rm -f ${deletedFiles.join(' ')}
		`);
	}

	if(changedFiles.length > 0) {
		await executeCommand(`
			rsync -avR --no-p --no-times --exclude-from='.sandbox-ignore' ${changedFiles.join(' ')} wpcom-sandbox:${sandboxPublicThemesFolder}/
		`);
	}

	console.log('deletedFiles', deletedFiles);
	console.log('changedFiles', changedFiles);
}

async function getComittedChangesSinceHash(hash, branch) {

	let comittedChanges = await executeCommand(`git diff ${hash} ${branch} --name-only`);
	comittedChanges = comittedChanges.replace(/\r?\n|\r/g, " ").split(" "); 

	let uncomittedChanges = await executeCommand(`git diff HEAD --name-only`);
	uncomittedChanges = uncomittedChanges.replace(/\r?\n|\r/g, " ").split(" ");

	return comittedChanges.concat(uncomittedChanges);
}

async function getDeletedFilesSince(hash){

	let deletedSinceHash = await executeCommand(`
		git log --format=format:"" --name-only -M100% --diff-filter=D ${hash}..HEAD
	`);
	deletedSinceHash = deletedSinceHash.replace(/\r?\n|\r/g, " ").trim().split(" "); 

	let deletedAndUncomitted = await executeCommand(`
		git diff HEAD --name-only --diff-filter=D
	`);
	deletedAndUncomitted = deletedAndUncomitted.replace(/\r?\n|\r/g, " ").trim().split(" "); 

	return deletedSinceHash.concat(deletedAndUncomitted).filter( item => {
		return item != '';
	});
}

function getBranchName() {
	return executeCommand(`git branch --show-current`);
}

function getHashAtDivergence(branch) {
	return executeCommand(`git merge-base origin/trunk ${branch}`);
}

function updateRemote() {
	executeCommand(`git remote update > /dev/null`);
}

async function buildPhabricatorCommitMessageSince(hash){

	let projectVersion = await executeCommand(`node -p "require('./package.json').version"`);
	let logs = await executeCommand(`git log --pretty=format:%s ${hash}..HEAD`);
	return `Deploy Themes ${projectVersion} to wpcom
   
Summary:
${logs}

Test Plan: Execute Smoke Test
   
Reviewers:
   
Subscribers:
`;
}

async function createPhabricatorDiff() {

	updateRemote();
	let branchName = await getBranchName();
	let hash = await getHashAtDivergence(branchName);

	let commitMessage = await buildPhabricatorCommitMessageSince(hash);

	let result = await executeOnSandbox(`
		cd ${sandboxPublicThemesFolder};
		git branch -D deploy
		git checkout -b deploy
		git add --all
		git commit -m "${commitMessage}"
		arc diff --create --verbatim
	`);

	let phabricatorUrl = getPhabricatorUrlFromResponse(result);

	if(phabricatorUrl) {
		open(phabricatorUrl);
	}

}

function getPhabricatorUrlFromResponse(response){
	return response 
		?.split('\n')
		?.find( item => {
			return item.includes('Revision URI: ');
		})
		?.split("Revision URI: ")[1];
}

function executeOnSandbox(command){
	return executeCommand(`ssh -TA ${remoteSSH} << EOF 
${command} 
EOF`);
}

async function executeCommand(command) {
	return new Promise((resolove, reject) => {

		let child;
		let response = '';
		let errResponse = '';

		if (isWin) {
			child = spawn('cmd.exe', ['/s', '/c', '"' + command + '"'], {
				windowsVerbatimArguments: true,
				stdio: [process.stdin, 'pipe', 'pipe'],
			})
		} else {
			child = spawn(process.env.SHELL, ['-c', command]);
		}

		child.stdout.on('data', (data) => {
			response += data;
		});

		child.stderr.on('data', (data) => {
			errResponse += data;
		});

		child.on('exit', (code) => {
			if (code !== 0) {
				reject(errResponse.trim());
			}
			resolove(response.trim());
		});
	});
}