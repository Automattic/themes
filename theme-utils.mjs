import { spawn } from 'child_process';
import fs from 'fs';
import open from 'open';

const remoteSSH = 'wpcom-sandbox';
const sandboxPublicThemesFolder = '/home/wpdev/public_html/wp-content/themes/pub';
const sandboxRootFolder = '/home/wpdev/public_html/';
const isWin = process.platform === 'win32';

(async function start() {
	let args = process.argv.slice(2);
	let command = args?.[0];
	switch (command) {
		case "push-button-deploy-git": return pushButtonDeployGit();
		case "push-button-deploy-svn": return pushButtonDeploySvn();
		case "clean-sandbox-git": return cleanSandboxGit();
		case "clean-sandbox-svn": return cleanSandboxSvn();
		case "clean-all-sandbox-git": return cleanAllSandboxGit();
		case "clean-all-sandbox-svn": return cleanAllSandboxSvn();
		case "push-to-sandbox": return pushToSandbox();
		case "push-changes-to-sandbox": return pushChangesToSandbox();
		case "version-bump-themes": return versionBumpThemes();
	}
	return showHelp();
})();

function showHelp(){
	// TODO: make this helpful
	console.log('Help info can go here');
}

/*
 Execute the first phase of a deployment.
 Leverages git on the sandbox.
	* Gets the last deployed hash from the sandbox
	* Version bump all themes have have changes since the last deployment
	* Commit the version bump change to github
	* Clean the sandbox and ensure it is up-to-date
	* Push all changed files (including removal of deleted files) since the last deployment
	* Update the 'last deployed' hash on the sandbox
	* Create a phabricator diff based on the changes since the last deployment.  The description including the commit messages since the last deployment.
	* Open the Phabricator Diff in your browser
	* Create a tag in the github repository at this point of change which includes the phabricator link in the description
*/
async function pushButtonDeployGit() {

	//TODO: If this branch isn't trunk exit
	//TODO: If this branch isn't current with origin exit and require a pull
	//TODO: If the sandbox isn't in 'git' mode exit

	let hash = await getLastDeployedHash();

	await versionBumpThemes({
		commit: true
	});

	//TODO: Can these be automagically uploaded?
	//await buildChangedOrgZips();

	await cleanSandboxGit();
	await pushChangesToSandbox();
	await updateLastDeployedHash();
	let diffUrl = await createGitPhabricatorDiff(hash);

	await tagDeployment({
		hash: hash,
		diffUrl: diffUrl
	});
}

/*
 Execute the first phase of a deployment.
 Leverages subversion on the sandbox.
	* Gets the last deployed hash from the sandbox
	* Version bump all themes have have changes since the last deployment
	* Commit the version bump change to github
	* Clean the sandbox and ensure it is up-to-date
	* Push all changed files (including removal of deleted files) since the last deployment
	* Update the 'last deployed' hash on the sandbox
	* Create a phabricator diff based on the changes since the last deployment.  The description including the commit messages since the last deployment.
	* Open the Phabricator Diff in your browser
	* Create a tag in the github repository at this point of change which includes the phabricator link in the description
*/
async function pushButtonDeploySvn(){

	//TODO: If this branch isn't trunk exit
	//TODO: If this branch isn't current with origin exit and require a pull
	//TODO: If the sandbox isn't in 'svn' mode exit

	let hash = await getLastDeployedHash();

	await versionBumpThemes({
		commit: true
	});

	//TODO: Can these be automagically uploaded?
	//await buildChangedOrgZips();

	await cleanSandboxSvn();
	await pushChangesToSandbox();
	await updateLastDeployedHash();
	let diffUrl = await createSvnPhabricatorDiff(hash);

	await tagDeployment({
		hash: hash,
		diffUrl: diffUrl
	});
}

/*
 Provide the hash of the last managed deployment.
 This hash is used to determine all the changes that have happened between that point and the current point.
*/
async function getLastDeployedHash() {
	let result = await executeOnSandbox(`
		cat ${sandboxPublicThemesFolder}/.pub-git-hash
	`);
	return result;
}

/*
 Update the 'last deployed hash' on the server with the current hash.
*/
async function updateLastDeployedHash() {
	let hash = await executeCommand(`git rev-parse HEAD`);
	await executeOnSandbox(`
		echo '${hash}' > ${sandboxPublicThemesFolder}/.pub-git-hash
	`);
}

/*
 Version bump (increment version patch) any theme project that has had changes since the last deployment.
 If a theme's version has already been changed since that last deployment then do not version bump it. 
 If any theme projects have had a version bump also version bump the parent project.
 Optionally commit and push the version bump to git.
*/
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
			// console.log(`${theme} has already been version bumped`);
			continue;
		}

		await versionBumpTheme(theme);
	}

	//version bump the root project if there were changes to any of the themes
	let rootHasVersionBump = await checkThemeForVersionBump('.', hash);
	if ( versionBumpCount > 0 && ! rootHasVersionBump ) {
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

/*
 Version Bump a Theme.
 Used by versionBumpThemes to do the work of version bumping.
 First increment the patch version in package.json (the source of truth for versioning)
 Then update any of these files with the new version: [style.css, style.scss, style-child-theme.scss]
*/
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

/*
 Determine if a theme has had a version bump since a given hash.
 Used by versionBumpThemes
 Compares the value of 'version' in package.json between the hash and current value
*/
async function checkThemeForVersionBump(theme, hash){
	let previousPackageString = await executeCommand(`
		git show ${hash}:${theme}/package.json 2>/dev/null
	`);
	let previousPackage = JSON.parse(previousPackageString);
	let currentPackage = JSON.parse(fs.readFileSync(`${theme}/package.json`))
	return previousPackage.version != currentPackage.version;	
}

/*
 Determine if a theme has had changes since a given hash.
 Used by versionBumpThemes
*/ 
async function checkThemeForChanges(theme, hash){
	let uncomittedChanges = await executeCommand(`git diff-index --name-only HEAD -- ${theme}`);
	let comittedChanges = await executeCommand(`git diff --name-only ${hash} HEAD -- ${theme}`);
	return uncomittedChanges != '' || comittedChanges != '';
}

/*
 Provide a list of 'actionable' themes (those themes that have package.json files)
*/
async function getActionableThemes() {
	//TODO: This could be done more effeciently.  It's very slow running.
	let result = await executeCommand(`find . -depth 2 -name package.json -print0 | xargs -0 -n1 dirname | sort --unique`);
	return result.split('\n');
}

async function buildChangedOrgZips() {
	console.log("Building .org Zip files");
	let result = await executeCommand(`./theme-batch-utils.sh build-org-zip-if-changed`);
	console.log(result);
}

/*
 Clean the theme sandbox.
 Assumes sandbox is in 'git' mode
 checkout origin/develop and ensure it's up-to-date.
 Remove any other changes.
*/
async function cleanSandboxGit() {
	console.log('Cleaning the Themes Sandbox');
	let response = await executeOnSandbox(`
		cd ${sandboxPublicThemesFolder};
		git reset --hard HEAD;
		git clean -fd;
		git checkout develop;
		git pull;
		echo;
		git status
	`)
	console.log(response);
	console.log('All done cleaning.');
}

/*
 Clean the entire sandbox.
 Assumes sandbox is in 'git' mode
 checkout origin/develop and ensure it's up-to-date.
 Remove any other changes.
*/
async function cleanAllSandboxGit() {
	console.log('Cleaning the Entire Sandbox');
	let response = await executeOnSandbox(`
		cd ${sandboxRootFolder};
		git reset --hard HEAD;
		git clean -fd;
		git checkout develop;
		git pull;
		echo;
		git status
	`)
	console.log(response);
	console.log('All done cleaning.');
}

/*
 Clean the theme sandbox.
 Assumes sandbox is in 'svn' mode
 ensure trunk is up-to-date
 Remove any other changes
*/
async function cleanSandboxSvn() {
	console.log('Cleaning the theme sandbox');
	let response = await executeOnSandbox(`
		cd ${sandboxPublicThemesFolder};
  		svn revert -R .;
  		svn cleanup --remove-unversioned;
  		svn up;
	`);
	console.log(response);
	console.log('All done cleaning.');
}

/*
 Clean the entire sandbox.
 Assumes sandbox is in 'svn' mode
 ensure trunk is up-to-date
 Remove any other changes
*/
async function cleanAllSandboxSvn() {
	console.log('Cleaning the entire sandbox');
	let response = await executeOnSandbox(`
		cd ${sandboxRootFolder};
  		svn revert -R .;
  		svn cleanup --remove-unversioned;
  		svn up .;
	`);
	console.log(response);
	console.log('All done cleaning.');
}

/*
  Push exactly what is here (all files) up to the sandbox (with the exclusion of files noted in .sandbox-ignore)
*/
function pushToSandbox() {
	executeCommand(`
		rsync -av --no-p --no-times --exclude-from='.sandbox-ignore' ./ wpcom-sandbox:${sandboxPublicThemesFolder}/
	`);
}

/*
  Push only (and every) change since the point-of-diversion from /trunk
  Remove files from the sandbox that have been removed since the last deployed hash
*/
async function pushChangesToSandbox() {

	console.log("Pushing Changes to Sandbox.");

	let hash = await getLastDeployedHash();

	let deletedFiles = await getDeletedFilesSince(hash);
	let changedFiles = await getComittedChangesSinceHash(hash);

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

/*
 Provide a collection of all files that have changed since the given hash.
 Used by pushChangesToSandbox
*/
async function getComittedChangesSinceHash(hash) {

	let comittedChanges = await executeCommand(`git diff ${hash} HEAD --name-only`);
	comittedChanges = comittedChanges.replace(/\r?\n|\r/g, " ").split(" "); 

	let uncomittedChanges = await executeCommand(`git diff HEAD --name-only`);
	uncomittedChanges = uncomittedChanges.replace(/\r?\n|\r/g, " ").split(" ");

	return comittedChanges.concat(uncomittedChanges);
}

/*
 Provide a collection of all files that have been deleted since the given hash.
 Used by pushChangesToSandbox
*/
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

/*
 Build the Phabricator commit message.
 This message contains the logs from all of the commits since the given hash.
 Used by create*PhabricatorDiff
*/
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

/*
 Create a (git) Phabricator diff from a given hash.
 Open the phabricator diff in your browser.
 Provide the URL of the phabricator diff.
*/
async function createGitPhabricatorDiff(hash) {

	console.log('creating Phabricator Diff');

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

/*
 Create a (svn) Phabricator diff from a given hash.
 Open the phabricator diff in your browser.
 Provide the URL of the phabricator diff.
*/
async function createSvnPhabricatorDiff(hash) {
	console.log('creating Phabricator Diff');

	let commitMessage = await buildPhabricatorCommitMessageSince(hash);

	let result = await executeOnSandbox(`
		cd ${sandboxPublicThemesFolder};
		arc diff --create --message ${commitMessage}
	`);

	let phabricatorUrl = getPhabricatorUrlFromResponse(result);

	console.log('Diff Created at: ', phabricatorUrl);

	if(phabricatorUrl) {
		open(phabricatorUrl);
	}

	return phabricatorUrl;
}

/*
 Utility to pull the Phabricator URL from the diff creation command.
 Used by createGitPhabricatorDiff
*/
function getPhabricatorUrlFromResponse(response){
	return response 
		?.split('\n')
		?.find( item => {
			return item.includes('Revision URI: ');
		})
		?.split("Revision URI: ")[1];
}


/*
 Create a git tag at the current hash.
 In the description include the commit logs since the given hash.
 Include the (cleansed) Phabricator link.
*/
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

/*
 Execute a command on the sandbox.
 Expects the following to be configured in your ~/.ssh/config file:

Host wpcom-sandbox
	User wpdev
	HostName SANDBOXURL.wordpress.com
	ForwardAgent yes
*/
function executeOnSandbox(command){
	return executeCommand(`ssh -TA ${remoteSSH} << EOF 
${command} 
EOF`);
}

/*
 Execute a command locally.
*/
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
