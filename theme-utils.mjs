import { execSync, spawn } from 'child_process';
import fs, { existsSync } from 'fs';
import util from 'util';
import open from 'open';
import process from 'process';
import inquirer from 'inquirer';
import { RewritingStream } from 'parse5-html-rewriting-stream';
import { table, getBorderCharacters } from 'table';
import progressbar from 'string-progressbar';
import semver from 'semver';
import Ajv from 'ajv';
import AjvDraft04 from 'ajv-draft-04';
import glob from 'fast-glob';
import chalk, { Chalk } from 'chalk';

const remoteSSH = 'wpcom-sandbox';
const sandboxPublicThemesFolder =
	'/home/wpcom/public_html/wp-content/themes/pub';
const sandboxRootFolder = '/home/wpcom/public_html/';
const glotPressScript =
	'~/public_html/bin/i18n/create-glotpress-project-for-theme.php';
const isWin = process.platform === 'win32';
const coreThemes = [
	'twentyten',
	'twentyeleven',
	'twentytwelve',
	'twentythirteen',
	'twentyfourteen',
	'twentyfifteen',
	'twentysixteen',
	'twentyseventeen',
	'twentynineteen',
	'twentytwenty',
	'twentytwentyone',
	'twentytwentytwo',
	'twentytwentythree',
	'twentytwentyfour',
];

const commands = {
	'push-button-deploy': {
		helpText: `
* Gets the last deployed hash from the sandbox
* Version bump all themes that have changes since the last deployment
* Commit the version bump change to github
* Clean the sandbox and ensure it is up - to - date
* Push all changed files (including removal of deleted files) since the last deployment
* Update the 'last deployed' hash on the sandbox
* Create a GitHub pull request based on the changes since the last deployment. The description including the commit messages since the last deployment.
* Open the GitHub pull request in your browser
* Create a tag in the github repository at this point of change which includes the GitHub pull request link in the description
* After pausing to allow testing, merge and deploy the changes
		`,
		run: pushButtonDeploy,
	},
	'clean-sandbox': {
		helpText:
			'Perform a hard reset, checkout trunk, and pull on the public themes working copy on your sandbox.',
		run: cleanSandbox,
	},
	'push-to-sandbox': {
		helpText:
			'Uses rsync to copy all modified files for all themes from the local machine to your sandbox.',
		run: pushToSandbox,
	},
	'push-changes-to-sandbox': {
		helpText:
			'Uses rsync to copy all modified files for any modified themes from the local machine to your sandbox.',
		run: pushChangesToSandbox,
	},
	'push-theme-to-sandbox': {
		helpText:
			'Uses rsync to copy all modified files for the specified theme from the local machine to your sandbox.',
		additionalArgs: '<theme-slug>',
		run: ( args ) => pushThemeToSandbox( args?.[ 1 ] ),
	},
	'version-bump-themes': {
		helpText:
			'Bump the version of any theme that has had changes since the last deployment. This includes bumping the version of any parent themes and updating the changelog for the theme. Optionally specify a single theme to version bump.',
		run: ( args ) => versionBumpThemes(	args?.[ 1 ]?.split( /[ ,]+/ ) ),
	},
	'version-bump-from-last-bump': {
		helpText:
			'Bump the version of any theme that has had changes since the last "Version Bump" commit. This includes updating the changelog for the theme. Optionally specify a single theme to version bump.',
		run: ( args ) => versionBumpThemesFromLastBump( args?.[ 1 ]?.split( /[ ,]+/ ) ),
	},
	'land-diff': {
		helpText: 'Run gh pr merge to merge in the specified pull request id.',
		additionalArgs: '<gh pr id>',
		run: ( args ) => landChanges( args?.[ 1 ] ),
	},
	'deploy-preview': {
		helpText: 'Display a list of the changes to be deployed.',
		run: deployPreview,
	},
	'deploy-theme': {
		helpText:
			'This runs "deploy pub <theme>" on the provided list of themes.',
		additionalArgs: '<array of theme slugs>',
		run: ( args ) => deployThemes( args?.[ 1 ].split( /[ ,]+/ ) ),
	},
	'add-strict-typing': {
		helpText: 'Adds strict typing to any changed themes.',
		run: () => addStrictTypesToChangedThemes(),
	},
	'build-com-zip': {
		helpText: 'Build the production zip file for the specified theme.',
		additionalArgs: '<theme-slug>',
		run: ( args ) => buildComZips( args?.[ 1 ].split( /[ ,]+/ ) ),
	},
	'checkout-core-theme': {
		helpText:
			'Use SVN to checkout the given core themes from the wpcom SVN repository.',
		additionalArgs: '<theme-slug>',
		run: ( args ) => checkoutCoreTheme( args?.[ 1 ] ),
	},
	'pull-all-themes': {
		helpText:
			'Use rsync to copy all public theme files from your sandbox to your local machine.',
		run: pullAllThemes,
	},
	'pull-core-themes': {
		helpText:
			'Use rsync to copy all public CORE theme files from your sandbox to your local machine. CORE themes are any of the Twenty<whatever> themes.',
		run: pullCoreThemes,
	},
	'push-core-themes': {
		helpText:
			'Use rsync to copy all public CORE theme files from your local machine to your sandbox. CORE themes are any of the Twenty<whatever> themes.',
		run: pushCoreThemes,
	},
	'sync-core-theme': {
		helpText:
			'Given a theme slug and SVN revision, sync the theme from the specified revision to the latest. This requires the core theme to be currently checked out from the wpcom svn repository.',
		additionalArgs: '<theme-slug> <since-revision>',
		run: ( args ) => syncCoreTheme( args?.[ 1 ], args?.[ 2 ] ),
	},
	'deploy-sync-core-theme': {
		helpText:
			'Given a theme slug and SVN revision, sync the theme from the specified revision to the latest. This command contains additional prompts and error checking not provided by sync-core-theme.',
		additionalArgs: '<theme-slug> <since-revision>',
		run: ( args ) => deploySyncCoreTheme( args?.[ 1 ], args?.[ 2 ] ),
	},
	'create-core-github-pr': {
		helpText:
			'Given a theme slug and specific revision create a GitHub pull request from the resources currently on the sandbox.',
		additionalArgs: '<theme-slug> <since-revision>',
		run: ( args ) => createCoreGithubPR( args?.[ 1 ], args?.[ 2 ] ),
	},
	'update-theme-changelog': {
		helpText:
			'Use the commit log to build a list of recent changes and add them as a new changelog entry. If add-changes is true, the updated readme.txt will be staged.',
		additionalArgs: '<theme-slug> <add-changes, true/false>',
		run: ( args ) =>
			updateThemeChangelog( args?.[ 1 ], false, args?.[ 2 ] ),
	},
	'rebuild-theme-changelog': {
		helpText:
			'Rebuild the entire change long from the given starting hash.',
		additionalArgs: '<theme-slug> <since>',
		run: ( args ) => rebuildThemeChangelog( args?.[ 1 ], args?.[ 2 ] ),
	},
	'escape-patterns': {
		helpText:
			'Escapes block patterns for pattern files that have changes (staged or unstaged).',
		additionalArgs: '[directory]',
		run: ( args ) => escapePatterns( args?.[ 1 ] ),
	},
	'validate-theme': {
		helpText: [
			'Validates a theme against the WordPress theme requirements.',
			'--format=FORMAT',
			wrapIndent( 'Output format. Possible values: *table*, json, dir.' ),
			'--color=WHEN',
			wrapIndent(
				'Colorize the output for table or dir formats. The automatic mode only enables colors if an interactive terminal is detected. Possible values: *auto*, always, never.'
			),
			'--table-width=COLUMNS',
			wrapIndent(
				'Explicitly set the width of the table format instead of determining it automatically. Will default to 120 if omitted and width cannot be determined automatically.'
			),
		].join( '\n\n' ),
		additionalArgs:
			'[--format=FORMAT] [--color=WHEN] [--table-width=COLUMNS] <array of theme slugs>',
		run: async ( args ) => {
			args.shift();
			const options = {};
			while ( args[ 0 ] && args[ 0 ].startsWith( '--' ) ) {
				const flag = args.shift().slice( 2 );
				const [ key, value ] = flag.split( '=' );
				const camelCaseKey = key.replace( /-([a-z])/g, ( [ , c ] ) =>
					c.toUpperCase()
				);
				options[ camelCaseKey ] = value ?? true;
			}
			const themes = args[ 0 ] ? args[ 0 ].split( /[ ,]+/ ) : [];
			if ( themes.length ) {
				await validateThemes( themes, options );
			}
		},
	},
	help: {
		helpText: 'Displays the main help message.',
		run: ( args ) => showHelp( args?.[ 1 ] ),
	},
};

( async function start() {
	let args = process.argv.slice( 2 );
	let command = args?.[ 0 ];

	if ( ! commands[ command ] ) {
		showHelp();
		process.exit( 1 );
	}

	await commands[ command ].run( args );
} )();

function wrapIndent(
	text,
	indent = '        ',
	newline = '\n',
	width = process.stdout.columns || 80
) {
	return text
		.match(
			new RegExp(
				`.{1,${ width - indent.length - 1 }}(\\s+|$)|[^\\s]+?(\\s+|$)`,
				'g'
			)
		)
		.map( ( line ) => indent + line )
		.join( newline );
}

function showHelp( command = '' ) {
	if ( ! command || ! commands.hasOwnProperty( command ) ) {
		console.log( `
node theme-utils.mjs [command]

Available commands:
_(theme-utils.mjs help [command] for more details)_

\t${ Object.keys( commands ).join( '\n\t' ) }
	` );
		return;
	}

	const { helpText, additionalArgs } = commands[ command ];
	console.log( `
${ command } ${ additionalArgs ?? '' }

${ helpText }
	` );
}

/*
 Create list of changes from git logs
 Optionally pass in a deployed hash or default to calling getLastDeployedHash()
 Optionally pass in boolean bulletPoints to add bullet points to each commit log
*/
async function getCommitLogs( hash, bulletPoints, theme ) {
	if ( ! hash ) {
		hash = await getLastDeployedHash();
	}

	let format = 'format:%s';
	let themeDir = '';

	if ( bulletPoints ) {
		format = 'format:"* %s"';
	}

	if ( theme ) {
		themeDir = `-- ./${ theme }`;
	}

	let logs = await executeCommand(
		`git log --reverse --pretty=${ format } ${ hash }..HEAD ${ themeDir }`
	);

	// Remove any double quotes from commit messages
	logs = logs.replace( /"/g, '' );

	return logs;
}

/*
 Determine what changes would be deployed
*/
async function deployPreview() {
	console.clear();
	console.log(
		'To ensure accuracy clean your sandbox before previewing. (It is not automatically done).'
	);

	let message = await checkForDeployability();
	if ( message ) {
		console.log( `\n${ message }\n\n` );
	}

	let hash = await getLastDeployedHash();
	console.log( `Last deployed hash: ${ hash }` );

	let changedThemes = await getChangedThemes( hash );
	console.log( `The following themes have changes:\n${ changedThemes }` );

	let logs = await getCommitLogs( hash );
	console.log( `\n\nCommit log of changes to be deployed:\n\n${ logs }\n\n` );
}

async function addStrictTypesToChangedThemes() {
	let hash = await getLastDeployedHash();
	const changedThemes = await getChangedThemes( hash );

	for ( let theme of changedThemes ) {
		await executeCommand(
			`
			bash -c "./add-strict-types.sh ${ theme }"
		`,
			true
		).catch( ( err ) => {
			console.log( `Error adding strict types to ${ theme }: ${ err }` );
		} );
	}
}

/*
 Execute the first phase of a deployment.
	* Gets the last deployed hash from the sandbox
	* Version bump all themes that have changes since the last deployment
	* Commit the version bump change to github
	* Clean the sandbox and ensure it is up-to-date
	* Push all changed files (including removal of deleted files) since the last deployment
	* Update the 'last deployed' hash on the sandbox
	* Create a GitHub pull request based on the changes since the last deployment.  The description including the commit messages since the last deployment.
	* Open the GitHub pull request in your browser
	* Create a tag in the github repository at this point of change which includes the GitHub pull request link in the description
*/
async function pushButtonDeploy() {
	console.clear();
	let prompt = await inquirer.prompt( [
		{
			type: 'confirm',
			message:
				'You are about to deploy /trunk.  Are you ready to continue?',
			name: 'continue',
			default: false,
		},
	] );

	if ( ! prompt.continue ) {
		return;
	}

	let message = await checkForDeployability();
	if ( message ) {
		return console.log( `\n\n${ message }\n\n` );
	}

	try {
		await cleanSandbox();

		const hash = await getLastDeployedHash();
		await addStrictTypesToChangedThemes();
		const thingsWentBump = await versionBumpThemes();

		if ( thingsWentBump ) {
			prompt = await inquirer.prompt( [
				{
					type: 'confirm',
					message:
						'Are you good with the version bump and changelog updates? Make any manual adjustments now if necessary.',
					name: 'continue',
					default: false,
				},
			] );

			if ( ! prompt.continue ) {
				console.log(
					`Aborted Automated Deploy Process at version bump changes.`
				);
				return;
			}
		}

		const changedThemes = await getChangedThemes( hash );

		if ( ! changedThemes.length ) {
			console.log(
				`\n\nEverything is upto date. Nothing new to deploy.\n\n`
			);
			return;
		}

		await pushChangesToSandbox();
		await createGlotPressProject( changedThemes );

		//push changes (from version bump)
		if ( thingsWentBump ) {
			prompt = await inquirer.prompt( [
				{
					type: 'confirm',
					message:
						'Are you ready to push this version bump change to the source repository (GitHub.com)?',
					name: 'continue',
					default: false,
				},
			] );

			if ( ! prompt.continue ) {
				console.log(
					`Aborted Automated Deploy Process at version bump push change.`
				);
				return;
			}
			await executeCommand(
				`
				git commit -m "Version Bump";
				git push --set-upstream origin trunk
			`,
				true
			);
		}

		await updateLastDeployedHash();

		let commitMessage = await buildGithubCommitMessageSince( hash );

		// Make sure the themes/pub repo in sandbox is ready to create a PR to the A8C GitHub Host
		prompt = await inquirer.prompt( [
			{
				type: 'confirm',
				message:
					'Before you can create the GitHub PR, login in A8C GitHub Enterprise Server from the themes/pub repo in your sandbox with the command "gh auth login" and using your SSH key.\nAre you logged in?',
				name: 'continue',
				default: false,
			},
		] );

		if ( ! prompt.continue ) {
			console.log(
				`Aborted Automated Deploy Process at require to login in into A8C GitHub Enterprise Server in sandbox.`
			);
			return;
		}

		let prUrl = await createGithubPR( commitMessage );
		let prId = prUrl.split( 'pull/' )[ 1 ];

		await tagDeployment( {
			hash: hash,
			prId: prId,
		} );

		console.log(
			`\n\nPhase One Complete\n\nYour sandbox has been updated and the PR is available for review.\nPlease give your sandbox a smoke test to determine that the changes work as expected.\nThe following themes have had changes: \n\n${ changedThemes.join(
				' '
			) }\n\n\n`
		);

		prompt = await inquirer.prompt( [
			{
				type: 'confirm',
				message: 'Are you ready to land these changes?',
				name: 'continue',
				default: false,
			},
		] );

		if ( ! prompt.continue ) {
			console.log(
				`Aborted Automated Deploy Process Landing Phase\n\nYou will have to land these changes manually.  The ID of the PR to land: ${ prId }`
			);
			return;
		}

		await landChanges( prId );

		try {
			await deployThemes( changedThemes );
		} catch ( err ) {
			prompt = await inquirer.prompt( [
				{
					type: 'confirm',
					message: `There was an error deploying themes.  ${ err }  Do you wish to continue to the next step?`,
					name: 'continue',
					default: false,
				},
			] );

			if ( ! prompt.continue ) {
				console.log( `Aborted Automated Deploy during deploy phase.` );
				return;
			}
		}

		await buildComZips( changedThemes );

		console.log(
			`The following themes have changed:\n${ changedThemes.join(
				'\n'
			) }`
		);
		console.log( '\n\nAll Done!!\n\n' );
	} catch ( err ) {
		console.log( 'ERROR with deploy script: ', err );
	}
}

async function deploySyncCoreTheme( theme, sinceRevision ) {
	if ( ! theme ) {
		console.log( 'Must supply theme to sync and revision to start from' );
		return;
	}
	await cleanSandbox();

	await checkoutCoreTheme( theme );
	await syncCoreTheme( theme, sinceRevision );

	let prompt = await inquirer.prompt( [
		{
			type: 'confirm',
			message: `Changes have been synced locally.  Please resolve any conflicts now.  Are you ready to continue?`,
			name: 'continue',
			default: false,
		},
	] );

	if ( ! prompt.continue ) {
		console.log( `Aborted Core Sync Deploy.` );
		return;
	}

	await pushThemeToSandbox( theme );
	let prId = await createCoreGithubPR( theme, sinceRevision );

	prompt = await inquirer.prompt( [
		{
			type: 'confirm',
			message: 'Are you ready to land these changes?',
			name: 'continue',
			default: false,
		},
	] );

	if ( ! prompt.continue ) {
		console.log(
			`Aborted Automated Deploy Sync Process Landing Phase\n\nYou will have to land these changes manually.  The ID of the PR to land: ${ prId }`
		);
		return;
	}

	await landChanges( prId );
	await deployThemes( [ theme ] );
	await buildComZips( [ theme ] );
	return;
}

async function buildCoreGithubCommitMessageSince( theme, sinceRevision ) {
	let latestRevision = await executeCommand(
		`svn info -r HEAD https://develop.svn.wordpress.org/trunk | grep Revision | egrep -o "[0-9]+"`
	);
	let logs = await executeCommand(
		`svn log https://core.svn.wordpress.org/trunk/wp-content/themes/${ theme } -r${ sinceRevision }:HEAD`
	);

	// Remove any double or back quotes from commit messages
	logs = logs.replace( /"/g, '' );
	logs = logs.replace( /`/g, "'" );
	logs = logs.replace( /\$/g, '%24' );

	return `${ theme }: Merge latest core changes up to [wp${ latestRevision }]

Summary:
${ logs }

Test Plan: Activate ${ theme } and ensure nothing is broken

Reviewers:
#themes_team

Subscribers:
`;
}

/**
 * Deploys the localy copy of a core theme to wpcom.
 */
async function createCoreGithubPR( theme, sinceRevision ) {
	let commitMessage = await buildCoreGithubCommitMessageSince(
		theme,
		sinceRevision
	);

	let prUrl = await createGithubPR( commitMessage );
	let prId = prUrl.split( 'pull/' )[ 1 ];
	return prId;
}

/*
 Build .zip file for .com
*/
async function buildComZip( themeSlug ) {
	console.log( `Building ${ themeSlug } .zip` );

	let styleCss = fs.readFileSync( `${ themeSlug }/style.css`, 'utf8' );

	// Gets the theme version (Version:) and minimum WP version (Tested up to:) from the theme's style.css
	let themeVersion = getThemeMetadata( styleCss, 'Version' );
	let wpVersionCompat = getThemeMetadata( styleCss, 'Requires at least' );

	if ( themeVersion && wpVersionCompat ) {
		await executeOnSandbox(
			`php ${ sandboxRootFolder }bin/themes/theme-downloads/build-theme-zip.php --stylesheet=pub/${ themeSlug } --themeversion=${ themeVersion } --wpversioncompat=${ wpVersionCompat };`,
			true
		);
	} else {
		console.log( 'Unable to build theme .zip.' );
		if ( ! themeVersion ) {
			console.log(
				'Could not find theme version (Version:) in the theme style.css.'
			);
		}
		if ( ! wpVersionCompat ) {
			console.log(
				'Could not find WP compat version (Requires at least:) in the theme style.css.'
			);
		}
		console.log(
			'Please build the .zip file for the theme manually.',
			themeSlug
		);
		open( 'https://mc.a8c.com/themes/downloads/' );
	}
}

async function buildComZips( themes ) {
	console.log( `Building dotcom .zip files` );
	const progress = startProgress( themes.length );
	const failedThemes = [];
	for ( let theme of themes ) {
		try {
			await buildComZip( theme );
		} catch ( err ) {
			console.log(
				`There was an error building dotcom zip for ${ theme }. ${ err }`
			);
			failedThemes.push( theme );
		}
		progress.increment();
	}

	if ( failedThemes.length ) {
		const tableConfig = {
			columnDefault: {
				width: 40,
			},
			header: {
				alignment: 'center',
				content: `There was an error building dotcom zip for following themes.`,
			},
		};
		console.log(
			table(
				failedThemes.map( ( t ) => [ t ] ),
				tableConfig
			)
		);
	}
}

/*
 Check to ensure that:
  * The current branch is /trunk
  * That trunk is up-to-date with origin/trunk
*/
async function checkForDeployability() {
	let branchName = await executeCommand( 'git symbolic-ref --short HEAD' );
	if ( branchName !== 'trunk' ) {
		return 'Only the /trunk branch can be deployed.';
	}

	await executeCommand( 'git remote update', true );
	let localMasterHash = await executeCommand( 'git rev-parse trunk' );
	let remoteMasterHash = await executeCommand( 'git rev-parse origin/trunk' );
	if ( localMasterHash !== remoteMasterHash ) {
		return 'Local /trunk is out-of-date.  Pull changes to continue.';
	}
	return null;
}

/*
 Land the changes from the given PR ID.  This is the "production merge".
*/
async function landChanges( prId ) {
	return executeCommand(
		`ssh -tt -A ${ remoteSSH } "cd ${ sandboxPublicThemesFolder } && gh pr merge ${ prId } --squash; exit;"`,
		true
	);
}

async function getChangedThemes( hash ) {
	console.log( 'Determining all changed themes' );
	let themes = await getActionableThemes();
	let changedThemes = [];
	for ( let theme of themes ) {
		let hasChanges = await checkThemeForChanges( theme, hash );
		if ( hasChanges ) {
			changedThemes.push( theme );
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
	const failedThemes = [];
	const progress = startProgress( themes.length );

	for ( let theme of themes ) {
		console.log( `Deploying ${ theme }` );

		let deploySuccess = false;
		let attempt = 0;

		while ( ! deploySuccess && attempt <= 2 ) {
			attempt++;
			console.log( `\nattempt #${ attempt }\n\n` );

			try {
				response = await executeOnSandbox(
					`deploy pub ${ theme };exit;`,
					true,
					true
				);
				deploySuccess = response.includes( 'successfully deployed to' );
			} catch ( error ) {
				deploySuccess = false;
			}

			if ( ! deploySuccess ) {
				console.log(
					'Deploy was not successful.  Trying again in 10 seconds...'
				);
				await new Promise( ( resolve ) =>
					setTimeout( resolve, 10000 )
				);
			} else {
				console.log( 'Deploy successful.' );
			}
		}

		if ( ! deploySuccess ) {
			console.log(
				`${ theme } was not sucessfully deployed and should be deployed manually.`
			);
			failedThemes.push( theme );
		}

		progress.increment();
	}

	if ( failedThemes.length ) {
		const tableConfig = {
			columnDefault: {
				width: 40,
			},
			header: {
				alignment: 'center',
				content: `Following themes are not deployed.`,
			},
		};
		console.log(
			table(
				failedThemes.map( ( t ) => [ t ] ),
				tableConfig
			)
		);
	}
}

/*
 Provide the hash of the last managed deployment.
 This hash is used to determine all the changes that have happened between that point and the current point.
*/
async function getLastDeployedHash() {
	let result = await executeOnSandbox( `
		cat ${ sandboxPublicThemesFolder }/.pub-git-hash
	` );
	return result;
}

/*
 Update the 'last deployed hash' on the server with the current hash.
*/
async function updateLastDeployedHash() {
	let hash = await executeCommand( `git rev-parse HEAD` );
	await executeOnSandbox( `
		echo '${ hash }' > ${ sandboxPublicThemesFolder }/.pub-git-hash
	` );
}

/*
 Version bump (increment version patch) any theme project that has had changes since the last deployment.
 If a theme's version has already been changed since that last deployment then do not version bump it.
 If any theme projects have had a version bump also version bump the parent project.
 If a theme has changes also update its changelog.
 Commit the change.
*/
async function versionBumpThemes( themeSlugs ) {
	console.log( 'Version Bumping' );

	const themes = themeSlugs ? themeSlugs : await getActionableThemes();
	const latestTag = execSync( 'git describe --tags --abbrev=0' )
		.toString()
		.trim();
	// Get the hash for the latest tag.
	const hash = execSync( `git rev-parse ${ latestTag }` ).toString().trim();
	let versionBumpCount = 0;
	let changesWereMade = false;

	for ( let theme of themes ) {
		const hasChanges = await checkThemeForChanges( theme, hash );

		if ( ! hasChanges ) {
			continue;
		}

		versionBumpCount++;
		const hasVersionBump = await checkThemeForVersionBump( theme, hash );

		if ( hasVersionBump ) {
			continue;
		}

		await versionBumpTheme( theme, true );
		await updateThemeChangelog( theme, true );
		changesWereMade = true;
	}

	//version bump the root project if there were changes to any of the themes
	const rootHasVersionBump = await checkProjectForVersionBump( hash );

	if ( versionBumpCount === 0 ) {
		console.log(
			'No changes detected; Root package version bump not required'
		);
	} else if ( ! rootHasVersionBump ) {
		await executeCommand(
			`npm version patch --no-git-tag-version && git add package.json package-lock.json`
		);
		changesWereMade = true;
	}

	return changesWereMade;
}

/*
 Version bump (increment version patch) any theme project that has had changes since the last "Version Bump" commit (e.g. for running via the GH Action, as we do not want to use the last wpcom deployment as a reference.)
 If a theme's version has already been changed since that last commit then do not version bump it.
 If a theme has changes also update its changelog.
 Does not update the root project version.
*/
async function versionBumpThemesFromLastBump( themeSlugs ) {
	console.log( 'Version Bumping' );

	const themes = themeSlugs ? themeSlugs : await getActionableThemes();
	// Get the hash for the latest "Version Bump" commit.
	const hash = execSync( `git log -1 --grep="Version Bump" --format=%H` ).toString().trim();
	let changesWereMade = false;

	for ( let theme of themes ) {
		const hasChanges = await checkThemeForChanges( theme, hash );

		if ( ! hasChanges ) {
			continue;
		}

		const hasVersionBump = await checkThemeForVersionBump( theme, hash );

		if ( hasVersionBump ) {
			continue;
		}

		await versionBumpTheme( theme, true );
		await updateThemeChangelog( theme, true );
		changesWereMade = true;
	}

	console.log( `Version bumping complete:`, changesWereMade ? 'themes successfully version bumped' : 'no changes were made' );

	return changesWereMade;
}

export function getThemeMetadata( styleCss, attribute, trimWPCom = true ) {
	if ( ! styleCss || ! attribute ) {
		return null;
	}
	switch ( attribute ) {
		case 'Version':
			const version = styleCss
				.match( /(?<=Version:\s*).*?(?=\s*\r?\n|\rg)/gs )?.[ 0 ]
				?.trim();
			return trimWPCom ? version.replace( '-wpcom', '' ) : version;
		case 'Requires at least':
			return styleCss
				.match(
					/(?<=Requires at least:\s*).*?(?=\s*\r?\n|\rg)/gs
				)?.[ 0 ]
				?.trim();
		default:
			return styleCss
				.match(new RegExp(`(?<=${attribute}:\\s*).*?(?=\\s*\\r?\\n|\\rg)`, 'gs'))?.[0]
				?.trim();
	}
}

/* Rebuild theme changelog from a given starting hash */
async function rebuildThemeChangelog( theme, since ) {
	console.log(
		`Rebuilding ${ theme } changelog since ${ since || 'forever' }`
	);

	if ( since ) {
		since = `${ since }..HEAD`;
	} else {
		since = 'HEAD';
	}

	let hashes = await executeCommand(
		`git rev-list ${ since } -- ./${ theme }`
	);
	hashes = hashes.split( '\n' );

	let logs = '== Changelog ==\n';

	for ( let hash of hashes ) {
		let log = await executeCommand(
			`git log -n 1 --pretty=format:"* %s" ${ hash }`
		);
		if ( log.includes( 'Version Bump' ) ) {
			let previousStyleString = await executeCommand(
				`git show ${ hash }:${ theme }/style.css 2>/dev/null`
			);
			let version = getThemeMetadata( previousStyleString, 'Version' );
			logs += `\n= ${ version } =\n`;
		} else {
			// Remove any double quotes from commit messages
			log = log.replace( /"/g, '' );
			logs += log + '\n';
		}
	}

	// Get theme readme.txt
	let readmeFilePath = `${ theme }/readme.txt`;

	// Update readme.txt
	fs.readFile( readmeFilePath, 'utf8', function ( err, data ) {
		let changelogSection = '== Changelog ==';
		let regex = new RegExp( '^.*' + changelogSection + '.*$', 'gm' );
		let formattedChangelog = data.replace( regex, logs );

		fs.writeFile(
			readmeFilePath,
			formattedChangelog,
			'utf8',
			function ( err ) {
				if ( err ) return console.log( err );
			}
		);
	} );
}

/*
 Update theme changelog using current commit logs.
 Used by versionBumpThemes to update each theme changelog.
*/
async function updateThemeChangelog( theme, addChanges ) {
	console.log( `Updating ${ theme } changelog` );

	// Get theme version
	let styleCss = fs.readFileSync( `${ theme }/style.css`, 'utf8' );
	let version = getThemeMetadata( styleCss, 'Version' );

	// Get list of updates with bullet points
	const lastestTagHash = execSync( 'git describe --tags --abbrev=0' )
		.toString()
		.trim();
	let logs = await getCommitLogs( lastestTagHash, true, theme );

	// Get theme readme.txt
	let readmeFilePath = `${ theme }/readme.txt`;

	if ( ! existsSync( readmeFilePath ) ) {
		console.log( `Unable to find a readme.txt for ${ theme }.` );
		return;
	}

	// Build changelog entry
	let newChangelogEntry = `== Changelog ==

= ${ version } =
${ logs }`;

	// Update readme.txt
	fs.readFile( readmeFilePath, 'utf8', function ( err, data ) {
		let changelogSection = '== Changelog ==';
		let regex = new RegExp( '^.*' + changelogSection + '.*$', 'gm' );
		let formattedChangelog = data.replace( regex, newChangelogEntry );

		fs.writeFile(
			readmeFilePath,
			formattedChangelog,
			'utf8',
			function ( err ) {
				if ( err ) return console.log( err );
			}
		);
	} );

	// Stage readme.txt
	if ( addChanges ) {
		await executeCommand( `git add ${ readmeFilePath }` );
	}
}

/*
 Version Bump a Theme.
 Used by versionBumpThemes to do the work of version bumping.
 First increment the patch version in style.css
 Then update any of these files with the new version: [package.json, style.scss, style-child-theme.scss]
*/
async function versionBumpTheme( theme, addChanges ) {
	console.log( `${ theme } needs a version bump` );

	await executeCommand(
		`perl -pi -e 's/Version: ((\\d+\\.)*)(\\d+)(.*)$/"Version: ".$1.($3+1).$4/ge' ${ theme }/style.css`,
		true
	);
	await executeCommand( `git add ${ theme }/style.css` );

	let styleCss = fs.readFileSync( `${ theme }/style.css`, 'utf8' );
	let currentVersion = getThemeMetadata( styleCss, 'Version', false );

	let filesToUpdate = await executeCommand(
		`find ${ theme } -not \\( -path "*/node_modules/*" -prune \\) -and \\( -name package.json -or -name style.scss -or -name style-rtl.css -or -name style-child-theme.scss \\) -maxdepth 3`
	);
	filesToUpdate = filesToUpdate
		.split( '\n' )
		.filter( ( item ) => item != '' );

	for ( let file of filesToUpdate ) {
		const isPackageJson = file === `${ theme }/package.json`;
		if ( isPackageJson ) {
			// update theme/package.json and package-lock.json
			await executeCommand(
				`npm version ${ currentVersion.replace(
					'-wpcom',
					''
				) } --workspace=${ theme }`
			);
		} else {
			await executeCommand(
				`perl -pi -e 's/Version: (.*)$/"Version: '${ currentVersion }'"/ge' ${ file }`
			);
		}
		if ( addChanges ) {
			await executeCommand( `git add ${ file }` );
		}
	}
}

/*
 Determine if a theme has had a version bump since a given hash.
 Used by versionBumpThemes
 Compares the value of 'version' in style.css between the hash and current value
*/
async function checkThemeForVersionBump( theme, hash ) {
	return executeCommand( `
		git show ${ hash }:${ theme }/style.css 2>/dev/null
	` )
		.catch( ( error ) => {
			//This is a new theme, no need to bump versions so we'll just say we've already done it
			return true;
		} )
		.then( ( previousStyleString ) => {
			if ( previousStyleString === true ) {
				return previousStyleString;
			}
			let previousVersion = getThemeMetadata(
				previousStyleString,
				'Version'
			);
			let styleCss = fs.readFileSync( `${ theme }/style.css`, 'utf8' );
			let currentVersion = getThemeMetadata( styleCss, 'Version' );
			return previousVersion != currentVersion;
		} );
}

/*
 Determine if the project has had a version bump since a given hash.
 Used by versionBumpThemes
 Compares the value of 'version' in package.json between the hash and current value
*/
async function checkProjectForVersionBump( hash ) {
	let previousPackageString = await executeCommand( `
		git show ${ hash }:./package.json 2>/dev/null
	` );
	let previousPackage = JSON.parse( previousPackageString );
	let currentPackage = JSON.parse( fs.readFileSync( `./package.json` ) );
	return previousPackage.version != currentPackage.version;
}

/*
 Determine if a theme has had changes since a given hash.
 Used by versionBumpThemes
*/
async function checkThemeForChanges( theme, hash ) {
	let comittedChanges = await executeCommand(
		`git diff --name-only ${ hash } HEAD -- ${ theme }`
	);
	return comittedChanges != '';
}

/*
 Provide a list of 'actionable' themes (those themes that have style.css files)
*/
async function getActionableThemes() {
	let result = await executeCommand( `for d in */; do
		if test -f "./$d/style.css"; then
			echo $d;
		fi
	done` );
	return result.split( '\n' ).map( ( item ) => item.replace( '/', '' ) );
}

/*
 Clean the theme sandbox.
 checkout origin/trunk and ensure it's up-to-date.
 Remove any other changes.
*/
async function cleanSandbox() {
	console.log( 'Cleaning the Themes Sandbox' );
	await executeOnSandbox(
		`
		cd ${ sandboxPublicThemesFolder };
		git reset --hard HEAD;
		git clean -fd;
		git checkout trunk;
		git pull;
		echo;
		git status
	`,
		true
	);
	console.log( 'All done cleaning.' );
}

/*
  Push exactly what is here (all files) up to the sandbox (with the exclusion of files noted in .sandbox-ignore)
*/
async function pushToSandbox() {
	console.log( 'Pushing All Themes to Sandbox.' );
	let allThemes = await getActionableThemes();
	console.log( `Syncing ${ allThemes.length } themes` );
	for ( let theme of allThemes ) {
		await pushThemeToSandbox( theme );
	}
}

async function pushThemeToSandbox( theme ) {
	console.log( `Syncing ${ theme }` );
	return executeCommand(
		`
		rsync -avR --no-p --no-times --delete -m --exclude-from='.sandbox-ignore' ./${ theme }/ wpcom-sandbox:${ sandboxPublicThemesFolder }/
	`,
		true
	);
}

/*
  Push only (and every) change since the point-of-diversion from /trunk
  Remove files from the sandbox that have been removed since the last deployed hash
*/
async function pushChangesToSandbox() {
	console.log( 'Pushing Changed Themes to Sandbox.' );
	let hash = await getLastDeployedHash();
	let changedThemes = await getChangedThemes( hash );
	console.log( `Syncing ${ changedThemes.length } themes` );

	for ( let theme of changedThemes ) {
		await pushThemeToSandbox( theme );
	}
}

async function checkoutCoreTheme( theme ) {
	if ( ! theme ) {
		console.log( 'Must supply theme to sync and revision to start from' );
		return;
	}
	return executeCommand( `
		rm -rf ./${ theme }
		svn checkout https://wpcom-themes.svn.automattic.com/${ theme } ./${ theme }
	` );
}

async function pullAllThemes() {
	console.log( 'Pulling ALL themes from sandbox.' );
	let allThemes = await getActionableThemes();
	for ( let theme of allThemes ) {
		try {
			await executeCommand(
				`
			rsync -avr --no-p --no-times --delete -m --exclude-from='.sandbox-ignore' wpcom-sandbox:${ sandboxPublicThemesFolder }/${ theme }/ ./${ theme }/ 
		`,
				true
			);
		} catch ( err ) {
			console.log( 'Error pulling:', err );
		}
	}
}

async function pullCoreThemes() {
	console.log( 'Pulling CORE themes from sandbox.' );
	for ( let theme of coreThemes ) {
		await executeCommand(
			`
			rsync -avr --no-p --no-times --delete -m --exclude-from='.sandbox-ignore' wpcom-sandbox:${ sandboxPublicThemesFolder }/${ theme }/ ./${ theme }/ 
		`,
			true
		);
	}
}

async function pushCoreThemes() {
	console.log( 'Pushing CORE themes to sandbox.' );
	for ( let theme of coreThemes ) {
		await executeCommand(
			`
			rsync -avr --no-p --no-times --delete -m --exclude-from='.sandbox-ignore' ./${ theme }/ wpcom-sandbox:${ sandboxPublicThemesFolder }/${ theme }/ 
		`,
			true
		);
	}
}

async function syncCoreTheme( theme, sinceRevision ) {
	if ( ! theme ) {
		console.log( 'Must supply theme to sync and revision to start from' );
		return;
	}
	if ( ! sinceRevision ) {
		sinceRevision = await executeCommand(
			`cat ./${ theme }/.pub-svn-revision`
		);
	}
	let latestRevision = await executeCommand(
		`svn info -r HEAD https://develop.svn.wordpress.org/trunk | grep Revision | egrep -o "[0-9]+"`
	);
	console.log(
		`syncing core theme ${ theme } from ${ sinceRevision } to ${ latestRevision }`
	);
	try {
		await executeCommand(
			`
			svn merge --accept postpone http://develop.svn.wordpress.org/trunk/src/wp-content/themes/${ theme } ./${ theme } -r${ sinceRevision }:HEAD
			echo '${ latestRevision }' > ./${ theme }/.pub-svn-revision
		`,
			true
		);
	} catch ( err ) {
		console.log( 'Error merging:', err );
	}
	return latestRevision;
}

/*
 Build the GitHub commit message.
 This message contains the logs from all of the commits since the given hash.
 Used by create*GithubPR
*/
async function buildGithubCommitMessageSince( hash ) {
	let projectVersion = await executeCommand(
		`node -p "require('./package.json').version"`
	);
	let logs = await getCommitLogs( hash );
	return `Deploy Themes ${ projectVersion } to wpcom

Summary:
${ logs }

Test Plan: Execute Smoke Test
`;
}

/*
 Create a GitHub pull request with the given message based on the contents currently in the sandbox.
 Open the GitHub pull request in your browser.
 Provide the URL of the GitHub pull request.
*/
async function createGithubPR( commitMessage ) {
	console.log( 'Creating GitHub Pull Request' );

	let result = await executeOnSandbox(
		`
		cd ${ sandboxPublicThemesFolder };
		git branch -D deploy
		git checkout -b deploy
		git add --all
		git commit -m "${ commitMessage }"
		git push origin deploy
		gh pr create --fill --head deploy
	`,
		true
	);

	let githubUrl = getGithubUrlFromResponse( result );

	console.log( 'PR Created at: ', githubUrl );

	if ( githubUrl ) {
		open( githubUrl );
	}

	return githubUrl;
}

/*
 Utility to pull the GitHub URL from the PR creation command.
 Used by createGithubPR
*/
function getGithubUrlFromResponse( response ) {
	return response
		?.split( '\n' )
		?.filter( ( item ) => item.includes( 'http' ) ) // filter out lines that include 'http'
		?.pop(); // get the last URL
}

/*
 Create a git tag at the current hash.
 In the description include the commit logs since the given hash.
 Include the (cleansed) GitHub PR link.
*/
async function tagDeployment( options = {} ) {
	console.log( 'tagging deployment' );

	let hash = options.hash || ( await getLastDeployedHash() );

	let workInTheOpenGithubUrl = '';
	if ( options.prId ) {
		workInTheOpenGithubUrl = `GitHub: ${ options.prId }`;
	}
	let projectVersion = await executeCommand(
		`node -p "require('./package.json').version"`
	);
	let logs = await getCommitLogs( hash );
	let tag = `v${ projectVersion }`;
	let message = `Deploy Themes ${ tag } to wpcom. \n\n${ logs } \n\n${ workInTheOpenGithubUrl }`;

	await executeCommand(
		`
		git tag -a ${ tag } -m "${ message }"
		git push origin ${ tag }
	`,
		true
	);
}

async function createGlotPressProject( changedThemes ) {
	for ( const themeSlug of changedThemes ) {
		let styleCss = fs.readFileSync( `${ themeSlug }/style.css`, 'utf8' );
		let themeVersion = getThemeMetadata( styleCss, 'Version' );

		// Check if theme version is correctly formatted. Temporarily coerce the value to a parseable semver version if it's not.
		if ( ! semver.valid( themeVersion ) ) {
			console.log(
				`\n[WARN] Invalid version in style.css for ${ themeSlug }: ${ themeVersion }\n`
			);
			themeVersion = semver.coerce( themeVersion );
		}

		if ( semver.gte( themeVersion, '1.0.0' ) ) {
			console.log( `\nCreating GlotPress project for ${ themeSlug }\n` );

			await executeOnSandbox(
				`
				cd ${ sandboxPublicThemesFolder };
				php ${ glotPressScript } ${ sandboxPublicThemesFolder }/${ themeSlug };
			`,
				true
			);
		} else {
			console.log(
				`\nSkipped GlotPress project creation for ${ themeSlug }.\nVersion bump to a major release to create GlotPress project.\n`
			);
		}
	}
}

/*
 Execute a command on the sandbox.
 Expects the following to be configured in your ~/.ssh/config file:

Host wpcom-sandbox
	User wpdev
	HostName SANDBOXURL.wordpress.com
	ForwardAgent yes
*/
function executeOnSandbox( command, logResponse, enablePsudoterminal ) {
	if ( enablePsudoterminal ) {
		return executeCommand(
			`ssh -tt -A ${ remoteSSH } << EOF
${ command }
EOF`,
			logResponse
		);
	}

	return executeCommand(
		`ssh -TA ${ remoteSSH } << EOF
${ command }
EOF`,
		logResponse
	);
}

/*
 Execute a command locally.
*/
export async function executeCommand( command, logResponse ) {
	const timeout = 2 * 60 * 1000; // 2 min

	return new Promise( ( resolove, reject ) => {
		let child;
		let response = '';
		let errResponse = '';

		if ( isWin ) {
			child = spawn( 'cmd.exe', [ '/s', '/c', '"' + command + '"' ], {
				windowsVerbatimArguments: true,
				stdio: [ process.stdin, 'pipe', 'pipe' ],
				detached: true,
			} );
		} else {
			/*
			 * Determines the shell to execute the command.
			 * - Prioritizes using the user's default shell unless it's fish, a known problematic shell.
			 * - In this case, falls back to `/bin/bash` for better syntax compatibility.
			 */
			let shellPath = process.env.SHELL || '/bin/bash';
			if (
				shellPath.includes( 'fish' ) &&
				fs.existsSync( '/bin/bash' )
			) {
				shellPath = '/bin/bash';
			}

			child = spawn( shellPath, [ '-c', command ], {
				stdio: [ process.stdin, 'pipe', 'pipe' ],
				detached: true,
			} );
		}

		var timer = setTimeout( () => {
			try {
				process.kill( -child.pid, 'SIGKILL' );
			} catch ( e ) {
				console.log( 'Cannot kill process' );
			}
		}, timeout );

		child.stdout.on( 'data', ( data ) => {
			response += data;
			if ( logResponse ) {
				console.log( data.toString() );
			}
		} );

		child.stderr.on( 'data', ( data ) => {
			errResponse += data;
			if ( logResponse ) {
				console.log( data.toString() );
			}
		} );

		child.on( 'exit', ( code ) => {
			clearTimeout( timer );
			if ( code !== 0 ) {
				reject( errResponse.trim() );
			}
			resolove( response.trim() );
		} );
	} );
}

async function escapePatterns( themeSlug ) {
	let patternFiles;

	if ( themeSlug ) {
		// If a theme slug is provided, use fast-glob to find all PHP files in the specified theme's directory
		patternFiles = await glob( `${ themeSlug }/patterns/**/*.php`, {
			ignore: [ 'node_modules/**', 'vendor/**' ], // Exclude node_modules and vendor directories
		} );
	} else {
		// If no theme slug is provided, detect changed files via Git
		const stagedFiles = await executeCommand(
			'git diff --name-only --cached'
		);
		const unstagedFiles = await executeCommand( 'git diff --name-only' );

		// Combine staged and unstaged files, remove duplicates, and filter for pattern files
		patternFiles = [
			...new Set( [
				...stagedFiles.split( '\n' ),
				...unstagedFiles.split( '\n' ),
			] ),
		].filter( ( file ) => file.match( /.*\/patterns\/.*.php/g ) );
	}

	// Arrange patterns by theme
	const themePatterns = patternFiles.reduce( ( acc, file ) => {
		const themeSlug = file.split( '/' ).shift();
		return {
			...acc,
			[ themeSlug ]: ( acc[ themeSlug ] || [] ).concat( file ),
		};
	}, {} );

	// Process each theme's patterns
	for ( const [ themeSlug, patterns ] of Object.entries( themePatterns ) ) {
		console.log( getPatternTable( themeSlug, patterns ) );

		const prompt = await inquirer.prompt( [
			{
				type: 'input',
				message: 'Verify the theme slug',
				name: 'themeSlug',
				default: themeSlug,
			},
		] );

		if ( ! prompt.themeSlug ) {
			return;
		}

		for ( const file of patterns ) {
			const rewriter = getReWriter( prompt.themeSlug );
			const tmpFile = `${ file }-tmp`;
			const readStream = fs.createReadStream( file, {
				encoding: 'UTF-8',
			} );
			const writeStream = fs.createWriteStream( tmpFile, {
				encoding: 'UTF-8',
			} );
			writeStream.on( 'finish', () => {
				fs.renameSync( tmpFile, file );
			} );

			readStream.pipe( rewriter ).pipe( writeStream );
		}
	}

	// Helper functions
	function getReWriter( themeSlug ) {
		const rewriter = new RewritingStream();

		rewriter.on( 'text', ( _, raw ) => {
			rewriter.emitRaw( escapeText( raw, themeSlug ) );
		} );

		rewriter.on( 'startTag', ( startTag, rawHtml ) => {
			if ( startTag.tagName === 'img' ) {
				const attrs = startTag.attrs.filter( ( attr ) =>
					[ 'src', 'alt' ].includes( attr.name )
				);
				attrs.forEach( ( attr ) => {
					if ( attr.name === 'src' ) {
						attr.value = escapeImagePath( attr.value );
					} else if ( attr.name === 'alt' ) {
						attr.value = escapeText( attr.value, themeSlug, true );
					}
				} );
			}

			rewriter.emitStartTag( startTag );
		} );

		rewriter.on( 'comment', ( comment, rawHtml ) => {
			if ( comment.text.startsWith( '?php' ) ) {
				rewriter.emitRaw( rawHtml );
				return;
			}
			// escape the strings in block config (blocks that are represented as comments)
			// ex: <!-- wp:search {label: "Search"} /-->
			const block = escapeBlockAttrs( comment.text, themeSlug );
			rewriter.emitComment( { ...comment, text: block } );
		} );

		return rewriter;
	}

	function escapeBlockAttrs( block, themeSlug ) {
		// Set isAttr to true if it is an attribute in the result HTML
		// If set to true, it generates esc_attr_, otherwise it generates esc_html_
		const allowedAttrs = [
			{ name: 'label' },
			{ name: 'placeholder', isAttr: true },
			{ name: 'buttonText' },
			{ name: 'content' },
		];
		const start = block.indexOf( '{' );
		const end = block.lastIndexOf( '}' );

		const configPrefix = block.slice( 0, start );
		const config = block.slice( start, end + 1 );
		const configSuffix = block.slice( end + 1 );

		try {
			const configJson = JSON.parse( config );
			allowedAttrs.forEach( ( attr ) => {
				if ( ! configJson[ attr.name ] ) return;
				configJson[ attr.name ] = escapeText(
					configJson[ attr.name ],
					themeSlug,
					attr.isAttr
				);
			} );
			return configPrefix + JSON.stringify( configJson ) + configSuffix;
		} catch ( error ) {
			// do nothing
			return block;
		}
	}

	function escapeText( text, themeSlug, isAttr = false ) {
		const trimmedText = text && text.trim();
		if ( ! themeSlug || ! trimmedText || trimmedText.startsWith( `<?php` ) )
			return text;
		const escFunction = isAttr ? 'esc_attr__' : 'esc_html__';
		const spaceChar = text.startsWith( ' ' ) ? '&nbsp;' : '';
		const resultText = text.replace( "'", "\\'" ).trim();
		return `${ spaceChar }<?php echo ${ escFunction }( '${ resultText }', '${ themeSlug }' ); ?>`;
	}

	function escapeImagePath( src ) {
		if ( ! src || src.trim().startsWith( '<?php' ) ) return src;

		const assetsDir = 'assets';
		const parts = src.split( '/' );
		const resultSrc = parts.slice( parts.indexOf( assetsDir ) ).join( '/' );
		return `<?php echo esc_url( get_template_directory_uri() ); ?>/${ resultSrc }`;
	}

	function getPatternTable( themeSlug, patterns ) {
		const tableConfig = {
			columnDefault: {
				width: 40,
			},
			header: {
				alignment: 'center',
				content: `THEME: ${ themeSlug }\n\n Following patterns may get updated with escaped strings and/or image paths`,
			},
		};

		return table(
			patterns.map( ( p ) => [ p ] ),
			tableConfig
		);
	}
}

/**
 * Validates theme files against their respective JSON schemas.
 *
 * @param {string} themes List of theme directories to validate
 * @param {Object} options Options for the validation
 * @param {string} options.format Output format (table, json, dir)
 * @param {string} options.color Colorize output (auto, always, never)
 * @param {number} options.tableWidth Width of the table output
 */
async function validateThemes( themes, { format, color, tableWidth } ) {
	util.inspect.styles.name = 'whiteBright';
	switch ( color ) {
		case 'always':
			chalk.level = 1;
			break;
		case 'never':
			chalk.level = 0;
			break;
	}
	const isColorized = chalk.level > 0;

	const chalkStr = new Chalk( {
		level: ! format || format === 'table' ? 1 : 0,
	} );

	function readJson( file ) {
		return fs.promises.readFile( file, 'utf-8' ).then( JSON.parse );
	}

	async function loadSchema( uri ) {
		if ( ! uri ) {
			// prettier-ignore
			throw {
				url: uri,
				message: `Missing $schema URI: ${ chalkStr.whiteBright( uri ) }`,
			};
		}

		let schema;
		if ( URL.canParse( uri ) ) {
			const url = new URL( uri );
			switch ( url.protocol ) {
				case 'http:':
				case 'https:':
					{
						const res = await fetch( url );
						if ( ! res.ok ) {
							throw {
								type: res.type,
								url: res.url,
								redirected: res.redirected,
								status: res.status,
								ok: res.ok,
								statusText: res.statusText,
								headers: res.headers,
								message: await res.text(),
							};
						}
						schema = await res.json();
					}
					break;
				case 'file:': {
					schema = readJson(
						path.resolve( dirname, url.href.slice( 7 ) )
					);
					break;
				}
				default:
					// prettier-ignore
					throw {
						url: uri,
						message: `Unsupported ${ chalkStr.whiteBright( '$schema' ) } protocol: ${ chalkStr.whiteBright( url.protocol + '//' ) }`,
					};
			}
		} else {
			schema = await readJson( path.resolve( dirname, uri ) );
		}

		// Handle schemastore $ref for older schemas
		if ( ! schema.$schema && typeof schema.$ref === 'string' ) {
			return loadSchema( schema.$ref );
		}

		return schema;
	}

	const ajvOptions = {
		strict: false,
		allErrors: true,
		loadSchema,
	};
	const ajv = {
		'http://json-schema.org/draft-07/schema#': new Ajv( ajvOptions ),
		'http://json-schema.org/draft-04/schema#': new AjvDraft04( ajvOptions ),
	};

	const progress = startProgress( themes.length );

	let problems = [];
	for ( const themeSlug of themes ) {
		const styleCssPath = `${ themeSlug }/style.css`;
		const themeJsonPath = `${ themeSlug }/theme.json`;

		if ( ! fs.existsSync( themeSlug ) ) {
			problems.push(
				createProblem( {
					type: 'error',
					theme: themeSlug,
					file: chalkStr.gray( 'undefined' ),
					data: { message: `the theme does not exist` },
				} )
			);
			progress.increment();
			continue;
		}

		if ( ! fs.existsSync( styleCssPath ) ) {
			problems.push(
				createProblem( {
					type: 'error',
					file: styleCssPath,
					data: { message: `the theme is missing a style.css file` },
				} )
			);
			progress.increment();
			continue;
		}

		const styleCss = await fs.promises.readFile( styleCssPath, 'utf-8' );
		const themeRequires = getThemeMetadata(
			styleCss,
			'Requires at least',
			true
		);
		const wpVersion = themeRequires
			? `${ themeRequires }.0`.split( '.', 2 ).join( '.' )
			: undefined;
		const hasThemeJsonSupport = wpVersion && semver.valid( `${ wpVersion }.0` ) && semver.gte( `${ wpVersion }.0`, '5.9.0' )
		const hasThemeJson = fs.existsSync( themeJsonPath );

		if ( hasThemeJson && ! hasThemeJsonSupport ) {
			problems.push(
				createProblem( {
					type: 'warning',
					file: styleCssPath,
					// prettier-ignore
					data: {
						actual: chalkStr.yellow( wpVersion ),
						expected: `${ chalkStr.yellow( '5.9' ) } or greater`,
						message: `the ${ chalkStr.green( "'Requires at least'" ) } version does not support theme.json`,
					},
				} )
			);
		}

		const validators = {
			validateVersion( attr, value, validLengths = [ 3 ] ) {
				const problems = [];
				const adjustedValue =
					value && `${ value }.0`.split( '.', 3 ).join( '.' );
				if (
					! value ||
					! validLengths.includes( value.split( '.' ).length ) ||
					! semver.valid( adjustedValue )
				) {
					problems.push( {
						actual: `${ chalkStr.green(
							attr
						) }: ${ chalkStr.yellow( value ) }`,
						expected: `format ${ chalkStr.yellow(
							Array.from( { length: Math.min( validLengths ) } )
								.fill( 'x' )
								.join( '.' )
						) }`,
						message: `${ value } is not a valid version`,
					} );
				}
				return { isValid: ! problems.length, problems };
			},
			validateVersionGte( attr, value, version ) {
				const problems = [];
				const adjustedValue =
					value && `${ value }.0`.split( '.', 3 ).join( '.' );
				const adjustedVersion =
					version && `${ version }.0`.split( '.', 3 ).join( '.' );
				if (
					! value ||
					! version ||
					! semver.valid( adjustedValue ) ||
					! semver.valid( adjustedVersion ) ||
					! semver.gte( adjustedValue, adjustedVersion )
				) {
					problems.push( {
						actual: `${ chalkStr.green(
							attr
						) }: ${ chalkStr.yellow( value ) }`,
						expected: `${ chalkStr.yellow( version ) } or greater`,
						message: `provide a valid version value`,
					} );
				}
				return { isValid: ! problems.length, problems };
			},
			validateUri: ( attr, value ) => {
				const problems = [];
				if ( value && ! URL.canParse( value ) ) {
					problems.push( {
						actual: `${ chalkStr.green(
							attr
						) }: ${ chalkStr.yellow( value ) }`,
						expected: `a valid URI`,
						message: `${ value } is not a valid URI`,
					} );
				}
				return { isValid: ! problems.length, problems };
			},
			validateThemeSlug: ( attr, value ) => {
				const problems = [];
				if ( value && ! /^[a-z0-9-]+$/.test( value ) ) {
					problems.push( {
						actual: `${ chalkStr.green(
							attr
						) }: ${ chalkStr.yellow( value ) }`,
						expected: `a valid value`,
						message: `${ value } is not a valid value`,
					} );
				}
				return { isValid: ! problems.length, problems };
			},
			// a8c validations
			validateA8CThemeUri: ( attr, value ) => {
				const problems = [];
				if (
					value &&
					! /^https:\/\/wordpress\.com\/themes?\/[a-z0-9-]+\/?$/.test(
						value
					)
				) {
					problems.push( {
						actual: `${ chalkStr.green(
							attr
						) }: ${ chalkStr.yellow( value ) }`,
						expected: `https://wordpress.com/theme/${ chalkStr.yellow(
							'{slug}'
						) }/`,
						message: `${ value } is not a valid WordPress.com theme URI`,
					} );
				}
				return { isValid: ! problems.length, problems };
			},
			validateA8CAuthor: ( attr, value ) => {
				const problems = [];
				if ( value && ! /^Automattic$/.test( value ) ) {
					problems.push( {
						actual: `${ chalkStr.green(
							attr
						) }: ${ chalkStr.yellow( value ) }`,
						expected: `Automattic`,
						message: `${ value } is not a valid author`,
					} );
				}
				return { isValid: ! problems.length, problems };
			},
			validateA8CAuthorUri: ( attr, value ) => {
				const problems = [];
				if (
					value &&
					! /^https:\/\/automattic\.com\/?$/.test( value )
				) {
					problems.push( {
						actual: `${ chalkStr.green(
							attr
						) }: ${ chalkStr.yellow( value ) }`,
						expected: `https://automattic.com/`,
						message: `${ value } is not a valid Automattic author URI`,
					} );
				}
				return { isValid: ! problems.length, problems };
			},
		};

		// validate style.css metadata
		// Spec: https://developer.wordpress.org/themes/basics/main-stylesheet-style-css/
		const styleCssMetadata = [
			{ attribute: 'Theme Name', required: true },
			{
				attribute: 'Theme URI',
				validators: [
					{
						validate: validators.validateUri,
						type: 'warning',
					},
					{
						validate: validators.validateA8CThemeUri,
						type: 'warning',
					},
				],
			},
			{
				attribute: 'Author',
				required: true,
				validators: [
					{
						validate: validators.validateA8CAuthor,
						type: 'warning',
					},
				],
			},
			{
				attribute: 'Author URI',
				validators: [
					{
						validate: validators.validateUri,
						type: 'warning',
					},
					{
						validate: validators.validateA8CAuthorUri,
						type: 'warning',
					},
				],
			},
			{ attribute: 'Description', required: true },
			{
				attribute: 'Version',
				required: true,
				validators: [
					{
						validate: ( attr, value ) =>
							validators.validateVersion( attr, value, [ 3 ] ),
						type: 'error',
					},
				],
			},
			{
				attribute: 'Requires at least',
				required: true,
				validators: [
					{
						validate: ( attr, value ) =>
							validators.validateVersion( attr, value, [ 2 ] ),
						type: 'error',
					},
				],
			},
			{
				attribute: 'Tested up to',
				required: true,
				validators: [
					{
						validate: ( attr, value ) =>
							validators.validateVersion( attr, value, [ 2, 3 ] ),
						type: 'error',
					},
					{
						validate: ( attr, value ) =>
							validators.validateVersionGte(
								attr,
								value,
								themeRequires
							),
						type: 'error',
					},
				],
			},
			{
				attribute: 'Requires PHP',
				required: true,
				validators: [
					{
						validate: ( attr, value ) =>
							validators.validateVersion( attr, value, [ 2 ] ),
						type: 'error',
					},
				],
			},
			{ attribute: 'License', required: true },
			{
				attribute: 'License URI',
				required: true,
				validators: [
					{
						validate: validators.validateUri,
						type: 'warning',
					},
				],
			},
			{
				attribute: 'Text Domain',
				required: true,
				validators: [
					{
						validate: validators.validateThemeSlug,
						type: 'error',
					},
				],
			},
		];

		styleCssMetadata.forEach( ( { attribute, required, validators } ) => {
			const attributeValue = getThemeMetadata( styleCss, attribute );
			if ( ! attributeValue ) {
				problems.push(
					createProblem( {
						type: required ? 'error' : 'warning',
						file: styleCssPath,
						data: {
							message: `missing ${ chalkStr.green(
								attribute
							) } header metadata`,
						},
					} )
				);
			} else if ( validators ) {
				validators.forEach( ( { validate, type } ) => {
					const { isValid, problems: validationProblems } = validate(
						attribute,
						attributeValue
					);
					if ( ! isValid ) {
						problems = problems.concat(
							validationProblems.map( ( problem ) =>
								createProblem( {
									type: type,
									file: styleCssPath,
									data: problem,
								} )
							)
						);
					}
				} );
			}
		} );

		const validations = await Promise.all( [
			glob( `${ themeSlug }/styles/*.json` ).then( ( paths ) => ( {
				schemaType: 'theme',
				paths: [ `${ themeSlug }/theme.json`, ...paths ],
			} ) ),
			glob( `${ themeSlug }/assets/fonts/*.json` ).then( ( paths ) => ( {
				schemaType: 'font-collection',
				paths,
			} ) ),
		] );

		for ( const { schemaType, paths } of validations ) {
			for ( const file of paths ) {
				try {
					const data = await readJson( file );
					const schemaUri = hasThemeJsonSupport
						? `https://schemas.wp.org/wp/${ wpVersion }/${ schemaType }.json`
						: data.$schema;

					if ( data.$schema !== schemaUri ) {
						problems.push(
							createProblem( {
								type: 'warning',
								file,
								// prettier-ignore
								data: {
									actual: data.$schema,
									expected: schemaUri,
									message: `the ${ chalkStr.whiteBright( '$schema' ) } version does not match style.css ${ chalkStr.green( "'Requires at least'" ) } version`,
								},
							} )
						);
					}

					const schema = await loadSchema( schemaUri );
					const validate =
						await ajv[ schema.$schema ].compileAsync( schema );
					if ( ! validate( data ) ) {
						problems.push(
							createProblem( {
								type: 'warning',
								file,
								data: validate.errors,
								metadata: { schema: schemaUri },
							} )
						);
					}
				} catch ( error ) {
					problems.push(
						createProblem( { type: 'error', file, data: error } )
					);
				}
			}
		}

		progress.increment();
	}

	if ( problems.length ) {
		let output = '';
		switch ( format ) {
			case 'json':
				output = JSON.stringify( problems );
				break;
			case 'dir':
				output = util.inspect( problems, {
					depth: null,
					maxArrayLength: null,
					colors: isColorized,
				} );
				break;
			case 'table':
			default: {
				output = problemsToTable( problems, { tableWidth } );
			}
		}
		await new Promise( ( resolve, reject ) =>
			process.stdout.write( output, ( error ) =>
				error ? reject( error ) : resolve()
			)
		);
	}

	const hasError = problems.some( ( { type } ) => type === 'error' );
	if ( hasError ) {
		if ( process.stdout.isTTY && process.stderr.isTTY ) {
			console.error( chalk.red( '\n\nValidation failed.' ) );
		}
		process.exit( 1 );
	}

	if ( process.stdout.isTTY ) {
		if ( problems.length ) {
			console.log(
				chalk.yellow( '\n\nValidation passed with warnings.' )
			);
		} else {
			console.log( chalk.green( '\n\nValidation passed.' ) );
		}
	}
}

/**
 * @typedef {Object} Problem
 * @prop {'warning'|'error'} type Type of problem
 * @prop {string} theme Name of the theme
 * @prop {string} file File path, relative to the theme, where the problem exists
 * @prop {Object} metadata Additional metadata to include in logging
 * @prop {Object[]} data Array of validation problems
 */

/**
 * Creates a problem object.
 * @param {Object} options Options for creating a problem
 * @param {'warning'|'error'} options.type Type of problem
 * @param {string?} options.theme Name of the theme
 * @param {string} options.file File path where the problem exists
 * @prop {Object} metadata Additional metadata to include in logging
 * @prop {Object[]} data Array of validation problems
 * @return {Problem} Problem object
 */
function createProblem( options ) {
	const {
		type,
		metadata,
		data: problemData,
		theme: themeOverride,
		file: themeFile,
	} = options;
	const separatorIndex = themeFile.indexOf( '/' );
	const theme = themeOverride
		? themeOverride.charAt( 0 ).toUpperCase() + themeOverride.slice( 1 )
		: themeFile.charAt( 0 ).toUpperCase() +
		  themeFile.slice( 1, separatorIndex );
	const file = themeFile.slice( separatorIndex + 1 );
	const data = Array.isArray( problemData ) ? problemData : [ problemData ];
	return { type, theme, file, metadata, data };
}

/**
 * Similar to Object.entries, but includes non-enumerable properties and
 * traverses the prototype chain.
 *
 * @param {Object} obj Any object
 * @return {Array<[string, any]>} An array of key-value pairs
 */
function objectOwnPropertiesEntries( obj ) {
	const visited = new Set();
	const propertyNames = new Set();

	let currentObj = obj;
	while ( currentObj !== null ) {
		if ( visited.has( currentObj ) ) {
			break;
		}
		visited.add( currentObj );

		for ( const name of Object.getOwnPropertyNames( currentObj ) ) {
			propertyNames.add( name );
		}

		currentObj = Object.getPrototypeOf( currentObj );
	}

	return [ ...propertyNames ].map( ( key ) => [ key, obj[ key ] ] );
}

/**
 * Converts an object into a borderless table format.
 *
 * Example:
 *   objectToTable( {
 *     keyOne: 'value1',
 *     keyTwo: 'value2',
 *     keyThree: 3,
 *     fn: () => {},
 *     obj: {},
 *   } )
 *   // Returns:
 *   // 'key one   : value1\n' +
 *   // 'key two   : value2\n' +
 *   // 'key three : 3'
 *
 * @param {Object} obj Object to convert into a table
 * @param {Object} [extraOptions] Extra options for the table
 *
 * @return {string} Table string
 */
function objectToTable( obj = {}, extraOptions ) {
	const data = objectOwnPropertiesEntries( obj )
		.filter(
			( [ key, value ] ) =>
				typeof value !== 'function' && ! key.startsWith( '_' )
		)
		.map( ( [ key, value ] ) => [
			key
				.split( /(?=[A-Z0-9])/g )
				.map( ( part, i ) =>
					i === 0
						? part.charAt( 0 ).toUpperCase() + part.slice( 1 )
						: part.charAt( 0 ).toLowerCase() + part.slice( 1 )
				)
				.join( ' ' ),
			typeof value === 'object'
				? util.inspect( value, { colors: chalk.level > 0 } )
				: value,
		] );

	const options = {
		columns: [ { paddingLeft: 0 }, { paddingRight: 0 } ],
		border: getBorderCharacters( 'void' ), // No border, modified below.
		drawHorizontalLine: () => false,
	};
	options.border.bodyJoin = ':';

	// Hack for alignment with other tables.
	if ( extraOptions?.columns?.[ 0 ]?.minWidth ) {
		options.columns[ 0 ].width = Math.max(
			extraOptions.columns[ 0 ].minWidth,
			...data.map( ( [ key ] ) => key.length )
		);
	}

	return table( data, options ).slice( 0, -1 ); // Remove trailing newline.
}

/**
 * Generates a table in the following format.
 *
 * ╔═══════════════════════════════════════════════════╤═══════════════════════╗
 * ║ WARNING                                           │ Warning key 0 : value ║
 * ║ Theme : Example                                   │ Warning key 1 : value ║
 * ║ File  : style.css                                 │                       ║
 * ╟───────────────────────────────────────────────────┼───────────────────────╢
 * ║ ERROR                                             │ Error 0 key 0 : value ║
 * ║ Theme  : Example                                  │ Error 0 key 1 : value ║
 * ║ File   : theme.json                               │ Error 0 key 2 : value ║
 * ║ Schema : https://schemas.wp.org/wp/X.Y/theme.json ├───────────────────────╢
 * ║                                                   │ Error 1 key 0 : value ║
 * ║                                                   │ Error 1 key 1 : value ║
 * ║                                                   │ Error 1 key 2 : value ║
 * ╚═══════════════════════════════════════════════════╧═══════════════════════╝
 *
 * It has a very basic dynamic column width calculation where the first column
 * expands to the content and the second column uses the remaining width of the
 * terminal. Each column has a minimum width of 20 characters.
 *
 * @param {Problem[]} problems List of problems to format
 *
 * @return {string} Table string
 */
function problemsToTable( problems, options ) {
	const tableWidth = options.tableWidth || process.stdout.columns || 120;
	const paddingAndBorderWidth = '║  │  ║'.length;
	const columnMinWidth = 20;

	const userConfig = {
		columns: [
			{ width: columnMinWidth },
			{ width: tableWidth - columnMinWidth - paddingAndBorderWidth },
		],
		spanningCells: [],
	};
	const tableData = [];

	for ( const { type, theme, file, data, metadata } of problems ) {
		const metadataTable = metadata ? objectToTable( metadata ) : '';
		const titleTable = objectToTable(
			{ theme, file },
			{ columns: [ { minWidth: metadataTable.indexOf( ':' ) - 1 } ] }
		);

		const rows = data.map( ( m ) => [ '', objectToTable( m ) ] );
		rows[ 0 ][ 0 ] = [
			chalk[ type === 'warning' ? 'yellow' : 'red' ].bold(
				type.toUpperCase()
			),
			chalk.whiteBright( titleTable ),
			metadataTable,
		]
			.filter( Boolean )
			.join( '\n' );

		tableData.push( ...rows );

		userConfig.spanningCells.push( {
			row: tableData.length - rows.length,
			col: 0,
			rowSpan: rows.length,
		} );

		userConfig.columns[ 0 ].width = Math.max(
			userConfig.columns[ 0 ].width,
			...rows[ 0 ][ 0 ].split( '\n' ).map( ( s ) => s.length )
		);
		userConfig.columns[ 1 ].width = Math.max(
			columnMinWidth,
			tableWidth - userConfig.columns[ 0 ].width - paddingAndBorderWidth
		);
	}

	return table( tableData, userConfig ).slice( 0, -1 ); // Remove trailing newline.
}

function startProgress( length ) {
	if ( ! process.stdout.isTTY ) {
		return { increment() {} };
	}

	let current = 0;
	function render() {
		const [ progress, percentage ] = progressbar.filledBar(
			length,
			current
		);
		console.log(
			'\nProgress:',
			[ progress, Math.round( percentage * 100 ) / 100 ],
			`${ current }/${ length }\n`
		);
	}

	render();
	return {
		increment() {
			current++;
			process.stdout.moveCursor?.( 0, -3 );
			render();
		},
	};
}
