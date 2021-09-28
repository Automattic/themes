import { Octokit } from "@octokit/rest";
import { spawn } from 'child_process';
import fs from 'fs';
import open from 'open';

const remoteSSH = 'wpcom-sandbox';
const sandboxPublicThemesFolder = '/home/wpdev/public_html/wp-content/themes/pub';
const isWin = process.platform === 'win32';

let octokit;

(async function start() {
	let args = process.argv.slice(2);
	let command = args?.[0];
	switch (command) {
		case "push-button-deploy-git": return pushButtonDeployGit();
		case "push-button-deploy-svn": return pushButtonDeploySvn();
		case "clean-sandbox-git": return cleanSandboxGit();
		case "status-sandbox-git": return statusSandboxGit();
		case "push-to-sandbox": return pushToSandbox();
		case "push-changes-to-sandbox": return pushChangesToSandbox();
		case "version-bump-themes": return versionBumpThemes();
		case "create-git-phabricator-diff": return createGitPhabricatorDiff();
		case "create-github-pr": return createGithubPR(args?.[1]);
	}
	return showHelp();
})();

function showHelp(){
	// TODO: make this helpful
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
async function pushButtonDeployGit() {

	//TODO: If this branch isn't current with trunk exit and require a rebase

	//Getting the hash now, to use later, because it will change and we need the old one later, not the new one
	let hash = await getLastDeployedHash();

	await versionBumpThemes({
		commit: true
	});

	//TODO: Can these be automagically uploaded?
	//await buildChangedOrgZips();

	//await cleanSandbox();
	await pushChangesToSandbox();
	await updateLastDeployedHash();
	let diffURL = await createGitPhabricatorDiff({
		hash: hash
	});

	await tagDeployment({
		hash: hash,
		diffURL: diffURL
	});
}

function initGithubApi() {
	try {
		const githubToken = fs.readFileSync('.github_token').toString();
		octokit = new Octokit({ auth: githubToken });
		return octokit;
	} catch (err) {
		console.log('Octokit (Github API) not initialized: ', err);
		console.log('Make sure your github token is stored in the file: .github_token');
		return null;
	}
}

async function getLastDeployedHash() {
	let result = await executeOnSandbox(`
		cat ${sandboxPublicThemesFolder}/.pub-git-hash
	`);
	return result;
}

async function updateLastDeployedHash() {
	let hash = await executeCommand(`git rev-parse HEAD`);
	await executeOnSandbox(`
		echo '${hash}' > ${sandboxPublicThemesFolder}/.pub-git-hash
	`);
}

async function versionBumpThemes(options) {
	console.log("Version Bumping");

	let themes = await getActionableThemes();
	let hash = await getLastDeployedHash();
	let versionBumpCount = 0;

	for (let theme of themes) {
		let hasChanges = await checkThemeForChanges(theme, hash);
		if( ! hasChanges){
			// console.log(`${theme} has no changes`);
			continue;
		}

		versionBumpCount++;

		let hasVersionBump = await checkThemeForVersionBump(theme, hash);
		if( hasVersionBump ){
			// console.log(`${theme} has already been version bumpped`);
			continue;
		}

		await versionBumpTheme(theme);
	}

	let rootHasVersionBump = await checkThemeForVersionBump('.', hash);
	if ( versionBumpCount > 0 && ! rootHasVersionBump ) {
		//version bump the root project if there were changes to any of the themes
		await executeCommand(`npm version patch --no-git-tag-version`);
	}

	if (options?.commit && versionBumpCount > 0 && !rootHasVersionBump) {
		console.log('commiting version-bump');
		let commitResult = await executeCommand(`
			git commit -a -m "Version Bump";
			git push
		`);
		console.log(commitResult);
	}
}

async function versionBumpTheme(theme){
	console.log(`${theme} needs a version bump`);
	await executeCommand(`npm --prefix ${theme} version patch --no-git-tag-version`);
	let currentPackage = JSON.parse(fs.readFileSync(`${theme}/package.json`))
	let currentVersion = currentPackage.version;
	let filesToUpdate = await executeCommand(`find ${theme} -name style.css -o -name style.scss -o -name style-child-theme.scss -maxdepth 2`);
	filesToUpdate = filesToUpdate.split('\n');
	for ( let file of filesToUpdate ) {
		console.log('updating file', file, currentVersion);
		//TODO: I'm sure we can use something other than perl for this but this was prior art...
		await executeCommand(`perl -pi -e 's/Version: (.*)$/"Version: '${currentVersion}'"/ge' ${file}`);
	}
}

async function checkThemeForVersionBump(theme, hash){
	let previousPackageString = await executeCommand(`
		git show ${hash}:${theme}/package.json 2>/dev/null
	`);
	let previousPackage = JSON.parse(previousPackageString);
	let currentPackage = JSON.parse(fs.readFileSync(`${theme}/package.json`))
	return previousPackage.version != currentPackage.version;	
}

async function checkThemeForChanges(theme, hash){
	let uncomittedChanges = await executeCommand(`git diff-index --name-only HEAD -- ${theme}`);
	let comittedChanges = await executeCommand(`git diff --name-only ${hash} HEAD -- ${theme}`);
	return uncomittedChanges != '' || comittedChanges != '';
}

async function getActionableThemes() {
	//TODO: This could probably be done more effeciently
	let result = await executeCommand(`find . -depth 2 -name package.json -print0 | xargs -0 -n1 dirname | sort --unique`);
	return result.split('\n');
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
		git checkout develop;
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
	let hash = await getLastDeployedHash();

	let deletedFiles = await getDeletedFilesSince(hash);
	let changedFiles = await getComittedChangesSinceHash(hash, branchName);

	//remove deleted files from changed files
	changedFiles = changedFiles.filter( item => {
		return false === deletedFiles.includes(item);
	});


	if(deletedFiles.length > 0) {
		console.log('deleting from sandbox: ', deletedFiles);
		let deleteResponse = await executeOnSandbox(`
			cd ${sandboxPublicThemesFolder};
			rm -f ${deletedFiles.join(' ')}
		`);
		console.log(deleteResponse);
	}

	if(changedFiles.length > 0) {
		console.log('pushing changed files to sandbox:', changedFiles);
		let pushResponse = await executeCommand(`
			rsync -avR --no-p --no-times --exclude-from='.sandbox-ignore' ${changedFiles.join(' ')} wpcom-sandbox:${sandboxPublicThemesFolder}/
		`);
		console.log(pushResponse);
	}
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

function updateRemote() {
	executeCommand(`git remote update > /dev/null`);
}

async function buildPhabricatorCommitMessageSince(hash){

	let projectVersion = await executeCommand(`node -p "require('./package.json').version"`);
	let logs = await executeCommand(`git log --reverse --pretty=format:%s ${hash}..HEAD`);
	return `Deploy Themes ${projectVersion} to wpcom
   
Summary:
${logs}

Test Plan: Execute Smoke Test
   
Reviewers:
   
Subscribers:
`;
}

async function createGitPhabricatorDiff(options={}) {

	console.log('creating Phabricator Diff');

	updateRemote();

	let hash = options.hash || await getLastDeployedHash();

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

	console.log('Diff Created at: ', phabricatorUrl);

	if(phabricatorUrl) {
		open(phabricatorUrl);
	}

	return phabricatorUrl;
}

function getPhabricatorUrlFromResponse(response){
	return response 
		?.split('\n')
		?.find( item => {
			return item.includes('Revision URI: ');
		})
		?.split("Revision URI: ")[1];
}

async function tagDeployment(options={}) {

	let hash = options.hash || await getLastDeployedHash();

	let workInTheOpenPhabricatorUrl = '';
	if (options.diffUrl) {
		workInTheOpenPhabricatorUrl = `Phabricator: ${options.diffUrl.split('a8c.com/')[1]}-code`;
	}
	let projectVersion = await executeCommand(`node -p "require('./package.json').version"`);
	let logs = await executeCommand(`git log --reverse --pretty=format:%s ${hash}..HEAD`);
	let tag = `v${projectVersion}`;
	let message = `Deploy Themes ${tag} to wpcom. \n\n${logs} \n\n${workInTheOpenPhabricatorUrl}`;

	await executeCommand(`
		git tag -a ${tag} -m "${message}"
		git push origin ${tag}
	`);
}

async function createGithubPR(phabricatorUrl) {

	console.log("Creating Github PR");

	if ( ! initGithubApi() ) {
		return;
	}

	updateRemote();

	let branchName = await getBranchName();
	let hash = await getLastDeployedHash();
	let workInTheOpenPhabricatorUrl = '';
	if (phabricatorUrl) {
		workInTheOpenPhabricatorUrl = `\n\n Phabricator: ${phabricatorUrl.split('a8c.com/')[1]}-code`;
	}
	let projectVersion = await executeCommand(`node -p "require('./package.json').version"`);
	let logs = await executeCommand(`git log --reverse --pretty=format:%s ${hash}..HEAD`);
	let options = {
  		owner: 'Automattic',
  		repo: 'themes',
  		head: branchName,
  		base: 'prod',
		title: `Deploy Themes ${projectVersion} to wpcom`,
		body: logs + workInTheOpenPhabricatorUrl
	};

	try {
		let response = await octokit.request('POST /repos/Automattic/themes/pulls', options);
		console.log("Github PR opened: ", response.html_url);
		open(response.html_url);
		return response.html_url;
	} 
	catch (err) {
		console.log(err);
	}

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
