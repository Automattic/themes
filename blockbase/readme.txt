=== Blockbase ===
Contributors: Automattic
Requires at least: 5.7
Tested up to: 5.7.2
Requires PHP: 5.6.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A starting point for building your block-based site.

== Description ==

Blockbase is a simple theme that supports full-site editing. It comes with a set of minimal templates and design settings that can be manipulated through Global Styles. Use it to build something beautiful.

== About Blockbase ==

The purpose of Blockbase is to provide a "ponyfill" that allows for 100% "configuration expression" of design.  Any aspect of configurable design that Gutenberg does not yet take into account is expressed in theme.json 'custom' properties.

To use this theme assign it as the parent theme and then copy from this them to the child theme the theme.json file and fill out the details.

The goal is for the ponyfill styling to reflect what Gutenberg will style, from a given configuration, once that work is complete.  But to offer that today, using simpler techniques that Gutenberg will use upon completion.

== Building a Block Child Theme ==

To build a Blockbase child theme follow these instructions:

- Add a [package.json](https://github.com/Automattic/themes/blob/trunk/seedlet-blocks/package.json), [style.css](https://github.com/Automattic/themes/blob/trunk/seedlet-blocks/style.css) and empty index.php files to your theme.
- Your child theme's theme.json file will be built by combining Blockbase's original theme.json file and your child's `child-theme.json`. That is the file where your configuration values live (you only want the values for variables that are different from the parent there). To generate the combined file, run `npm run build` from inside your theme's folder or run `npm run build:child child-theme-slug` from inside Blockbase's folder.
- Extend the parent's templates that you want to customize or add new ones where needed following the [template hierarchy](https://themeshaper.com/2020/12/18/getting-started-with-block-themes-templates/).
- Using `npm run start` will both watch changes inside the `sass` and `assets` folder and changes to the `child-theme.json` file.

== Building a Universal Child Theme ==

A Universal theme is a theme that works in Full Site Editing and in the Customizer. This is a concept that's still being explored so we don't have instructions to provide yet. If you are curious, you can visit [the project](https://github.com/Automattic/themes/tree/trunk/quadrat) where we are developing Quadrat as a Universal Theme.

== Changelog ==

= 1.2.0 =
* Remove site editor toggle 
* PHP 404 template
* Revise font customization approach
* Bug fixes and child-theme compability improvements 

= 1.1.0 =
* Added color customization from the customizer

= 1.0.1 =
* Add skiplinks to post content
* Remove unneeded functions to pass theme check

= 1.0 =
* Initial release 

== Copyright ==

Blockbase WordPress Theme, (C) 2021 Automattic, Inc.
Blockbase is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

Blockbase uses the following third-party resources:

The Water Fan, by Winslow Homer
License: CC0
Source: https://www.artic.edu/artworks/38666/the-water-fan
Included in theme screenshot.
