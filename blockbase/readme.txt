=== Blockbase ===
Contributors: Automattic
Requires at least: 6.1
Tested up to: 6.1
Requires PHP: 5.6.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A starting point for building your block-based site.

== Description ==

Blockbase is a simple theme that supports full-site editing. It comes with a set of minimal templates and design settings that can be manipulated through Global Styles. Use it to build something beautiful.

== About Blockbase ==

For more information see our README.md file.
Read the release notes at https://blockbasetheme.com/category/release-notes/

== Changelog ==

= 3.1.9 =
* Blockbase: Optionally remove inherited style variations from child themes (#6996)

= 3.1.8 =
* Removed forced content wrapper styles (#6961)

= 3.1.6 =
* Fix missing --wp prefix for var --custom--form--color--border (#6796)

= 3.1.5 =
* Blockbase + children: remove __unstableLocation (#6759)

= 3.1.4 =
* Revert Allow Jetpack to register fonts that Blockbase has not. (#6777) (#6788)

= 3.1.2 =
* Blockbase: Ensure Blockbase migration script is only run once (#6711)

= 3.1.1 =
* Removed the bits that disabled the navigation fallback so that navigation would work as expected. (#6743)

= 3.1.0 =
* cleanup buttons css (#6714)

= 3.0.8 =
* Blockbase: move link pseudo states to theme.json (#6156)

= 3.0.7 =
* Make theme available for translation as much as possible (#6484)

= 3.0.6 =
* Blockbase: Update navigation justification (#6580)

= 3.0.5 =
* Update sass build scripts to import from node_modules (#6371)
* Removed group block wrapping query pagination which was causing problems. (#6354)

= 3.0.4 =
* Blockbase: fix font-size in Comments Title Block (#6321)

= 3.0.3 =
* lock post-content block by default (#6314)

= 3.0.2 =
* Blockbase: Locked post content blocks  (#6299)

= 3.0.1 =
* Filter out Jetpack fonts when Blockbase is activated (#6269)

= 3.0.0 =
* Refactor/blockbase color admin (#6043)
* Moved templates from old folder location to new (#6073)
* Blockbase: Implement the Button elements API (#6041)
* Blockbase: Implement Comment Block and removed CSS (#6080)
* Fix/migrate blockbase font self hosted (#6123)
* Blockbase children: update comments block (#6153)
* Blockbase: Changed the trigger to render social icons (#6079)
* Blockbase: move button padding styles from ponyfill to theme.json (#5901)

= 2.0.39 =
* migrate to npm workspaces (#6200)

= 2.0.38 =
* Remove close button styles (#6082)

= 2.0.37 =
* Update all /pub themes so the theme-uri points to `https://wordpress.com/theme/<slug>` (#6033)

= 2.0.36 =
* Update header pattern loading (#5955)

= 2.0.35 =
* Fix issue with duplicate title tags in blockbase (#6019)

= 2.0.34 =
* Blockbase: fixing separator block dots option (#5964)

= 2.0.33 =
* Blockbase: Account for additional content via css grid configuration (#5816)

= 2.0.32 =
* Blockbase: add padding for group blocks with a background (#5811)
* Remove the Gutenberg Dependency Check from Blockbase and bump required version to 5.9 (#5823)

= 2.0.31 =
* Add select boxes to form styles (#5793)
* Change how 'old custom theme colors' are cleaned out to be more specific (#5754)
* Fix Woo number input in Blockbase (#5354)
* Added Gutenberg check to Blockbase themes (#5735)

= 2.0.30 =
* Blockbase: add style overrides for navigation block links (#5741)

= 2.0.29 =
* Blockbase: update font sizes to rem instead of px for a11y (#5752)

= 2.0.28 =
* Add missing paren. (#5710)

= 2.0.27 =
* Blockbase: move require social-navigation.php inside a check for WP_Theme_JSON_Resolver_Gutenberg to avoid errors. (#5654)

= 2.0.26 =
* Moved color customizations from custom to theme (#5629)
* Blockbase: Fix social icons (#5592)

= 2.0.25 =
* Blockbase: Remove list ponyfill (#5586)
* Blockbase: Add more issues that need to be resolved to remove CSS (#5587)

= 2.0.24 =
* Update README.md (#5528)
* avoid linter warnings about yoda conditions (#5538)
* Blockbase: Use the Global Styles rest API in the customizer (#5492)
* Update alignment rules (#5526)

= 2.0.23 =
* Try fixing the husky actions. (#5493)

= 2.0.22 =
* fixed spacing for header (#5472)

= 2.0.21 =
* Update alignment styles (#5475)
* Update dependencies (#5476)

= 2.0.20 =
* Blockbase: Add comments to a page (#5461)
* Fixed import to include __DIR__ instead of assuming relative path (#5449)

= 2.0.19 =
* remove the default color check during color customizations save (#5446)
* Remove block style registration (#5368)
* register header and footer in theme json (#5441)

= 2.0.18 =
* Blockbase: Remove the fallback for the navigation block (#5419)

= 2.0.17 =
* Blockbase search template update (#5418)

= 2.0.16 =
* Blockbase: Fix social navigation warning (#5389)

= 2.0.15 =
* Videomaker: Consolidate footer patterns in Videomaker (#5374)

= 2.0.14 =
* Blockbase: Load Block Patterns for children automatically (#5363)
* Update Blank Canvas Blocks footer (#5346)

= 2.0.13 =
* Blockbase: Update style.css (#5330)

= 2.0.12 =
* Blockbase: update dependencies & change node-sass to dart sass (#5290)
* Font size names update (#5300)
* Update all dependencies and add update script (#5304)
* Update alignment rules. (#5316)
* Reverting the mess caused renaming template folders (#5317)
* Remove templates improperly nested in a folder due to script error in #5105 (#5314)
* Refix/5105 script refactor template folders (#5312)
* Ran script moving template resources
* Blockbase: refactor footers to patterns (#5245)
* Blockbase: converted headers to patterns (#5238)
* Remove customizer restoration as it is no longer being removed by Gutenberg. (#5303)

= 2.0.11 =
* Revert Change the way we fetch users CPT to use the Gutenberg function directly (#5307)
* Revert Revert Fix Customizer Font Editing causing Site Editor WSOD (#5295)
* Revert Fix Customizer Font Editing causing Site Editor WSOD (#5262) (#5284)

= 2.0.10 =
* Fix Customizer Font Editing causing Site Editor WSOD (#5262)
* Add appearanceTools: true setting (#5072)
* Blockbase: Update the package.json (#5253)
* Blockbase: Update customizer PHP library to work with latest version of Gutenberg (#5251)

= 2.0.9 =
* Fallback to the old function name in case users are still on the old version of Gutenberg (#5250)
* Blockbase: Rename Gutenberg functions (#5248)

= 2.0.8 =
* Blockbase: Update alignment rules (#5220)
* Blockbase: fix variables for 2 colored themes (#5241)

= 2.0.6 =
* Blockbase: Force DOMXPath to use utf-8 encoding (#5193)

= 2.0.5 =
* Geologist Variations + Variation Creation Script (#5179)
* Fixed the header spacer element in header-center template (#5175)

= 2.0.4 =
* Try/consolidate headers (#5145)

= 2.0.3 =
* Blockbase: replace user key with custom (#5147)

= 2.0.2 =
* Blockbase Fonts: Only unset properties that are set (#5149)
* Blockbase: refactor template part blocks (#5129)
* Blockbase: Add an archive template (#5127)

= 2.0.1 =
* Blockbase: Fix navigation (#5128)
* Add padding to footer (#5122)
* Move calendar styles to blockbase (#5114)
* Blockbase: Move table stripes to Blockbase (#5115)
* Blockbase: Update paragraph gap (#5104)
* created a footer only template (#5103)
* Blockbase: Use variable for heading font size (#5101)
* Blockbase: Remove layout inheritance from the footer template (#5100)
* updated readme with blog links (#5099)
* Videomaker: Update Videomaker navigation (#5059)
* Quadrat: fixing hover styles for buttons inside the subscribe form (#5033)

= 2.0.0 =
* BREAKING CHANGE: Simplify the approach to font customization #4980

= 1.4.1 =
* Remove child-theme.json #4861

= 1.3.1 =
* Added dynamic duotone support to the customizer #4740
* Handle posts without titles #4920
* Update the stacking of site title and tagline #4928

= 1.2.22 =
* Add Kerr as a child theme

= 1.2.21 =
* Refactor Paragraph margin rules for consistent, non block-gap values #4908

= 1.2.20 =
* Fix fatal error with social navigation (#4895)

= 1.2.19 =
* Add query title block (#4878)

= 1.2.18 =
* Add a mixin for post meta (#4897)

= 1.2.17 =
* Fix form background color contrast (#4824)
* Search block font size (#4865)
* Make post meta icons optional (#4891)
* Update the query pagination block markup (#4805)

= 1.2.16 =
* Navigation styles (#4876)

= 1.2.15 =
* Update style.css tags (#4874)

= 1.2.14 =
* Cleanup errors on theme.json files and rebuild themes (#4857)

= 1.2.13 =
* Add an index.php file (#4841)

= 1.2.12 =
* Updated tested version of wordpress for all blockbase themes (#4839)
* Adjusted menu CSS to match recent changes in the block (#4822)
* Removed unnecessary top padding for seach block. (#4846)
* Update the child theme script to rename functions from 'newtheme' to the theme slug (#4840)
* Removed paragraph margin gap styles. (#4845)

= 1.2.11 =
* Move site title block settings to theme.json (#4701)
* Remove CSS for HTML block (#4572)

= 1.2.9 =
* Allow themes to inherit core gradients unless they define their own (#4818)
* Add theme.json meta data (#4819)
* Add social navigation to blockbase themes (#4482)

= 1.2.8 =
* Fix custom link color. (#4814)
* Remove unneeded margin rules (#4808)
* Rebuild all blockbase children (#4804)

= 1.2.7 =
* Added font color and size styles to form input placeholder (#4667)
* Fix navigation alignment (#4795)

= 1.2.6 =
* Update the space around the cookie consent label (#4788)
* Fix WP_Theme_JSON_Resolver_Gutenberg not found (#4769)
* Update header spacing (#4773)

= 1.2.1 - 1.2.5 =
* Bug fixes and child-theme compability improvements
* Refactored font sizes to better align with Gutenberg defaults
* Added site logo support
* Improved palette color changes when changing themes
* Added theme.json schema

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
