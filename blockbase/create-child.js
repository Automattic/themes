const child_theme_json = `{
	"$schema": "https://json.schemastore.org/theme-v1.json",
	"version": 1,
	"settings": {
		"custom": {}
	},
	"styles": {
		"blocks": {}
	}
}`;

const child_package_json = `{
  "name": "{newtheme}",
  "version": "0.0.1",
  "description": "",
  "main": "style.css",
  "dependencies": {},
  "devDependencies": {
    "@wordpress/base-styles": "^3.4.0",
    "chokidar-cli": "^2.1.0",
    "node-sass": "^5.0.0",
    "node-sass-package-importer": "^5.3.2"
  },
  "scripts": {
    "start": "chokidar \\"**/*.scss\\" child-theme.json ../blockbase/theme.json -c \\"npm run build\\" --initial",
    "build": "npm run build:theme && npm run build:scss",
    "build:theme": "node ../blockbase/build.js {newtheme}",
    "build:scss": "node-sass --importer node_modules/node-sass-package-importer/dist/cli.js sass/theme.scss assets/theme.css --output-style expanded --indent-type tab --indent-width 1 --source-map true"
  },
  "author": "",
  "license": "GPLv2"
}`;

const style_css = `/*
Theme Name: {newtheme}
Theme URI:
Author:
Author URI:
Description:
Requires at least: 5.7
Tested up to: 5.7
Requires PHP: 5.7
Version: 0.0.1
License: GNU General Public License v2 or later
License URI:
Template: blockbase
Text Domain: {newtheme}
Tags:

*/`;

const theme_scss = `
// Custom CSS should be added here.  It will be compiled to /assets/theme.css.
`;

const functions_php = `<?php

/**
 * Add Editor Styles
 */
function {newtheme}_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			'/assets/theme.css',
		)
	);
}
add_action( 'after_setup_theme', '{newtheme}_editor_styles' );

/**
 *
 * Enqueue scripts and styles.
 */
function {newtheme}_scripts() {
	wp_enqueue_style( '{newtheme}-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array( 'blockbase-ponyfill' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', '{newtheme}_scripts' );

`;

const block_templates_index_html = `
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:paragraph -->
<p>Populate this /block-templates/INDEX.html template (and other templates) with your block markup.</p>
<!-- /wp:paragraph -->
`;

const block_template_parts_header = `
<!-- wp:paragraph -->
<p>Populate this /block-template-parts/header.html template part (and other template parts) with your block markup.</p>
<!-- /wp:paragraph -->
`;

const success_message = `
  Success creating new theme {newtheme}!
`;

const fs = require( 'fs' );
const execSync = require( 'child_process' ).execSync;
const childThemeName = process.argv[ 2 ];

if ( ! childThemeName ) {
	console.log( 'Please provide the slug of the child theme to create.' );
} else {
	createChild( childThemeName );
}

function createChild( name ) {
	//TODO: Santatize theme name/slug
	try {
		fs.mkdirSync( `../${ name }` );
		fs.mkdirSync( `../${ name }/sass` );
		fs.mkdirSync( `../${ name }/block-templates` );
		fs.mkdirSync( `../${ name }/block-template-parts` );
		fs.writeFileSync(
			`../${ name }/child-theme.json`,
			child_theme_json.replace( /{newtheme}/g, name )
		);
		fs.writeFileSync(
			`../${ name }/package.json`,
			child_package_json.replace( /{newtheme}/g, name )
		);
		fs.writeFileSync(
			`../${ name }/style.css`,
			style_css.replace( /{newtheme}/g, name )
		);
		fs.writeFileSync(
			`../${ name }/functions.php`,
			functions_php.replace( /{newtheme}/g, name )
		);
		fs.writeFileSync(
			`../${ name }/sass/theme.scss`,
			theme_scss.replace( /{newtheme}/g, name )
		);
		fs.writeFileSync(
			`../${ name }/block-templates/index.html`,
			block_templates_index_html.replace( /{newtheme}/g, name )
		);
		fs.writeFileSync(
			`../${ name }/block-template-parts/header.html`,
			block_template_parts_header.replace( /{newtheme}/g, name )
		);
		execSync( `cd ../${ name }/ && npm install && npm run build`, {
			stdio: 'inherit',
		} );
		console.log( success_message.replace( /{newtheme}/g, name ) );
	} catch ( err ) {
		console.log( 'child theme creation failed: ' + err );
	}
}
