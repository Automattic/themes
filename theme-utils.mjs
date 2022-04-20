import { spawn } from 'child_process';
import fs from 'fs';
import open from 'open';
import inquirer from 'inquirer';

const remoteSSH = 'wpcom-sandbox';
const sandboxPublicThemesFolder = '/home/wpdev/public_html/wp-content/themes/pub';
const sandboxPremiumThemesFolder = '/home/wpdev/public_html/wp-content/themes/premium';
const sandboxRootFolder = '/home/wpdev/public_html/';
const isWin = process.platform === 'win32';
const premiumThemes = [ 'videomaker', 'videomaker-white' ];
const coreThemes = ['twentyten', 'twentyeleven', 'twentytwelve', 'twentythirteen', 'twentyfourteen', 'twentyfifteen', 'twentysixteen', 'twentyseventeen', 'twentynineteen', 'twentytwenty', 'twentytwentyone', 'twentytwentytwo'];

(async function start() {
	let args = process.argv.slice(2);
	let command = args?.[0];
	switch (command) {
		case "push-button-deploy": return pushButtonDeploy();
		case "clean-sandbox": return cleanSandbox();
		case "clean-premium-sandbox": return cleanPremiumSandbox();
		case "clean-all-sandbox": return cleanAllSandbox();
		case "push-to-sandbox": return pushToSandbox();
		case "push-changes-to-sandbox": return pushChangesToSandbox();
		case "push-premium-to-sandbox": return pushPremiumToSandbox();
		case "version-bump-themes": return versionBumpThemes();
		case "land-diff": return landChanges(args?.[1]);
		case "deploy-preview": return deployPreview();
		case "deploy-theme": return deployThemes([args?.[1]]);
		case "build-com-zip": return buildComZip([args?.[1]]);
		case "pull-core-themes": return pullCoreThemes();
		case "push-core-themes": return pushCoreThemes();
		case "sync-core-theme": return syncCoreTheme(args?.[1], args?.[2]);
		case "deploy-sync-core-theme": return deploySyncCoreTheme(args?.[1], args?.[2]);
	}
	return showHelp();
})();

function showHelp(){
	// TODO: make this helpful
	console.log('Help info can go here');
}

/*
 Create list of changes from git logs
 Optionally pass in a deployed hash or default to calling getLastDeployedHash()
 Optionally pass in boolean bulletPoints to add bullet points to each commit log
*/
async function getCommitLogs(hash, bulletPoints) {
	if (!hash) {
		hash = await getLastDeployedHash();
	}

	let logs = await executeCommand(`git log --reverse --pretty=format:%s ${hash}..HEAD`);

	if (bulletPoints) {
		// Add * to the start of each log (used in changelogs)
		logs = await executeCommand(`git log --reverse --pretty=format:"* %s" ${hash}..HEAD`);
	}

	// Remove any double quotes from commit messages
	logs = logs.replace(/"/g, '');

	return logs;
}

/*
 Determine what changes would be deployed
*/
async function deployPreview() {
	console.clear();
	console.log('To ensure accuracy clean your sandbox before previewing. (It is not automatically done).');

	let message = await checkForDeployability();
	if (message) {
		console.log(`\n${message}\n\n`);
	}

	let hash = await getLastDeployedHash();
	console.log(`Last deployed hash: ${hash}`);

	let changedThemes = await getChangedThemes(hash);
	console.log(`The following themes have changes:\n${changedThemes}`);

	let logs = await getCommitLogs(hash);
	console.log(`\n\nCommit log of changes to be deployed:\n\n${logs}\n\n`);
}

/*
 Execute the first phase of a deployment.
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
async function pushButtonDeploy() {

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


	let message = await checkForDeployability();
	if (message) {
		return console.log(`\n\n${message}\n\n`);
	}

	try {
		await cleanSandbox();

		//build variations
		console.log('Building Variations');
		await executeCommand(`node ./variations/build-variations.mjs git-add-changes`)
		prompt = await inquirer.prompt([{
			type: 'confirm',
			message: 'Are you good with any staged theme variations changes? Make any manual adjustments now if necessary.',
			name: "continue",
			default: false
		}]);
	
		if(!prompt.continue){
			console.log(`Aborted Automated Deploy Process at variations building.` );
			return;
		}

		try {
			await executeCommand(`
				git commit -m "Building Variations"
			`);
		} catch (err) {
			// Most likely the error is that there are no variation changes to commit.
			// Just swallowing that error for now
		}

		let hash = await getLastDeployedHash();
		let thingsWentBump = await versionBumpThemes();

		if( thingsWentBump ){
			prompt = await inquirer.prompt([{
				type: 'confirm',
				message: 'Are you good with the version bump and changelog updates? Make any manual adjustments now if necessary.',
				name: "continue",
				default: false
			}]);

			if(!prompt.continue){
				console.log(`Aborted Automated Deploy Process at version bump changes.` );
				return;
			}
		}

		let changedThemes = await getChangedThemes(hash);

		await pushChangesToSandbox();


		//push changes (from version bump)
		if( thingsWentBump ){
			prompt = await inquirer.prompt([{
				type: 'confirm',
				message: 'Are you ready to push this version bump change to the source repository (Github)?',
				name: "continue",
				default: false
			}]);

			if(!prompt.continue){
				console.log(`Aborted Automated Deploy Process at version bump push change.` );
				return;
			}

			await executeCommand(`
				git commit -m "Version Bump";
				git push
			`, true);
		}

		await updateLastDeployedHash();

		let commitMessage = await buildPhabricatorCommitMessageSince(hash);
		let diffUrl = await createPhabricatorDiff(commitMessage);
		let diffId = diffUrl.split('a8c.com/')[1];


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

		await landChanges(diffId);

		let changedPublicThemes = changedThemes.filter( item=> ! premiumThemes.includes( item ) );

		try {
			await deployThemes(changedPublicThemes);
		} 
		catch (err) {
			prompt = await inquirer.prompt([{
				type: 'confirm',
				message: `There was an error deploying themes.  ${err}  Do you wish to continue to the next step?`,
				name: "continue",
				default: false
			}]);

			if(!prompt.continue){
				console.log(`Aborted Automated Deploy during deploy phase.` );
				return;
			}
		}

		await buildComZips(changedPublicThemes);

		console.log(`The following themes have changed:\n${changedThemes.join('\n')}`)
		console.log('\n\nAll Done!!\n\n');
	}
	catch (err) {
		console.log("ERROR with deploy script: ", err);
	}
}

async function deploySyncCoreTheme(theme, sinceRevision) {

	await cleanSandbox();

	let latestRevision = await syncCoreTheme(theme, sinceRevision);

	let prompt = await inquirer.prompt([{
		type: 'confirm',
		message: `Changes have been synced to your sandbox.  Please resolve any conflicts (noted in .rej files).  Are you ready to continue?`,
		name: "continue",
		default: false
	}]);

	if(!prompt.continue){
		console.log(`Aborted Core Sync Deploy.` );
		return;
	}

	let logs = await executeCommand(`svn log https://core.svn.wordpress.org/trunk/wp-content/themes/${theme} -r${sinceRevision}:HEAD`)
	let commitMessage = `${theme}: Merge latest core changes up to [wp${latestRevision}]

Summary:
${logs}

Test Plan: Activate ${theme} and ensure nothing is broken

Reviewers:
#themes_team

Subscribers:
`;

	let diffUrl = await createPhabricatorDiff (commitMessage);
	let diffId = diffUrl.split('a8c.com/')[1];

	prompt = await inquirer.prompt([{
		type: 'confirm',
		message: 'Are you ready to land these changes?',
		name: "continue",
		default: false
	}]);

	if(!prompt.continue){
		console.log(`Aborted Automated Deploy Sync Process Landing Phase\n\nYou will have to land these changes manually.  The ID of the diff to land: ${diffId}` );
		return;
	}

	return;
	// await landChanges(diffId);
	// await deployThemes([theme]);
	// await buildComZips([theme]);

}

/*
 Build .zip file for .com
*/
async function buildComZip(themeSlug) {

	console.log( `Building ${themeSlug} .zip` );

	let styleCss = fs.readFileSync(`${themeSlug}/style.css`, 'utf8');

	// Gets the theme version (Version:) and minimum WP version (Tested up to:) from the theme's style.css
	let themeVersion = getThemeMetadata(styleCss, 'Version');
	let wpVersionCompat = getThemeMetadata(styleCss, 'Requires at least');

	if (themeVersion && wpVersionCompat) {
		await executeOnSandbox(`php ${sandboxRootFolder}bin/themes/theme-downloads/build-theme-zip.php --stylesheet=pub/${themeSlug} --themeversion=${themeVersion} --wpversioncompat=${wpVersionCompat};`, true);
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
		try {
			await buildComZip(theme);
		} catch (err) {
			console.log(`There was an error building dotcom zip for ${theme}. ${err}`);
		}
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
*/
async function landChanges(diffId){
	return executeCommand(`ssh -tt -A ${remoteSSH} "cd ${sandboxPublicThemesFolder}; /usr/local/bin/arc patch ${diffId}; /usr/local/bin/arc land; exit;"`, true);
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

		while ( ! deploySuccess && attempt <= 2 ) {

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

		if ( ! deploySuccess ) {

			await inquirer.prompt([{
				type: 'confirm',
				message: `${theme} was not sucessfully deployed and should be deployed manually.`,
				name: "continue",
				default: false
			}]);
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
 If a theme has changes also update its changelog.
 Commit the change.
*/
async function versionBumpThemes() {
	console.log("Version Bumping");

	let themes = await getActionableThemes();
	let hash = await getLastDeployedHash();
	let changesWereMade = false;
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

		await versionBumpTheme(theme, true);
		await updateThemeChangelog(theme);
		changesWereMade = true;
	}

	//version bump the root project if there were changes to any of the themes
	let rootHasVersionBump = await checkProjectForVersionBump(hash);
	if ( versionBumpCount > 0 && ! rootHasVersionBump ) {
		await executeCommand(`npm version patch --no-git-tag-version && git add package.json package-lock.json`);
		changesWereMade = true;
	}

	return changesWereMade;
}

export function getThemeMetadata(styleCss, attribute) {
	if ( !styleCss || !attribute ) {
		return null;
	}
	switch ( attribute ) {
		case 'Version':
			return styleCss
				.match(/(?<=Version:\s*).*?(?=\s*\r?\n|\rg)/gs)[0]
				.trim()
				.replace('-wpcom', '');
		case 'Requires at least':
			return styleCss
				.match(/(?<=Requires at least:\s*).*?(?=\s*\r?\n|\rg)/gs);
	}
}

/*
 Update theme changelog using current commit logs.
 Used by versionBumpThemes to update each theme changelog.
*/
async function updateThemeChangelog(theme) {
	console.log(`Updating ${theme} changelog`);

	// Get theme version
 	let styleCss = fs.readFileSync(`${theme}/style.css`, 'utf8');
 	let version = getThemeMetadata(styleCss, 'Version');

	// Get list of updates
 	let logs = await getCommitLogs('', true);

	// Build changelog entry
	let newChangelogEntry = `== Changelog ==

= ${version} =
${logs}`;

	// Update readme.txt
	fs.readFile(`${theme}/readme.txt`, 'utf8', function(err, data) {
		let changelogSection = '== Changelog ==';
		let regex = new RegExp('^.*' + changelogSection + '.*$', 'gm');
		let formattedChangelog = data.replace(regex, newChangelogEntry);

		fs.writeFile(`${theme}/readme.txt`, formattedChangelog, 'utf8', function(err) {
			if (err) return console.log(err);
		});
	});
}

/*
 Version Bump a Theme.
 Used by versionBumpThemes to do the work of version bumping.
 First increment the patch version in style.css
 Then update any of these files with the new version: [package.json, style.scss, style-child-theme.scss]
*/
async function versionBumpTheme(theme, addChanges){

	console.log(`${theme} needs a version bump`);

	await executeCommand(`perl -pi -e 's/Version: ((\\d+\\.)*)(\\d+)(.*)$/"Version: ".$1.($3+1).$4/ge' ${theme}/style.css`, true);
	await executeCommand(`git add ${theme}/style.css`);

	let styleCss = fs.readFileSync(`${theme}/style.css`, 'utf8');
	let currentVersion = getThemeMetadata(styleCss, 'Version');

	let filesToUpdate = await executeCommand(`find ${theme} -name package.json -o -name style.scss -o -name style-child-theme.scss -maxdepth 2`);
	filesToUpdate = filesToUpdate.split('\n').filter(item => item != '');

	for ( let file of filesToUpdate ) {
		await executeCommand(`perl -pi -e 's/Version: (.*)$/"Version: '${currentVersion}'"/ge' ${file}`);
		await executeCommand(`perl -pi -e 's/\\"version\\": (.*)$/"\\"version\\": \\"'${currentVersion}'\\","/ge' ${file}`);
		if (addChanges){
			await executeCommand(`git add ${file}`);
		}
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
 Determine if the project has had a version bump since a given hash.
 Used by versionBumpThemes
 Compares the value of 'version' in package.json between the hash and current value
*/
async function checkProjectForVersionBump(hash){
	let previousPackageString = await executeCommand(`
		git show ${hash}:./package.json 2>/dev/null
	`);
	let previousPackage = JSON.parse(previousPackageString);
	let currentPackage = JSON.parse(fs.readFileSync(`./package.json`))
	return previousPackage.version != currentPackage.version;
}

/*
 Determine if a theme has had changes since a given hash.
 Used by versionBumpThemes
*/
async function checkThemeForChanges(theme, hash){
	let comittedChanges = await executeCommand(`git diff --name-only ${hash} HEAD -- ${theme}`);
	return comittedChanges != '';
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
 checkout origin/trunk and ensure it's up-to-date.
 Remove any other changes.
*/
async function cleanSandbox() {
	console.log('Cleaning the Themes Sandbox');
	await executeOnSandbox(`
		cd ${sandboxPublicThemesFolder};
		git reset --hard HEAD;
		git clean -fd;
		git checkout trunk;
		git pull;
		echo;
		git status
	`, true);
	console.log('All done cleaning.');
}

/*
 Clean the premium theme sandbox.
 checkout origin/trunk and ensure it's up-to-date.
 Remove any other changes.
*/
async function cleanPremiumSandbox() {
	console.log('Cleaning the Themes Sandbox');
	await executeOnSandbox(`
		cd ${sandboxPremiumThemesFolder};
		git reset --hard HEAD;
		git clean -fd;
		git checkout trunk;
		git pull;
		echo;
		git status
	`, true);
	console.log('All done cleaning.');
}
/*
 Clean the entire sandbox.
 checkout origin/trunk and ensure it's up-to-date.
 Remove any other changes.
*/
async function cleanAllSandbox() {
	console.log('Cleaning the Entire Sandbox');
	let response = await executeOnSandbox(`
		cd ${sandboxRootFolder};
		git reset --hard HEAD;
		git clean -fd;
		git checkout trunk;
		git pull;
		echo;
		git status
	`, true);
	console.log('All done cleaning.');
}

/*
  Push exactly what is here (all files) up to the sandbox (with the exclusion of files noted in .sandbox-ignore)
*/
async function pushToSandbox() {
	console.log("Pushing All Themes to Sandbox.");
	let allThemes = await getActionableThemes();
	allThemes = allThemes.filter( item=> ! premiumThemes.includes( item ) );
	console.log(`Syncing ${allThemes.length} themes`);
	for ( let theme of allThemes ) {
		await pushThemeToSandbox(theme);
	}
}

async function pushThemeToSandbox(theme) {
	console.log( `Syncing ${theme}` );
	return executeCommand(`
		rsync -avR --no-p --no-times --delete -m --exclude-from='.sandbox-ignore' ./${theme}/ wpcom-sandbox:${sandboxPublicThemesFolder}/
	`, true);
}

/*
  Push exactly what is here (all files) up to the sandbox (with the exclusion of files noted in .sandbox-ignore)
  This pushes only the folders noted as "premiumThemes" into the premium themes directory.

  This is the only part of the deploy process that is automated; the rest must be done manually including:
   * Creating a Phabricator Diff
   * Landing (comitting) the change
   * Deploying the theme
   * Triggering the .zip builds
*/
async function pushPremiumToSandbox() {

	//TODO: It would be nice to determine this list programatically
	const filesToModify = [
		'style.css',
		'block-templates/404.html',
		'block-template-parts/header.html',
		'block-template-parts/footer.html'
	];

	// Change 'blockbase' to 'blockbase-premium' in the files noted
	for ( let theme of premiumThemes ) {
		for ( let file of filesToModify ) {
			await executeCommand(`perl -pi -e 's/blockbase/blockbase-premium/' ${theme}/${file}`, true);
		}
	}

	// Push the changes in the premium themes to the sandbox
	await executeCommand(`
		rsync -avR --no-p --no-times --delete -m --exclude-from='.sandbox-ignore' --exclude='sass' ./${premiumThemes.join(' ./')} wpcom-sandbox:${sandboxPremiumThemesFolder}/
	`, true);

	// revert the local blockbase-premium changes
	for ( let theme of premiumThemes ) {
		for ( let file of filesToModify ) {
			await executeCommand(`
				git restore --source=HEAD --staged --worktree ./${theme}/${file}
			`);
		}
	}

}

/*
  Push only (and every) change since the point-of-diversion from /trunk
  Remove files from the sandbox that have been removed since the last deployed hash
*/
async function pushChangesToSandbox() {

	console.log("Pushing Changed Themes to Sandbox.");
	let hash = await getLastDeployedHash();
	let changedThemes = await getChangedThemes(hash);
	changedThemes = changedThemes.filter( item=> ! premiumThemes.includes( item ) );
	console.log(`Syncing ${changedThemes.length} themes`);

	for ( let theme of changedThemes ) {
		await pushThemeToSandbox(theme);
	}
}

async function pullCoreThemes() {
	console.log("Pulling CORE themes from sandbox.");
	for (let theme of coreThemes ) {
		await executeCommand(`
			rsync -avr --no-p --no-times --delete -m --exclude-from='.sandbox-ignore' wpcom-sandbox:${sandboxPublicThemesFolder}/${theme}/ ./${theme}/ 
		`, true);
	}
}

async function pushCoreThemes() {
	console.log("Pushing CORE themes to sandbox.");
	for (let theme of coreThemes ) {
		await executeCommand(`
			rsync -avr --no-p --no-times --delete -m --exclude-from='.sandbox-ignore' ./${theme}/ wpcom-sandbox:${sandboxPublicThemesFolder}/${theme}/ 
		`, true);
	}
}

async function syncCoreTheme(theme, sinceRevision) {
	if(!theme){
		console.log('Must supply theme to sync and revision to start from');
		return;
	}
	if(!sinceRevision) {
		sinceRevision = await executeOnSandbox(`cat ${sandboxPublicThemesFolder}/${theme}/.pub-svn-revision`);
	}
	let latestRevision = await executeCommand(`svn info -r HEAD https://core.svn.wordpress.org/trunk | grep Revision | egrep -o "[0-9]+"`);
	console.log(`syncing core theme ${theme} from ${sinceRevision} to ${latestRevision} on your sandbox`);
	try {
		await executeOnSandbox(`
			cd ${sandboxPublicThemesFolder};
			/usr/bin/svn diff --git -r ${sinceRevision}:HEAD https://core.svn.wordpress.org/trunk/wp-content/themes/${theme} | git apply --reject --ignore-space-change --ignore-whitespace -p4 --directory=${theme} -
		`, true);
	}
	catch (err) {
		console.log('Error merging:', err);
	}
	await executeOnSandbox(`
		echo '${latestRevision}' > ${sandboxPublicThemesFolder}/${theme}/.pub-svn-revision
	`);
	return latestRevision;
}


/*
 Build the Phabricator commit message.
 This message contains the logs from all of the commits since the given hash.
 Used by create*PhabricatorDiff
*/
async function buildPhabricatorCommitMessageSince(hash){

	let projectVersion = await executeCommand(`node -p "require('./package.json').version"`);
	let logs = await getCommitLogs(hash);
	return `Deploy Themes ${projectVersion} to wpcom

Summary:
${logs}

Test Plan: Execute Smoke Test

Reviewers:

Subscribers:
`;
}

/*
 Create a Phabricator diff with the given message based on the contents currently in the sandbox.
 Open the phabricator diff in your browser.
 Provide the URL of the phabricator diff.
*/
async function createPhabricatorDiff(commitMessage) {

	console.log('creating Phabricator Diff');

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
 Utility to pull the Phabricator URL from the diff creation command.
 Used by createPhabricatorDiff
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

	console.log('tagging deployment');

	let hash = options.hash || await getLastDeployedHash();

	let workInTheOpenPhabricatorUrl = '';
	if (options.diffId) {
		workInTheOpenPhabricatorUrl = `Phabricator: ${options.diffId}-code`;
	}
	let projectVersion = await executeCommand(`node -p "require('./package.json').version"`);
	let logs = await getCommitLogs(hash);
	let tag = `v${projectVersion}`;
	let message = `Deploy Themes ${tag} to wpcom. \n\n${logs} \n\n${workInTheOpenPhabricatorUrl}`;

	await executeCommand(`
		git tag -a ${tag} -m "${message}"
		git push origin ${tag}
	`, true);
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
export async function executeCommand(command, logResponse) {
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
			child = spawn(process.env.SHELL, ['-c', command], {
				stdio: [process.stdin, 'pipe', 'pipe'],
			});
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
