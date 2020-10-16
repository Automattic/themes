/**
 * External dependencies
 */
const execSync = require( 'child_process' ).execSync;
const spawnSync = require( 'child_process' ).spawnSync;
const existsSync = require( 'fs' ).existsSync;
const chalk = require( 'chalk' );
const path = require( 'path' );
const _ = require( 'lodash' );

/*
 * A lot of this code has been liberally borrowed from the wp-calypso pre-commit script
 * https://github.com/Automattic/wp-calypso/blob/master/bin/pre-commit-hook.js
 */

const phpcsChangedPath = getPathForCommand( 'phpcs-changed' );
const phpcsPath = getPathForCommand( 'phpcs' );
const phpcbfPath = getPathForCommand( 'phpcbf' );

function quotedPath( pathToQuote ) {
	if ( pathToQuote.includes( ' ' ) ) {
		return `"${ pathToQuote }"`;
	}
	return pathToQuote;
}

/**
 * Parses the output of a git diff command into file paths.
 *
 * @param   {string} command Command to run. Expects output like `git diff --name-only […]`
 * @returns {Array}          Paths output from git command
 */
function parseGitDiffToPathArray( command ) {
	return execSync( command, { encoding: 'utf8' } )
		.split( '\n' )
		.map( ( name ) => name.trim() )
		.filter( ( name ) => /(?:\.json|\.[jt]sx?|\.scss|\.php)$/.test( name ) );
}

function getPathForCommand( command ) {
	const composerBinDir = path.join( __dirname, 'vendor', 'bin' );
	let path_to_command;
	try {
		path_to_command = execSync( 'command -v ' + command, { encoding: 'utf8' } );
	} catch ( e ) {
		path_to_command = path.join( composerBinDir, command );
	}
	if ( typeof path_to_command === 'undefined' || ! path_to_command ) {
		return false;
	}
	return _.trim( path_to_command );
}

function printPhpcsDocs() {
	console.log(
		chalk.red( 'COMMIT ABORTED:' ),
		'Working with PHP files in this repository requires the PHP Code Sniffer and its dependencies to be installed. Make sure you have composer installed on your machine and from the root of this repository, run `composer install`.'
	);
	process.exit( 1 );
}

function phpcsInstalled() {
	if ( existsSync( phpcsPath ) && existsSync( phpcsChangedPath ) ) {
		return true;
	}
	return false;
}

function phpcbfInstalled() {
	if ( existsSync( phpcbfPath ) ) {
		return true;
	}
	return false;
}

function linterFailure() {
	console.log(
		chalk.red( 'COMMIT ABORTED:' ),
		'The linter reported some problems. ' +
		'If you are aware of them and it is OK, ' +
		'repeat the commit command with --no-verify to avoid this check.'
	);
	process.exit( 1 );
}

// determine if PHPCS is available
const phpcs = phpcsInstalled();

// determine if PHPCBF is available
const phpcbf = phpcbfInstalled();

// grab a list of all the files staged to commit
const files = parseGitDiffToPathArray( 'git diff --cached --name-only --diff-filter=ACM' ).filter( ( file ) => file.endsWith( '.php' ) );

if ( files.length ) {
	phpcbfResult = spawnSync( phpcbfPath,
		[ ...files ],
		{
			shell: true,
			stdio: 'inherit',
		}
	);

	if ( phpcbfResult && phpcbfResult.status ) {
		execSync( `git add ${ files.join( ' ' ) }` );
		console.log( chalk.yellow( 'PHPCS issues detected and automatically fixed via PHPCBF.' ) );
	}

	if ( phpcs ) {
		const lintResult = spawnSync(
			`PHPCS=${ quotedPath( phpcsPath ) } ${ quotedPath( phpcsChangedPath ) }`,
			[ '--git', ...files ],
			{
				shell: true,
				stdio: 'inherit',
			}
		);

		if ( lintResult.status ) {
			linterFailure();
		}
	}
}

// grab a list of all the files staged to commit
const toStylelintFix = parseGitDiffToPathArray( 'git diff --cached --name-only --diff-filter=ACM' ).filter( ( file ) => file.endsWith( '.scss' ) );
toStylelintFix.forEach( ( file ) => console.log( `stylelint formatting staged file: ${ file }` ) );
if ( toStylelintFix.length ) {
	console.log(`./node_modules/.bin/stylelint --fix ${ toStylelintFix.join( ' ' ) }`);
	spawnSync( `./node_modules/.bin/stylelint --fix ${ toStylelintFix.join( ' ' ) }` );
	execSync( `git add ${ toStylelintFix.join( ' ' ) }` );
}

if ( toStylelintFix.length ) {
	const lintResult = spawnSync( './node_modules/.bin/stylelint', [ ...toStylelintFix ], {
		shell: true,
		stdio: 'inherit',
	} );

	if ( lintResult.status ) {
		linterFailure();
	}
}
