import { spawn } from 'child_process';
import fs, { existsSync } from 'fs';
import open from 'open';
import inquirer from 'inquirer';
import { RewritingStream } from 'parse5-html-rewriting-stream';
import { table } from 'table';

const remoteSSH = 'wpcom-sandbox';
const sandboxPublicThemesFolder = '/home/wpdev/public_html/wp-content/themes/pub';
const sandboxPremiumThemesFolder = '/home/wpdev/public_html/wp-content/themes/premium';
const sandboxRootFolder = '/home/wpdev/public_html/';
const isWin = process.platform === 'win32';
const premiumThemes = ['videomaker', 'videomaker-white'];
const coreThemes = ['twentyten', 'twentyeleven', 'twentytwelve', 'twentythirteen', 'twentyfourteen', 'twentyfifteen', 'twentysixteen', 'twentyseventeen', 'twentynineteen', 'twentytwenty', 'twentytwentyone', 'twentytwentytwo'];

const commands = {
	"push-button-deploy": {
		helpText: `
* Gets the last deployed hash from the sandbox
* Version bump all themes that have changes since the last deployment
* Commit the version bump change to github
* Clean the sandbox and ensure it is up - to - date
* Push all changed files(including removal of deleted files) since the last deployment
* Update the 'last deployed' hash on the sandbox
* Create a phabricator diff based on the changes since the last deployment.The description including the commit messages since the last deployment.
* Open the Phabricator Diff in your browser
* Create a tag in the github repository at this point of change which includes the phabricator link in the description
* After pausing to allow testing, land and deploy the changes
		`,
		run: pushButtonDeploy
	},
	"clean-sandbox": {
		helpText: 'Perform a hard reset, checkout trunk, and pull on the public themes working copy on your sandbox.',
		run: cleanSandbox
	},
	"clean-premium-sandbox": {
		helpText: 'Perform a hard reset, checkout trunk, and pull on the premium themes working copy on your sandbox.',
		run: cleanPremiumSandbox
	},
	"clean-all-sandbox": {
		helpText: 'Perform a hard reset, checkout trunk, and pull on both the public and premium themes working copies on your sandbox.',
		run: cleanAllSandbox
	},
	"push-to-sandbox": {
		helpText: 'Uses rsync to copy all modified files for all themes from the local machine to your sandbox.',
		run: pushToSandbox
	},
	"push-changes-to-sandbox": {
		helpText: 'Uses rsync to copy all modified files for any modified themes from the local machine to your sandbox.',
		run: pushChangesToSandbox
	},
	"push-theme-to-sandbox": {
		helpText: 'Uses rsync to copy all modified files for the specified theme from the local machine to your sandbox.',
		additionalArgs: '<theme-slug>',
		run: (args) => pushThemeToSandbox(args?.[1])
	},
	"push-premium-to-sandbox": {
		helpText: 'Uses rsync to copy all modified files for all premium themes from the local machine to your sandbox. For the blockbase theme, all instances of the string "blockbase" are replaced with "blockbase-premium".',
		run: pushPremiumToSandbox
	},
	"version-bump-themes": {
		helpText: 'Bump the version of any theme that has had changes since the last deployment. This includes bumping the version of any parent themes and updating the changelog for the theme.',
		run: versionBumpThemes
	},
	"land-diff": {
		helpText: 'Run arc land to merge in the specified diff id.',
		additionalArgs: '<arc diff id>',
		run: (args) => landChanges(args?.[1])
	},
	"deploy-preview": {
		helpText: 'Display a list of the changes to be deployed.',
		run: deployPreview
	},
	"deploy-theme": {
		helpText: 'This runs "deploy pub <theme>" on the provided list of themes.',
		additionalArgs: '<array of theme slugs>',
		run: (args) => deployThemes(args?.[1].split(','))
	},
	"build-com-zip": {
		helpText: 'Build the production zip file for the specified theme.',
		additionalArgs: '<theme-slug>',
		run: (args) => buildComZips(args?.[1].split(','))
	},
	"checkout-core-theme": {
		helpText: 'Use SVN to checkout the given core themes from the wpcom SVN repository.',
		additionalArgs: '<theme-slug>',
		run: (args) => checkoutCoreTheme(args?.[1])
	},
	"pull-core-themes": {
		helpText: 'Use rsync to copy all public CORE theme files from your sandbox to your local machine. CORE themes are any of the Twenty<whatever> themes.',
		run: pullCoreThemes
	},
	"push-core-themes": {
		helpText: 'Use rsync to copy all public CORE theme files from your local machine to your sandbox. CORE themes are any of the Twenty<whatever> themes.',
		run: pushCoreThemes
	},
	"sync-core-theme": {
		helpText: 'Given a theme slug and SVN revision, sync the theme from the specified revision to the latest. This requires the core theme to be currently checked out from the wpcom svn repository.',
		additionalArgs: '<theme-slug> <since-revision>',
		run: (args) => syncCoreTheme(args?.[1], args?.[2])
	},
	"deploy-sync-core-theme": {
		helpText: 'Given a theme slug and SVN revision, sync the theme from the specified revision to the latest. This command contains additional prompts and error checking not provided by sync-core-theme.',
		additionalArgs: '<theme-slug> <since-revision>',
		run: (args) => deploySyncCoreTheme(args?.[1], args?.[2])
	},
	"create-core-phabricator-diff": {
		helpText: 'Given a theme slug and specific revision create a Phabricator diff from the resources currently on the sandbox.',
		additionalArgs: '<theme-slug> <since-revision>',
		run: (args) => createCorePhabriactorDiff(args?.[1], args?.[2])
	},
	"update-theme-changelog": {
		helpText: 'Use the commit log to build a list of recent changes and add them as a new changelog entry. If add-changes is true, the updated readme.txt will be staged.',
		additionalArgs: '<theme-slug> <add-changes, true/false>',
		run: (args) => updateThemeChangelog(args?.[1], false, args?.[2])
	},
	"rebuild-theme-changelog": {
		helpText: 'Rebuild the entire change long from the given starting hash.',
		additionalArgs: '<theme-slug> <since>',
		run: (args) => rebuildThemeChangelog(args?.[1], args?.[2])
	},
	"escape-patterns": {
		helpText: 'Escapes block patterns for pattern files that have changes (staged or unstaged).',
		run: () => escapePatterns()
	},
	"help": {
		helpText: 'Displays the main help message.',
		run: (args) => showHelp(args?.[1])
	},
};

(async function start() {
	let args = process.argv.slice(2);
	let command = args?.[0];

	if (!commands[command]) {
		return showHelp();
	}

	commands[command].run(args);
})();

function showHelp(command = '') {
	if (!command || !commands.hasOwnProperty(command)) {
		console.log(`
node theme-utils.mjs [command]

Available commands:
_(theme-utils.mjs help [command] for more details)_

\t${Object.keys(commands).join('\n\t')}
	`);
		return;
	}

	const { helpText, additionalArgs } = commands[command];
	console.log(`
${command} ${additionalArgs ?? ''}

${helpText}
	`);
}

/*
 Create list of changes from git logs
 Optionally pass in a deployed hash or default to calling getLastDeployedHash()
 Optionally pass in boolean bulletPoints to add bullet points to each commit log
*/
async function getCommitLogs(hash, bulletPoints, theme) {
	if (!hash) {
		hash = await getLastDeployedHash();
	}

	let format = 'format:%s';
	let themeDir = '';

	if (bulletPoints) {
		format = 'format:"* %s"';
	}

	if (theme) {
		themeDir = `-- ./${theme}`;
	}

	let logs = await executeCommand(`git log --reverse --pretty=${format} ${hash}..HEAD ${themeDir}`);

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
	* Version bump all themes that have changes since the last deployment
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

	if (!prompt.continue) {
		return;
	}


	let message = await checkForDeployability();
	if (message) {
		return console.log(`\n\n${message}\n\n`);
	}

	try {
		await cleanSandbox();

		let hash = await getLastDeployedHash();
		let thingsWentBump = await versionBumpThemes();

		if (thingsWentBump) {
			prompt = await inquirer.prompt([{
				type: 'confirm',
				message: 'Are you good with the version bump and changelog updates? Make any manual adjustments now if necessary.',
				name: "continue",
				default: false
			}]);

			if (!prompt.continue) {
				console.log(`Aborted Automated Deploy Process at version bump changes.`);
				return;
			}
		}

		let changedThemes = await getChangedThemes(hash);

		await pushChangesToSandbox();


		//push changes (from version bump)
		if (thingsWentBump) {
			prompt = await inquirer.prompt([{
				type: 'confirm',
				message: 'Are you ready to push this version bump change to the source repository (Github)?',
				name: "continue",
				default: false
			}]);

			if (!prompt.continue) {
				console.log(`Aborted Automated Deploy Process at version bump push change.`);
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

		if (!prompt.continue) {
			console.log(`Aborted Automated Deploy Process Landing Phase\n\nYou will have to land these changes manually.  The ID of the diff to land: ${diffId}`);
			return;
		}

		await landChanges(diffId);

		let changedPublicThemes = changedThemes.filter(item => !premiumThemes.includes(item));

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

			if (!prompt.continue) {
				console.log(`Aborted Automated Deploy during deploy phase.`);
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
if (!theme) {
console.log('Must supply theme to sync and revision to start from');
return;
}
	await cleanSandbox();

	await checkoutCoreTheme(theme);
	await syncCoreTheme(theme, sinceRevision);

	let prompt = await inquirer.prompt([{
		type: 'confirm',
		message: `Changes have been synced locally.  Please resolve any conflicts now.  Are you ready to continue?`,
		name: "continue",
		default: false
	}]);

	if (!prompt.continue) {
		console.log(`Aborted Core Sync Deploy.`);
		return;
	}

	await pushThemeToSandbox(theme);
	let diffId = await createCorePhabriactorDiff(theme, sinceRevision);

	prompt = await inquirer.prompt([{
		type: 'confirm',
		message: 'Are you ready to land these changes?',
		name: "continue",
		default: false
	}]);

	if (!prompt.continue) {
		console.log(`Aborted Automated Deploy Sync Process Landing Phase\n\nYou will have to land these changes manually.  The ID of the diff to land: ${diffId}`);
		return;
	}

	return;
	// await landChanges(diffId);
	// await deployThemes([theme]);
	// await buildComZips([theme]);
}


async function buildCorePhabricatorCommitMessageSince(theme, sinceRevision){

	let latestRevision = await executeCommand(`svn info -r HEAD https://develop.svn.wordpress.org/trunk | grep Revision | egrep -o "[0-9]+"`);
	let logs = await executeCommand(`svn log https://core.svn.wordpress.org/trunk/wp-content/themes/${theme} -r${sinceRevision}:HEAD`)

	// Remove any double or back quotes from commit messages
	logs = logs.replace(/"/g, '');
	logs = logs.replace(/`/g, "'");

	return `${theme}: Merge latest core changes up to [wp${latestRevision}]

Summary:
${logs}

Test Plan: Activate ${theme} and ensure nothing is broken

Reviewers:
#themes_team

Subscribers:
`;
}

/**
 * Deploys the localy copy of a core theme to wpcom.
 */
async function createCorePhabriactorDiff(theme, sinceRevision) {

	let commitMessage = await buildCorePhabricatorCommitMessageSince(theme, sinceRevision);

	let diffUrl = await createPhabricatorDiff(commitMessage);
	let diffId = diffUrl.split('a8c.com/')[1];
	return diffId;
}

/*
 Build .zip file for .com
*/
async function buildComZip(themeSlug) {

	console.log(`Building ${themeSlug} .zip`);

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
	for (let theme of themes) {
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
async function checkForDeployability() {
	let branchName = await executeCommand('git symbolic-ref --short HEAD');
	if (branchName !== 'trunk') {
		return 'Only the /trunk branch can be deployed.';
	}

	await executeCommand('git remote update', true);
	let localMasterHash = await executeCommand('git rev-parse trunk')
	let remoteMasterHash = await executeCommand('git rev-parse origin/trunk')
	if (localMasterHash !== remoteMasterHash) {
		return 'Local /trunk is out-of-date.  Pull changes to continue.'
	}
	return null;
}

/*
 Land the changes from the given diff ID.  This is the "production merge".
*/
async function landChanges(diffId) {
	return executeCommand(`ssh -tt -A ${remoteSSH} "cd ${sandboxPublicThemesFolder}; /usr/local/bin/arc patch ${diffId}; /usr/local/bin/arc land; exit;"`, true);
}

async function getChangedThemes(hash) {
	console.log('Determining all changed themes');
	let themes = await getActionableThemes();
	let changedThemes = [];
	for (let theme of themes) {
		let hasChanges = await checkThemeForChanges(theme, hash);
		if (hasChanges) {
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
async function deployThemes(themes) {

	let response;

	for (let theme of themes) {

		console.log(`Deploying ${theme}`);

		let deploySuccess = false;
		let attempt = 0;

		while (!deploySuccess && attempt <= 2) {

			attempt++;
			console.log(`\nattempt #${attempt}\n\n`);

			response = await executeOnSandbox(`deploy pub ${theme};exit;`, true, true);

			deploySuccess = response.includes('successfully deployed to');

			if (!deploySuccess) {
				console.log('Deploy was not successful.  Trying again in 10 seconds...');
				await new Promise(resolve => setTimeout(resolve, 10000));
			}
			else {
				console.log("Deploy successful.");
			}

		}

		if (!deploySuccess) {

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
		if (!hasChanges) {
			// console.log(`${theme} has no changes`);
			continue;
		}

		versionBumpCount++;
		let hasVersionBump = await checkThemeForVersionBump(theme, hash);
		if (hasVersionBump) {
			continue;
		}

		await versionBumpTheme(theme, true);
		await updateThemeChangelog(theme, true);
		changesWereMade = true;
	}

	//version bump the root project if there were changes to any of the themes
	let rootHasVersionBump = await checkProjectForVersionBump(hash);
	if (versionBumpCount > 0 && !rootHasVersionBump) {
		await executeCommand(`npm version patch --no-git-tag-version && git add package.json package-lock.json`);
		changesWereMade = true;
	}

	return changesWereMade;
}

export function getThemeMetadata(styleCss, attribute) {
	if (!styleCss || !attribute) {
		return null;
	}
	switch (attribute) {
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

/* Rebuild theme changelog from a given starting hash */
async function rebuildThemeChangelog(theme, since) {

	console.log(`Rebuilding ${theme} changelog since ${since || 'forever'}`);

	if (since) {
		since = `${since}..HEAD`;
	} else {
		since = 'HEAD';
	}

	let hashes = await executeCommand(`git rev-list ${since} -- ./${theme}`);
	hashes = hashes.split('\n');

	let logs = '== Changelog ==\n';

	for (let hash of hashes) {
		let log = await executeCommand(`git log -n 1 --pretty=format:"* %s" ${hash}`);
		if (log.includes('Version Bump')) {
			let previousStyleString = await executeCommand(`git show ${hash}:${theme}/style.css 2>/dev/null`);
			let version = getThemeMetadata(previousStyleString, 'Version');
			logs += `\n= ${version} =\n`;
		} else {
			// Remove any double quotes from commit messages
			log = log.replace(/"/g, '');
			logs += log + '\n';
		}
	}

	// Get theme readme.txt
	let readmeFilePath = `${theme}/readme.txt`;

	// Update readme.txt
	fs.readFile(readmeFilePath, 'utf8', function (err, data) {
		let changelogSection = '== Changelog ==';
		let regex = new RegExp('^.*' + changelogSection + '.*$', 'gm');
		let formattedChangelog = data.replace(regex, logs);

		fs.writeFile(readmeFilePath, formattedChangelog, 'utf8', function (err) {
			if (err) return console.log(err);
		});
	});

}

/*
 Update theme changelog using current commit logs.
 Used by versionBumpThemes to update each theme changelog.
*/
async function updateThemeChangelog(theme, addChanges) {
	console.log(`Updating ${theme} changelog`);

	// Get theme version
	let styleCss = fs.readFileSync(`${theme}/style.css`, 'utf8');
	let version = getThemeMetadata(styleCss, 'Version');

	// Get list of updates with bullet points
	let logs = await getCommitLogs('', true, theme);

	// Get theme readme.txt
	let readmeFilePath = `${theme}/readme.txt`;

	if (!existsSync(readmeFilePath)) {
		console.log(`Unable to find a readme.txt for ${theme}.`);
		return;
	}

	// Build changelog entry
	let newChangelogEntry = `== Changelog ==

= ${version} =
${logs}`;

	// Update readme.txt
	fs.readFile(readmeFilePath, 'utf8', function (err, data) {
		let changelogSection = '== Changelog ==';
		let regex = new RegExp('^.*' + changelogSection + '.*$', 'gm');
		let formattedChangelog = data.replace(regex, newChangelogEntry);

		fs.writeFile(readmeFilePath, formattedChangelog, 'utf8', function (err) {
			if (err) return console.log(err);
		});
	});

	// Stage readme.txt
	if (addChanges) {
		await executeCommand(`git add ${readmeFilePath}`);
	}
}

/*
 Version Bump a Theme.
 Used by versionBumpThemes to do the work of version bumping.
 First increment the patch version in style.css
 Then update any of these files with the new version: [package.json, style.scss, style-child-theme.scss]
*/
async function versionBumpTheme(theme, addChanges) {

	console.log(`${theme} needs a version bump`);

	await executeCommand(`perl -pi -e 's/Version: ((\\d+\\.)*)(\\d+)(.*)$/"Version: ".$1.($3+1).$4/ge' ${theme}/style.css`, true);
	await executeCommand(`git add ${theme}/style.css`);

	let styleCss = fs.readFileSync(`${theme}/style.css`, 'utf8');
	let currentVersion = getThemeMetadata(styleCss, 'Version');

	let filesToUpdate = await executeCommand(`find ${theme} -not \\( -path "*/node_modules/*" -prune \\) -and \\( -name package.json -or -name style.scss -or -name style-child-theme.scss \\) -maxdepth 3`);
	filesToUpdate = filesToUpdate.split('\n').filter(item => item != '');

	for (let file of filesToUpdate) {
		await executeCommand(`perl -pi -e 's/Version: (.*)$/"Version: '${currentVersion}'"/ge' ${file}`);
		await executeCommand(`perl -pi -e 's/\\"version\\": (.*)$/"\\"version\\": \\"'${currentVersion}'\\","/ge' ${file}`);
		if (addChanges) {
			await executeCommand(`git add ${file}`);
		}
	}
}

/*
 Determine if a theme has had a version bump since a given hash.
 Used by versionBumpThemes
 Compares the value of 'version' in style.css between the hash and current value
*/
async function checkThemeForVersionBump(theme, hash) {
	return executeCommand(`
		git show ${hash}:${theme}/style.css 2>/dev/null
	`)
		.catch((error) => {
			//This is a new theme, no need to bump versions so we'll just say we've already done it
			return true;
		})
		.then((previousStyleString) => {
			if (previousStyleString === true) {
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
async function checkProjectForVersionBump(hash) {
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
async function checkThemeForChanges(theme, hash) {
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
		.map(item => item.replace('/', ''));
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
	allThemes = allThemes.filter(item => !premiumThemes.includes(item));
	console.log(`Syncing ${allThemes.length} themes`);
	for (let theme of allThemes) {
		await pushThemeToSandbox(theme);
	}
}

async function pushThemeToSandbox(theme) {
	console.log(`Syncing ${theme}`);
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
	for (let theme of premiumThemes) {
		for (let file of filesToModify) {
			await executeCommand(`perl -pi -e 's/blockbase/blockbase-premium/' ${theme}/${file}`, true);
		}
	}

	// Push the changes in the premium themes to the sandbox
	await executeCommand(`
		rsync -avR --no-p --no-times --delete -m --exclude-from='.sandbox-ignore' --exclude='sass' ./${premiumThemes.join(' ./')} wpcom-sandbox:${sandboxPremiumThemesFolder}/
	`, true);

	// revert the local blockbase-premium changes
	for (let theme of premiumThemes) {
		for (let file of filesToModify) {
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
	changedThemes = changedThemes.filter(item => !premiumThemes.includes(item));
	console.log(`Syncing ${changedThemes.length} themes`);

	for (let theme of changedThemes) {
		await pushThemeToSandbox(theme);
	}
}

async function checkoutCoreTheme(theme) {
	if (!theme) {
		console.log('Must supply theme to sync and revision to start from');
		return;
	}
	return executeCommand(`
		rm -rf ./${theme}
		svn checkout https://wpcom-themes.svn.automattic.com/${theme} ./${theme}
	`);
}

async function pullCoreThemes() {
	console.log("Pulling CORE themes from sandbox.");
	for (let theme of coreThemes) {
		await executeCommand(`
			rsync -avr --no-p --no-times --delete -m --exclude-from='.sandbox-ignore' wpcom-sandbox:${sandboxPublicThemesFolder}/${theme}/ ./${theme}/ 
		`, true);
	}
}

async function pushCoreThemes() {
	console.log("Pushing CORE themes to sandbox.");
	for (let theme of coreThemes) {
		await executeCommand(`
			rsync -avr --no-p --no-times --delete -m --exclude-from='.sandbox-ignore' ./${theme}/ wpcom-sandbox:${sandboxPublicThemesFolder}/${theme}/ 
		`, true);
	}
}

async function syncCoreTheme(theme, sinceRevision) {
	if (!theme) {
		console.log('Must supply theme to sync and revision to start from');
		return;
	}
	if (!sinceRevision) {
		sinceRevision = await executeCommand(`cat ./${theme}/.pub-svn-revision`);
	}
	let latestRevision = await executeCommand(`svn info -r HEAD https://develop.svn.wordpress.org/trunk | grep Revision | egrep -o "[0-9]+"`);
	console.log(`syncing core theme ${theme} from ${sinceRevision} to ${latestRevision}`);
	try {
		await executeCommand(`
			svn merge --accept postpone http://develop.svn.wordpress.org/trunk/src/wp-content/themes/${theme} ./${theme} -r${sinceRevision}:HEAD
			echo '${latestRevision}' > ./${theme}/.pub-svn-revision
		`, true);
	}
	catch (err) {
		console.log('Error merging:', err);
	}
	return latestRevision;
}


/*
 Build the Phabricator commit message.
 This message contains the logs from all of the commits since the given hash.
 Used by create*PhabricatorDiff
*/
async function buildPhabricatorCommitMessageSince(hash) {

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

	if (phabricatorUrl) {
		open(phabricatorUrl);
	}

	return phabricatorUrl;
}

/*
 Utility to pull the Phabricator URL from the diff creation command.
 Used by createPhabricatorDiff
*/
function getPhabricatorUrlFromResponse(response) {
	return response
		?.split('\n')
		?.find(item => {
			return item.includes('Revision URI: ');
		})
		?.split("Revision URI: ")[1];
}

/*
 Create a git tag at the current hash.
 In the description include the commit logs since the given hash.
 Include the (cleansed) Phabricator link.
*/
async function tagDeployment(options = {}) {

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
function executeOnSandbox(command, logResponse, enablePsudoterminal) {

	if (enablePsudoterminal) {
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
			if (logResponse) {
				console.log(data.toString());
			}
		});

		child.stderr.on('data', (data) => {
			errResponse += data;
			if (logResponse) {
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

async function escapePatterns() {
	// get staged files
	const staged = (await executeCommand(`git diff --cached --name-only`)).split('\n');
	// get unstaged, untracked files
	const unstaged = (await executeCommand(`git ls-files -m -o --exclude-standard`)).split('\n');
	
	// avoid duplicates and filter pattern files
	const patterns = [...new Set([...staged, ...unstaged])].filter(file => file.match(/.*\/patterns\/.*.php/g));

	// arrange patterns by theme
	const themePatterns = patterns.reduce((acc, file) => {
		const themeSlug = file.split('/').shift();
		return {
			...acc,
			[themeSlug]: (acc[themeSlug] || []).concat(file)
		};
	}, {});

	Object.entries(themePatterns).forEach(async ([themeSlug, patterns]) => {
		console.log(getPatternTable(themeSlug, patterns));
	
		const prompt = await inquirer.prompt([{
			type: 'input',
			message: 'Verify the theme slug',
			name: "themeSlug",
			default: themeSlug
		}]);

		if (!prompt.themeSlug) {
			return;
		}

		const rewriter = getReWriter(prompt.themeSlug);
		patterns.forEach(file => {
			const tmpFile = `${file}-tmp`;
			const rstream = fs.createReadStream( file, { encoding: 'UTF-8' } );
			const wstream = fs.createWriteStream( tmpFile, { encoding: 'UTF-8' } );
			wstream.on('finish', () => {
				fs.renameSync(tmpFile, file);
			});

			rstream.pipe(rewriter).pipe(wstream);
		});
	});


	// Helper functions
	function getReWriter(themeSlug) {
		const rewriter = new RewritingStream();

		rewriter.on('text', (_, raw) => {
			rewriter.emitRaw(escapeText(raw, themeSlug));
		});

		rewriter.on('startTag', (startTag, rawHtml) => {
			if (startTag.tagName === 'img') {
				const attrs = startTag.attrs.filter(attr => ['src', 'alt'].includes(attr.name));
				attrs.forEach(attr => {
					if (attr.name === 'src') {
						attr.value = escapeImagePath(attr.value);
					} else if (attr.name === 'alt') {
						attr.value = escapeText(attr.value, themeSlug, true);
					}
				});
			}


			rewriter.emitStartTag(startTag);
		});

		rewriter.on('comment', (comment, rawHtml) => {
			if (comment.text.startsWith('?php')) {
				rewriter.emitRaw(rawHtml);
				return;
			}
			// escape the strings in block config (blocks that are represented as comments)
			// ex: <!-- wp:search {label: "Search"} /-->
			const block = escapeBlockAttrs(comment.text, themeSlug)
			rewriter.emitComment({...comment, text: block})
		});

		return rewriter;
	}

	function escapeBlockAttrs(block, themeSlug) {
		// Set isAttr to true if it is an attribute in the result HTML
		// If set to true, it generates esc_attr_, otherwise it generates esc_html_
		const allowedAttrs=[
			{ name: 'label' },
			{ name: 'placeholder', isAttr: true },
			{ name: 'buttonText' },
			{ name: 'content' }
		];
		const start = block.indexOf('{');
		const end = block.lastIndexOf('}');
		
		const configPrefix = block.slice(0, start);
		const config = block.slice(start, end+1);
		const configSuffix = block.slice(end+1);

		try {
			const configJson = JSON.parse(config);
			allowedAttrs.forEach((attr) => {
				if (!configJson[attr.name]) return;
				configJson[attr.name] = escapeText(configJson[attr.name], themeSlug, attr.isAttr)
			})
			return configPrefix + JSON.stringify(configJson) + configSuffix;
		} catch (error) {
			// do nothing
			return block
		}
	}

	function escapeText(text, themeSlug, isAttr = false) {
		const trimmedText = text && text.trim();
		if (!themeSlug || !trimmedText || trimmedText.startsWith(`<?php`)) return text;
		const escFunction = isAttr ? 'esc_attr__' : 'esc_html__';
		const spaceChar = text.startsWith(' ') ? '&nbsp;' : ''
		const resultText = text.replace('\'', '\\\'').trim();
		return `${spaceChar}<?php echo ${escFunction}( '${resultText}', '${themeSlug}' ); ?>`;
	}

	function escapeImagePath(src) {
		if (!src || src.trim().startsWith('<?php')) return src;
		
		const assetsDir = 'assets';
		const parts = src.split('/');
		const resultSrc = parts.slice(parts.indexOf(assetsDir)).join('/');
		return `<?php echo esc_url( get_template_directory_uri() ); ?>/${resultSrc}`;
	}

	function getPatternTable(themeSlug, patterns) {
		const tableConfig = {
			columnDefault: {
				width: 80,
			},
			header: {
				alignment: 'center',
				content: `THEME: ${themeSlug}\n\n Following patterns may get updated with escaped strings and/or image paths`,
			}
		};

		return table([patterns], tableConfig);
	}
}