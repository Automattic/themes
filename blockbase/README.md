# About Blockbase
The purpose of Blockbase is to provide a "ponyfill" that allows for 100% "configuration expression" of design.  Any aspect of configurable design that Gutenberg does not yet take into account is expressed in theme.json 'custom' properties.

The goal is for the ponyfill styling to reflect what Gutenberg will style, from a given configuration, once that work is complete.

## Building
Blockbase uses SCSS to compile the CSS used to ponyfill Gutenberg.  Building Blockbase isn't necessary to use it - either as a theme or as a parent theme - but making changes does require the .scss file to be recompiled.
The easist way to do so is to use `node` to install and run the necessary dependencies via `npm install`. 
Then after making changes to the *.scss files run `npm run build` to compile.
You can use `npm start` and it will be in 'watch mode' recompiling the .scss files any time any changes are made.
## Bulding a Blockbase child theme the easy way

Use the [Create Blockbase Theme](https://github.com/Automattic/create-blockbase-theme) utility.

Install Blockbase (or any Blockbase child)
Use the Customizer and/or Full Site Editor to tweak the design to your liking.
Install the Create Blockbase Theme utility 
Use it to export a new child theme of Blockbase.

## Bulding a Blockbase child theme manually

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
Tested up to: 5.8
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

The `theme.json` file defines the look and feel of your theme; colors, fonts, spacing, etc are all set in this file. Blockbase also defines many custom properties in theme.json which are used to plug the gaps in block themes. Override any values (including the custom values) found in Blockbase's theme.json in the child theme's theme.json.

- It is only necessary to define those properties you wish to change, which keeps your code DRY
- As more features are added to block themes, Blockbase will be updated to support them. By using the Blockbase as a parent, the child theme will inherit all these changes.

Simple themes will be able to define everything they need using only a theme.json file, but for more complex themes, an additional CSS file can be useful. Blockbase uses node to compile SCSS files.  You may want your child theme to take advantage of the same utilities, but child themes do not need to be built with using any build tools.

## `functions.php`
You will also likely want to add a `functions.php` file.  To use that to load the theme.css file you will need to add the following lines:
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
Blockbase child themes are in a strong position to keep in step with Full Site Editing changes, while being usable in production now. However they do come with a maintenance burden. As Full Site Editing matures, Blockbase will continue to change with it; Blockbase child themes will need to be kept up to date with these developments so that they can take advantage of the new features.
