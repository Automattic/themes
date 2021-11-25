import { spawn } from 'child_process';
import fs from 'fs';
import open from 'open';
import inquirer from 'inquirer';
import replace from 'replace-in-file';

const remoteSSH = 'wpcom-sandbox';
const sandboxPublicThemesFolder = '/home/wpdev/public_html/wp-content/themes/pub';
const sandboxRootFolder = '/home/wpdev/public_html/';
const isWin = process.platform === 'win32';

(async function start() {
	let args = process.argv.slice(2);
	let command = args?.[0];
	switch (command) {
		case "push-button-deploy-git": return pushButtonDeploy('git');
		case "push-button-deploy-svn": return pushButtonDeploy('svn');
		case "clean-sandbox-git": return cleanSandboxGit();
		case "clean-sandbox-svn": return cleanSandboxSvn();
		case "clean-all-sandbox-git": return cleanAllSandboxGit();
		case "clean-all-sandbox-svn": return cleanAllSandboxSvn();
		case "push-to-sandbox": return pushToSandbox();
		case "push-changes-to-sandbox": return pushChangesToSandbox();
		case "version-bump-themes": return versionBumpThemes();
		case "land-diff-git": return landChangesGit(args?.[1]);
		case "land-diff-svn": return landChangesSvn(args?.[1]);
		case "deploy-preview": return deployPreview();
		case "deploy-theme": return deployThemes([args?.[1]]);
		case "build-com-zip": return buildComZip([args?.[1]]);
		case "version-bump-stylecss": return versionBumpStyleCss();
	}
	return showHelp();
})();

function showHelp(){
	// TODO: make this helpful
	console.log('Help info can go here');
}

/*
 Update version number in style.css and style-child-theme.css for each theme
 after version bump from conventional commits (via Lerna)
 Used by Lerna via update-stylecss command
*/
async function versionBumpStyleCss() {
	let newVersion = await executeCommand(`node -p "require('./package.json').version"`);
	let styleCss = fs.existsSync('./style.css') ? './style.css' : '';
	let styleChildThemeCss = fs.existsSync('./style-child-theme.css') ? './style-child-theme.css' : '';
	let files = [styleCss, styleChildThemeCss].filter(Boolean);

	console.log({files})

	await replace({
		files,
		from: /(?<=Version:\s*).*?(?=\s*\r?\n|\rg)/gs,
		to: ` ${newVersion}`,
	});
}

/*
 Determine what changes would be deployed
*/
async function deployPreview() {
	console.clear();
	console.log('To ensure accuracy clean your sandbox before previewing. (It is not automatically done).');
	console.log('npm run sandbox:clean:git OR npm run sandbox:clean:svn')

	let message = await checkForDeployability();
	if (message) {
		console.log(`\n${message}\n\n`);
	}

	let hash = await getLastDeployedHash();
	console.log(`Last deployed hash: ${hash}`);

	let changedThemes = await getChangedThemes(hash);
	console.log(`The following themes have changes:\n${changedThemes}`);

	let logs = await executeCommand(`git log --reverse --pretty=format:%s ${hash}..HEAD`);
	console.log(`\n\nCommit log of changes to be deployed:\n\n${logs}\n\n`);
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
async function pushButtonDeploy(repoType) {

	console.clear();
	let prompt = await inquirer.prompt([{
		type: 'confirm',
		message: 'You are about to deploy /trunk.  Are you ready to continue?',
		name: "continue",
		default: false
	}]);

	if(!prompt.continue){
		return;
	}

	if (repoType != 'svn' && repoType != 'git' ) {
		return console.log('Specify a repo type to use push-button deploy');
	}

	let message = await checkForDeployability();
	if (message) {
		return console.log(`\n\n${message}\n\n`);
	}

	try {
		if (repoType === 'git' ) {
			await cleanSandboxGit();
		}
		else {
			await cleanSandboxSvn();
		}

		let hash = await getLastDeployedHash();
		let diffUrl;

		await versionBumpThemes();

		let changedThemes = await getChangedThemes(hash);

		await pushChangesToSandbox();

		await updateLastDeployedHash();

		if (repoType === 'git' ) {
			diffUrl = await createGitPhabricatorDiff(hash);
		}
		else {
			diffUrl = await createSvnPhabricatorDiff(hash);
		}
		let diffId = diffUrl.split('a8c.com/')[1];

		//push changes (from version bump)
		await executeCommand('git push');

		await tagDeployment({
			hash: hash,
			diffId: diffId
		});

		console.log(`\n\nPhase One Complete\n\nYour sandbox has been updated and the diff is available for review.\nPlease give your sandbox a smoke test to determine that the changes work as expected.\nThe following themes have had changes: \n\n${changedThemes.join(' ')}\n\n\n`);

		prompt = await inquirer.prompt([{
			type: 'confirm',
			message: 'Are you ready to land these changes?',
			name: "continue",
			default: false
		}]);

		if(!prompt.continue){
			console.log(`Aborted Automated Deploy Process Landing Phase\n\nYou will have to land these changes manually.  The ID of the diff to land: ${diffId}` );
			return;
		}

		if (repoType === 'git' ) {
			await landChangesGit(diffId);
		}
		else {
			await landChangesSvn(diffId);
		}

		await deployThemes(changedThemes);
		await buildComZips(changedThemes);
		console.log(`The following themes have changed:\n${changedThemes.join('\n')}`)
		console.log('\n\nAll Done!!\n\n');
	}
	catch (err) {
		console.log("ERROR with deply script: ", err);
	}
}

/*
 Build .zip file for .com
*/
async function buildComZip(themeSlug) {

	console.log( `Building ${themeSlug} .zip` );

	let styleCss = fs.readFileSync(`${themeSlug}/style.css`, 'utf8');

	// Gets the theme version (Version:) and minimum WP version (Tested up to:) from the theme's style.css
	let themeVersion = getThemeMetadata(styleCss, 'Version');
	let wpVersionCompat = getThemeMetadata(styleCss, 'Tested up to');

	if (themeVersion && wpVersionCompat) {
		await executeOnSandbox(`php ${sandboxRootFolder}bin/themes/theme-downloads/build-theme-zip.php --stylesheet=pub/${themeSlug} --themeversion=${themeVersion} --wpversioncompat=${wpVersionCompat}`, true);
	} 
	else {
		console.log('Unable to build theme .zip.');
		if (!themeVersion) {
			console.log('Could not find theme version (Version:) in the theme style.css.');
		}
		if (!wpVersionCompat) {
			console.log('Could not find WP compat version (Tested up to:) in the theme style.css.');
		}
		console.log('Please build the .zip file for the theme manually.', themeSlug);
		open('https://mc.a8c.com/themes/downloads/');
	}
}

async function buildComZips(themes) {
	for ( let theme of themes ) {
		await buildComZip(theme);
	}
}

/*
 Check to ensure that:
  * The current branch is /trunk
  * That trunk is up-to-date with origin/trunk
*/
async function checkForDeployability(){
	let branchName = await executeCommand('git symbolic-ref --short HEAD');
	if(branchName !== 'trunk' ) {
		return 'Only the /trunk branch can be deployed.';
	}

	await executeCommand('git remote update', true);
	let localMasterHash = await executeCommand('git rev-parse trunk')
	let remoteMasterHash = await executeCommand('git rev-parse origin/trunk')
	if(localMasterHash !== remoteMasterHash) {
		return 'Local /trunk is out-of-date.  Pull changes to continue.'
	}
	return null;
}

/*
 Land the changes from the given diff ID.  This is the "production merge".
 This is the git version of that action.
*/
async function landChangesGit(diffId){
	return await executeOnSandbox(`cd ${sandboxPublicThemesFolder};arc patch ${diffId};arc land;exit;`, true, true);
}

/*
 Land the changes from the given diff ID.  This is the "production merge".
 This is the svn version of that action.
*/
async function landChangesSvn(diffId){
	return await executeOnSandbox(`
		cd ${sandboxPublicThemesFolder};
		svn ci -m ${diffId}
	`, true );
}

async function getChangedThemes(hash) {
	console.log('Determining all changed themes');
	let themes = await getActionableThemes();
	let changedThemes = [];
	for (let theme of themes) {
		let hasChanges = await checkThemeForChanges(theme, hash);
		if(hasChanges){
			changedThemes.push(theme);
		}
	}
	return changedThemes;
}

/*
 Deploy a collection of themes.
 Part of the push-button-deploy process.
 Can also be triggered to deploy a single theme with the command:
 node ./theme-utils.mjs deploy-theme THEMENAME
*/
async function deployThemes( themes ) {

	let response;

	for ( let theme of themes ) {

		console.log( `Deploying ${theme}` );

		let deploySuccess = false;
		let attempt = 0;

		while ( ! deploySuccess) {

			attempt++;
			console.log(`\nattempt #${attempt}\n\n`);

			response = await executeOnSandbox( `deploy pub ${theme};exit;`, true, true );

			deploySuccess = response.includes( 'successfully deployed to' );

			if( ! deploySuccess ) {
				console.log( 'Deploy was not successful.  Trying again in 10 seconds...' );
				await new Promise(resolve => setTimeout(resolve, 10000));
			}
			else {
				console.log( "Deploy successful." );
			}

		}

	}
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
 Commit the change.
*/
async function versionBumpThemes() {
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
			continue;
		}

		await versionBumpTheme(theme);
	}

	//version bump the root project if there were changes to any of the themes
	let rootHasVersionBump = await checkThemeForVersionBump('.', hash);
	if ( versionBumpCount > 0 && ! rootHasVersionBump ) {
		await executeCommand(`npm version patch --no-git-tag-version`);
	}

	if (versionBumpCount > 0) {
		console.log('commiting version-bump');
		await executeCommand(`
			git commit -a -m "Version Bump";
		`, true);
	}
}

function getThemeMetadata(styleCss, attribute) {
	if ( !styleCss || !attribute ) {
		return null;
	}
	switch ( attribute ) {
		case 'Version':
			return styleCss
				.match(/(?<=Version:\s*).*?(?=\s*\r?\n|\rg)/gs)[0]
				.trim()
				.replace('-wpcom', '');
		case 'Tested up to':
			return styleCss
				.match(/(?<=Tested up to:\s*).*?(?=\s*\r?\n|\rg)/gs);
	}
}


/*
 Version Bump a Theme.
 Used by versionBumpThemes to do the work of version bumping.
 First increment the patch version in style.css
 Then update any of these files with the new version: [package.json, style.scss, style-child-theme.scss]
*/
async function versionBumpTheme(theme){

	console.log(`${theme} needs a version bump`);

	await executeCommand(`perl -pi -e 's/Version: ((\\d+\\.)*)(\\d+)(.*)$/"Version: ".$1.($3+1).$4/ge' ${theme}/style.css`, true);

	let styleCss = fs.readFileSync(`${theme}/style.css`, 'utf8');
	let currentVersion = getThemeMetadata(styleCss, 'Version');

	let filesToUpdate = await executeCommand(`find ${theme} -name package.json -o -name style.scss -o -name style-child-theme.scss -maxdepth 2`);
	filesToUpdate = filesToUpdate.split('\n').filter(item => item != '');

	for ( let file of filesToUpdate ) {
		await executeCommand(`perl -pi -e 's/Version: (.*)$/"Version: '${currentVersion}'"/ge' ${file}`);
		await executeCommand(`perl -pi -e 's/\\"version\\": (.*)$/"\\"version\\": \\"'${currentVersion}'\\","/ge' ${file}`);
	}
}

/*
 Determine if a theme has had a version bump since a given hash.
 Used by versionBumpThemes
 Compares the value of 'version' in style.css between the hash and current value
*/
async function checkThemeForVersionBump(theme, hash){
	return executeCommand(`
		git show ${hash}:${theme}/style.css 2>/dev/null
	`)
	.catch( ( error ) => {
		//This is a new theme, no need to bump versions so we'll just say we've already done it
		return true;
	} )
	.then( ( previousStyleString ) => {
		if( previousStyleString === true) {
			return previousStyleString;
		}
		let previousVersion = getThemeMetadata(previousStyleString, 'Version');
		let styleCss = fs.readFileSync(`${theme}/style.css`, 'utf8');
		let currentVersion = getThemeMetadata(styleCss, 'Version');
		return previousVersion != currentVersion;
	});
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
 Provide a list of 'actionable' themes (those themes that have style.css files)
*/
async function getActionableThemes() {
	let result = await executeCommand(`for d in */; do 
		if test -f "./$d/style.css"; then
			echo $d; 
		fi
	done`);
	return result
		.split('\n')
		.map(item=>item.replace('/', ''));
}

/*
 Clean the theme sandbox.
 Assumes sandbox is in 'git' mode
 checkout origin/develop and ensure it's up-to-date.
 Remove any other changes.
*/
async function cleanSandboxGit() {
	console.log('Cleaning the Themes Sandbox');
	await executeOnSandbox(`
		cd ${sandboxPublicThemesFolder};
		git reset --hard HEAD;
		git clean -fd;
		git checkout develop;
		git pull;
		echo;
		git status
	`, true);
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
	`, true);
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
	await executeOnSandbox(`
		cd ${sandboxPublicThemesFolder};
  		svn revert -R .;
  		svn cleanup --remove-unversioned;
  		svn up;
	`, true);
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
	await executeOnSandbox(`
		cd ${sandboxRootFolder};
  		svn revert -R .;
  		svn cleanup --remove-unversioned;
  		svn up .;
	`, true);
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
		await executeOnSandbox(`
			cd ${sandboxPublicThemesFolder};
			rm -f ${deletedFiles.join(' ')}
		`, true);
	}

	if(changedFiles.length > 0) {
		console.log('pushing changed files to sandbox:', changedFiles);
		await executeCommand(`
			rsync -avR --no-p --no-times --exclude-from='.sandbox-ignore' ${changedFiles.join(' ')} wpcom-sandbox:${sandboxPublicThemesFolder}/
		`, true);
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
	`, true);

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

	const commitTempFileLocation = '/tmp/theme-deploy-comment.txt';
	const commitMessage = await buildPhabricatorCommitMessageSince(hash);

	console.log(commitMessage);

	const result = await executeOnSandbox(`
		cd ${sandboxPublicThemesFolder};
		echo "${commitMessage}" > ${commitTempFileLocation};
		svn add --force * --auto-props --parents --depth infinity -q;
		svn status | grep "^\!" | sed 's/^\! *//g' | xargs svn rm;
		arc diff --create --message-file ${commitTempFileLocation}
	`, true);

	const phabricatorUrl = getPhabricatorUrlFromResponse(result);

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
	if (options.diffId) {
		workInTheOpenPhabricatorUrl = `Phabricator: ${options.diffId}-code`;
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
function executeOnSandbox(command, logResponse, enablePsudoterminal){

	if(enablePsudoterminal){
		return executeCommand(`ssh -tt -A ${remoteSSH} << EOF
${command}
EOF`, logResponse);

	}

	return executeCommand(`ssh -TA ${remoteSSH} << EOF
${command}
EOF`, logResponse);
}

/*
 Execute a command locally.
*/
async function executeCommand(command, logResponse) {
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
			if(logResponse){
				console.log(data.toString());
			}
		});

		child.stderr.on('data', (data) => {
			errResponse += data;
			if(logResponse){
				console.log(data.toString());
			}
		});

		child.on('exit', (code) => {
			if (code !== 0) {
				reject(errResponse.trim());
			}
			resolove(response.trim());
		});
	});
}


