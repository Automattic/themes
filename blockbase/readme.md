# === Blockbase ===
Contributors: Automattic
Requires at least: 5.7
Tested up to: 5.7.2
Requires PHP: 5.6.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

An unopinionated theme to fill the gaps between where Gutenberg IS and where Gutenberg is GOING.

## == Description ==

The purpose of Blockbase is to provide a "ponyfill" that allows for 100% "configuration expression" of design.  Any aspect of configurable design that Gutenberg does not yet take into account is expressed in theme.json 'custom' properties.

To use this theme assign it as the parent theme and then copy from this them to the child theme the theme.json file and fill out the details.

The goal is for the ponyfill styling to reflect what Gutenberg will style, from a given configuration, once that work is complete.  But to offer that today, using simpler techniques that Gutenberg will use upon completion.

## == Building a Block Child Theme ==

To build a Blockbase child theme follow these instructions:

- Add a [package.json](https://github.com/Automattic/themes/blob/make/quadrat/seedlet-blocks/package.json), [style.css](https://github.com/Automattic/themes/blob/make/quadrat/seedlet-blocks/style.css) and empty index.php files to your theme
- Your child theme's theme.json file will be built by combining Blockbase's original theme.json file and your child's `child-experimental-theme.json`. That is the file where your configuration values live (you only want the values for variables that are different from the parent there). To generate the combined file, run `npm run build` from inside your theme's folder or run `npm run build:child child-theme-slug` from inside Blockbase's folder.
- Extend the parent's templates that you want to customize or add new ones where needed following the [template hierarchy](https://themeshaper.com/2020/12/18/getting-started-with-block-themes-templates/).
- Using `npm run start` will both watch changes inside the `sass` and `assets` folder and changes to the `child-experimental-theme.json` file.
- Additionally, your child theme may want to unregister the block patterns and block styles defined by Blockbase.

## == Building a Universal Child Theme ==

A Universal theme is a theme that works in Full Site Editing and in the Customizer. This is a concept that's still being explored so we don't have instructions to provide yet. If you are curious, you can visit [the branch](https://github.com/Automattic/themes/tree/make/quadrat) where we are developing Quadrat as a Universal Theme.
