=== Skatepark ===
Contributors: Automattic
Requires at least: 5.7.2
Tested up to: 5.7.2
Requires PHP: 5.7
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==
Skatepark is a bold and exciting WordPress theme designed for modern events and organizations. With its simple but vivid color default scheme, duotone support, and playful grid, Skatepark is a theme designed for work and play. Customize its colors or try out different font pairings to create your own unique look and feel.

== Changelog ==

= 1.0.40 =
* Skatepark: refactor patterns (#5858)

= 1.0.39 =
* multiple themes: update font sizes from px to rem for better a11y (#5801)

= 1.0.38 =
* fixed spacing issues (#5627)
* updated changelog (#5572)
* Skatepark: trac ticket fixes (#5551)
* resized images that were too big (#5547)

= 1.0.36 =
* Try making skatepark standalone block theme (#5523)
* Blockbase: Use the Global Styles rest API in the customizer (#5492)

= 1.0.35 =
* Skatepark: new Home template (#5491)
* Skatepark: refactor CSS into block markup (#5473)

= 1.0.34 =
* Update dependencies (#5476)

= 1.0.33 =
* Remove block style registration (#5368)

= 1.0.32 =
* Skatepark: updated font sizes (#5416)

= 1.0.31 =
* Blockbase: Load Block Patterns for children automatically (#5363)

= 1.0.30 =
* Blockbase: Remove custom 404 templates (#5332)

= 1.0.29 =
* Blockbase: update dependencies & change node-sass to dart sass (#5290)
* Font size names update (#5300)
* Update all dependencies and add update script (#5304)

= 1.0.28 =
* Reverting the mess caused renaming template folders (#5317)

= 1.0.28 =
* Remove templates improperly nested in a folder due to script error in #5105 (#5314)
* Refix/5105 script refactor template folders (#5312)
* Ran script moving template resources
* Blockbase: refactor footers to patterns (#5245)
* Blockbase: converted headers to patterns (#5238)

= 1.0.27 =
* Skatepark: use grid of posts for Search page (#5234)
* removed header template part from skatepark's json (#5233)

= 1.0.26 =
* Skatepark: Remove margin of the post content block (#5229)
* Skatepark: simplify nav (#5190)

= 1.0.25 =
* Try/consolidate headers (#5145)

= 1.0.24 =
* Blockbase: refactor template part blocks (#5129)
* Blockbase: Add an archive template (#5127)

= 1.0.23 =
* Skatepark: Add footer pattern to footer template (#5088)

= 1.0.22 =
* Skatepark: Add space below the Featured Image on the single post page (#5061)

= 1.0.21 =
* Blockbase: Simplify the approach to font customization (#4980)
* Paternize 404 Page (#5039)

= 1.0.20 =
* Update all navigation blocks to new markup (#5038)

= 1.0.19 =
* Skatepark: Fix the alignment of social icons in the footer pattern (#5040)

= 1.0.18 =
* Blockbase: Add child CSS if it exists (#5047)

= 1.0.17 =
* Add block pattern for labeled post links (#5015)
* Skatepark: Fix multiline tags and categories (#5021)

= 1.0.16 =
* Blockbase: Use new attributes for navigation block (#4832)
* Skatepark: Increase menu spacing & style current menu item (#4966)

= 1.0.15 =
* Remove/child theme (#4861)

= 1.0.14 =
* fixed wrong font sizes for the theme (#4929)
* Skatepark: dynamic duotone support (#4740)

= 1.0.13 =
* Blockbase: Fix form background color contrast (#4824)
* Blockbase: search block font size (#4865)
* Blockbase: make post meta icons optional (#4891)
* Blockbase: Update the query pagination block markup (#4805)

= 1.0.12 =
* Skatepark: blog posts spacing (#4864)

= 1.0.11 =
* fixed spacing issues on post title (#4855)

= 1.0.10 =
* Update style.css (#4874)

= 1.0.9 =
* cleanup errors on themejson files and rebuild themes (#4857)

= 1.0.8 =
* Add copy of Quadrat's index.php to Geologist (#4841)

= 1.0.7 =
* Updated tested version of wordpress for all blockbase themes (#4839)
* Adjusted menu CSS to match recent changes in the block (#4822)

= 1.0.6 =
* Blockbase: Allow themes to inherit core gradients unless they define their own (#4818)
* Blockbase: Add theme.json meta data (#4819)
* Blockbase: Add social navigation to blockbase themes (#4482)

= 1.0.5 =
* Blockbase:  remove unneeded margin rules (#4808)
* Blockbase: Rebuild all blockbase children (#4804)

= 1.0.4 =
* remove unnecesary queryId attribute (#4806)

= 1.0.3 =
* Blockbase: Make the top margins consistent (#4726)
* Blockbase: Update font size names (#4711)
* Drop fontsToLoadFromGoogle for child themes (#4633)

= 1.0.2 =
* add json schema to theme.json and rebuilt children (#4714)
* Blockbase: Add site logo (#4692)
* version bump
* Added additional margin top to achieve design target (#4664)
* Skatepark: Fix title spacing (#4624)
* Removed block-level margin styles from all themes (#4698)
* Quadrat+Skatepark: Remove code that removes support for block templates (#4693)
* Add comments to pages on Skatepark, Quadrat and Geologist (#4632)
* Remove l/r padding from default posts template (#4665)
* Skatepark: Fix social links navigation alignment on desktop (#4635)
* Skatepark: Add submenu styling (#4662)
* Blockbase: Add post-meta template part (#4565)
* Blockbase + Quadrat: remap quadrat colors, refactor selection to tertiary (#4570)
* Blockbase: Remove code block CSS (#4562)
* Moved gap between site logo and title from GRID to IMAGE
* Simplify Custom margin (#4556)
* Update from WPCOM (#4571)
* Skatepark: refactor post title margins (#4561)
* Merge pull request #4520 from Automattic/skatepark-improve-header
* fix skatepark reply text transform, align comment header
* added text-decoration mixin to skatepark comments
* changed reply link font size and hover effect
* removed unused CSS from Blockbase children
* changed padding of cover block
* fix horizontal scroll
* changed approach for alignfull cover blocks
* Skatepark: Move base padding setting back to theme.json
* Skatepark: Add cover block scss with positioning values
* Skatepark: Remove padding setting from theme.json
* Skatepark: Change pixel value to em
* Skatepark: Change padding clamp to min
* Skatepark: Add cover padding to theme.json
* Skatepark: Remove cover scss file
* Skatepark: Add custom padding to cover block
* Geologist: code quality (#4532)
* align social icons and tagline better
* align social icons to the tagline and site title
* better spacing
* improve header styles to fit new design guidelines
* Apply/batch utils audit (#4494)
* Move the paragraph indent style to the first paragraph of every container (#4481)
* reduced the height of the menu container on mobile
* changed mobile layout
* used variables for spacing
* used grid to align logo to fit design
* Removed block attributes from site-title in header as they are set in theme.json (and some of those items removed were incorrect) (#4511)
* Blockbase: Update Blockbase and children to use flex (#4468)
* updated required version
* replaced blockbase domain
* missing slash
* added images to files and credited them
* Use variables instead of hard coded values for border and padding (#4484)
* Skatepark: Use primary color for divider
* Skatepark: Add border to post title
* Skatepark: Add class to body if featured image exists
* Blockbase + co: Universal Social menu (#4467)
* Quadrat: Make the post date a link (#4480)
* Skatepark: remove unneeded CSS for mixed media pattern (#4477)
* Update readme.txt
* Update style.css
* Update readme.txt
* Skatepark: Add columns in container block pattern (#4449)
* changed rule to only change border-width
* changed color of separator
* Blockbase: remove margin-top from first descendants of columns and groups (#4436)
* translatable read more text
* fixed spacing issues on the query block
* added link to featured image, fixed indent on read more link
* query loop block pattern
* Skatepark: apply wide width to header (#4464)
* Skatepark: add mixed media in container pattern (#4403)
* Merge pull request #4438 from Automattic/skatepark-single+post-templates
* add screenshot
* comments spacing
* improved spacing for skatepark, refactored headings spacings on BB
* realigned author items to fit design
* Skatepark: Add top margin to testimonial cite
* Merge branch 'trunk' into add/skatepark-testimonial-block-pattern
* Merge pull request #4410 from Automattic/add/skatepark-search-template
* Merge pull request #4414 from Automattic/add/skatepark-paragraph-quote-pattern
* Skatepark: Reduce quote font size to medium
* applied duotone to index.html feat images
* separated into two templates
* added pagination
* custom styles and svg for post meta
* added post meta stuff, fixed class on BB and Mayland
* Skatepark: Add an improved testimonial block pattern
* Skatepark: Use existing class for text indent
* Skatepark: Increase font weight of side quote cite
* Skatepark: Replace query-loop with post-template
* Add back icons.
* Replace names with fake ones.
* Skatepark: Apply paragraph styles only to middle column
* Skatepark: Add real content
* Skatepark: Use native column block styles
* Skatepark: Use separator rather than border
* Skatepark: Add border to each search result
* Merge pull request #4418 from Automattic/skatepark/update-green-color
* Update green color.
* Skatepark: Control flex with CSS
* Skatepark: Adjust spacing for paragraph with quote
* Skatepark: Add paragraph with quote block pattern
* Skatepark: Add side quote block style
* Skatepark: Make testimonial quote 75% width at desktop
* Skatepark: Add spacer below search block
* Skatepark: Remove third quote mark
* Skatepark: Remove button text from search block
* Skatepark: Add search block template
* Skatepark: Fix 404 title closing tag
* Merge branch 'trunk' into add/skatepark-testimonial-block-pattern
* Skatepark: Remove testimonial block pattern
* Skatepark: Add testimonial quote block style
* tweaked query blocks styles
* new query block design
* Merge branch 'trunk' into add/skatepark-testimonial-block-pattern
* changed text
* two columns pattern and indented paragraph block style
* Merge pull request #4367 from Automattic/add/skatepark-comment-form-styles
* alt text
* remove st rong tag from pattern
* restrict the caption on full width images to wide width
* Update the aside caption block style so it doesn't rely on a strong tag
* translatable caption
* created block style, changed approach to use caption instead of columns
* first pass at the block pattern
* created block pattern file
* Skatepark: add text list with button block pattern (#4390)
* made buttons uppercase by default (#4401)
* Blockbase: Fix 404 template (#4402)
* added % units to blockbase and rebuilt children
* Blockbase: Move form grid styles to Blockbase
* Blockbase: Move custom checkbox styles to Blockbase theme.json
* Blockbase: Update font customization approach (#4389)
* Blockbase: Move textarea background to Blockbase
* Blockbase: Move hide-accesibly mixin to Blockbase
* Blockbase: Move label position relative to Blockbase
* Skatepark: Use flex at smaller resolutions
* Skatepark: Use primary color for box shadow color
* Merge branch 'trunk' into add/skatepark-testimonial-block-pattern
* Skatepark: add the header (#4354)
* Skatepark: Adjust testimonial spacing
* Skatepark: Apply styling to quote text in editor
* created duotone presets
* Merge branch 'trunk' into add/skatepark-testimonial-block-pattern
* Blockbase: remove unused code (#4379)
* Skatepark: Add initial Testimonial block pattern
* Merge branch 'trunk' into add/skatepark-comment-form-styles
* Blockbase: Load editor styles for blockbase before those of the child theme (#4377)
* Merge pull request #4343 from Automattic/skatepark-footer
* changed text
* prefooter styles for search block
* Blockbase: Add comment form checkbox styling
* Blockbase: Add comment form input & textarea border styles
* Blockbase: Improve comment awaiting moderation styling
* Skatepark: Increase font weight of comment meta links
* Skatepark: Change bottom margin on cookies consent container
* Skatepark: Add custom.form.label styles to child-theme.json
* Skatepark: Add custom.form.border to child-theme.json
* Skatepark: Remove line-height from comments block
* Skatepark: Use calc for commetlist bottom margin
* Merge branch 'trunk' into add/skatepark-comment-form-styles
* Skatepark: Tweak spacing for comment form
* Skatepark: Hide says span in comments
* Skatepark: Tweak grid column gap
* Skatepark: Re-order comment form
* Skatepark: Adjust spacing for comment meta & paragraphs
* Skatepark: Adjust comment checkbox styling
* Skatepark: Add comment font & spacing styles
* renamed slugs of font sizes to be consistent with blockbase
* renamed size
* reduced lineheight of h3
* renamed normal font size
* typography adjustments from design feedback
* translatable labels for the search block
* Skatepark: Add underline to comment meta links
* changed footer pattern to use search block and primary navigation
* Merge branch 'trunk' into add/skatepark-comment-form-styles
* skatepark search block styles
* more blockbase search block improvements
* improved search block on blockbase, settings for skatepark
* replaced subscribe section with search block
* use variables for colors on social links, remove left space
* removed links css
* moved pre footer to block pattern
* added secondary menu, initial blocks for footer
* extend the exception to headings
* change offset only for post titles and site title
* more consistent outline spacing using ex units
* text decoration thickness to use relative units
* use primary color for outline so it's always visible
* outline offset for buttons
* Skatepark: Add initial post-comments.scss
* button and link styles and settings
* renamed palettes
* Skatepark: Add alternative color palettes
* Merge branch 'trunk' into add/skatepark-margin-spacing
* Skatepark: Move spacing settings to child-theme.json
* removed extra custom variables from Sk8prk
* Skatepark: Add layout content sizes
* Skatepark: Add default margin settings
* typography settings for sk8prk, refactored BB headings rules
* custom selection color
* defined main color palette for the theme
* Skatepark: added a starting boilerplate  (#4325)


= 1.0.40 =
* Skatepark: refactor patterns (#5858)

= 1.0.37 =
* Updated social links urls
* Fixed outline for navigation links
* Prefixed featured image class function

= 1.0.0 =
* Initial release

== Copyright ==

Skatepark WordPress Theme, (C) 2021 Automattic, Inc.
Skatepark is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

Skatepark uses the following images:

License: CC0
https://stocksnap.io/photo/skateboard-sideways-USRYO9E14Y by Messala Ciulla (https://stocksnap.io/author/messala)
https://stocksnap.io/photo/skateboarder-shoes-BTZE6FHZIV by Burst (https://stocksnap.io/author/burstshopify)
https://stocksnap.io/photo/skateboard-skater-5OTFJYVYSE by Joe Cooke (https://stocksnap.io/author/14659)

Used in block patterns.
