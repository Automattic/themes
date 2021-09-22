# About Blockbase
The purpose of Blockbase is to provide a "ponyfill" that allows for 100% "configuration expression" of design.  Any aspect of configurable design that Gutenberg does not yet take into account is expressed in theme.json 'custom' properties.

To use this theme assign it as the parent theme and then copy from this them to the child theme the theme.json file and fill out the details.

The goal is for the ponyfill styling to reflect what Gutenberg will style, from a given configuration, once that work is complete.  But to offer that today, using simpler techniques that Gutenberg will use upon completion.

## Bulding a Blockbase theme the easy way

To build a Blockbase child theme follow these instructions:

- Ensure node/npm are installed on your system.
- From the /blockbase folder run the command `npm run create:child CHILDSLUG`
- A directory with the necessary files will be created to match CHILDSLUG.  This folder will be a sibling of /blockbase.
- From the /CHILDSLUG folder (whatever you decided it would be) run the command `npm run build` any time you make changes to the child-theme.json or any of the files in the /sass folder.
- Your child theme's theme.json file will be built by combining Blockbase's original theme.json file and your child's `child-theme.json`. That is the file where your configuration values live (you only want the values for variables that are different from the parent there).
- Use the command `npm run start` to enter watch mode to rebuild the assets any time you change child-theme.json or any of the files in /scss.
- Extend the parent's templates that you want to customize or add new ones where needed following the [template hierarchy](https://themeshaper.com/2020/12/18/getting-started-with-block-themes-templates/).

## Bulding a Blockbase theme manually

Blockbase is a [parent theme](https://developer.wordpress.org/themes/advanced-topics/child-themes/#what-is-a-parent-theme). The best way to use it is to create a child theme with Blockbase as a parent.

To begin with you will need a copy of Blockbase, which you can get by cloning this repo.

Next you need to create a child theme. A Blockbase child theme needs to contain the following files:
- `style.css`
- `theme.json`
- Block templates and block template parts

These files should be in a new directory at the same level as Blockbase, using the child theme's name.

The `style.css` file contains the name of the theme and other details. To make Blockbase the parent theme it is important to set the "Template" property to `blockbase`.

```
/*
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
*/
```

Block Templates and Block template parts are used to display the content on your site. You can simply copy these directories from the Blockbase theme to get started. You can modify them in the Template Editor and then use the code view to copy the updated template back into your theme.

The theme.json file defines the look and feel of your theme; colors, fonts, spacing, etc are all set in this file. Blockbase also defines many custom properties in theme.json which are used to plug the gaps in block themes. To get started you can copy the Blockbase theme.json file to your child theme, although it is preferable to use a child-theme.json file (more on this later).

These files are optional, but can also be useful:
- `functions.php`
- `child-theme.json`
- `theme.scss`
- `package.json`
- `child-theme.json`

Blockbase child themes can be built without using any build tools, but using a build tool enables you to take full advantage of the theme. Blockbase uses node as a build tool, so first you'll need to create a package.json file:

```
{
  "name": "CHILD_THEME_NAME",
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
    "build:theme": "node ../blockbase/build.js CHILD_THEME_NAME",
    "build:scss": "node-sass --importer node_modules/node-sass-package-importer/dist/cli.js sass/theme.scss assets/theme.css --output-style expanded --indent-type tab --indent-width 1 --source-map true"
  },
  "author": "",
  "license": "GPLv2"
}
```

You should replace CHILD_THEME_NAME with the name of your theme. This package.json contains two helpful commands:

`npm run build:theme` and `npm run build:css`

## `npm run build:theme`
To use this command you will need to create a file called `child-theme.json`:
```
{
	"settings": {
		"custom": {}
	},
	"styles": {
		"blocks": {}
	}
}
```

Like `theme.json` this file also defines the styles for the theme. The build tool takes the child-theme.json file and merges it with the Blockbase theme.json file. This has several advantages:

- It is only necessary to define those properties you wish to change, which keeps your code DRY
- As more features are added to block themes, Blockbase will be updated to support them. By using the Blockbase theme.json build tool, the child theme will be able to migrate these properties to the child's theme.json file, making more FSE tools available to users.

## `npm run build:scss`
Simple themes will be able to define everything they need using only a theme.json file, but for more complex themes, an additional CSS file can be useful. This build command compiles the theme.scss file to a theme.css file. This is a good place to put additional CSS for your theme.

## `functions.php`
To add the theme.css file to your theme you will need to add a functions.php file with the following lines:
```
<?php
/**
 * Add Editor Styles
 */
function newtheme_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			'/assets/theme.css',
		)
	);
}
add_action( 'after_setup_theme', 'newtheme_editor_styles' );
/**
 *
 * Enqueue scripts and styles.
 */
function newtheme_scripts() {
	wp_enqueue_style( 'newtheme-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array('blockbase-ponyfill'), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'newtheme_scripts' );
```

Together these files should give you a strong foundation for a Blockbase child theme.

## Keeping up to date
Blockbase child themes are in a strong position to keep in step with Full Site Editing changes, while being usable in production now. However they do come with a maintenance burden. As Full Site Editing matures, Blockbase will continue to change with it; Blockbase child themes will need to be kept up to date with these developments so that they can take advantage of the new features. Mostly this is just a case of running the build tools whenever changes are made to Blockbase, but sometimes it might also be necessary to update the format of the child-theme.json file.
