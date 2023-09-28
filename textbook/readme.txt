=== TextBook ===

Contributors: automattic
Tags: accessibility-ready, blog, breadcrumb-navigation, business, clean, contemporary, custom-colors, custom-header, custom-menu, dark, education, featured-content-with-pages, featured-images, fluid-layout, formal, full-width-template, geometry, infinite-scroll, journal, lifestream, light, magazine, minimal, modern, news, one-column, post-slider, professional, responsive-layout, right-sidebar, rtl-language-support, school, simple, site-logo, social-menu, sticky-post, testimonials, theme-options, threaded-comments, three-columns, traditional, translation-ready, travel, two-columns, white

Requires at least: 4.0
Tested up to: 4.7
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

TextBook WordPress Theme, Copyright 2017 Automattic, Inc.
TextBook is distributed under the terms of the GNU GPL

== Description ==

TextBook is a theme for colleges, schools and organizations focused on education.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Does this theme support any plugins? =

TextBook includes support for Jetpack's Infinite Scroll and Site Logos, as well as other features.

== Changelog ==

= 1.1.10 =
* Public Themes T1: PHP Rector fixes (#7396)

= 1.1.9 =
* #5242: Textbook: Fix Newspack blog blocks on posts (#6381)

= 7 September 2017 =
* Update $themecolors array to use hard-coded values rather than variables from the colors array; the addition of the # symbol caused them not to work.

= 25 August 2017 =
* Update version number, use correct URLs in style.css header and site footer.

= 22 August 2017 =
* Remove flex rules for narrow screens; these already get applied for screens greater than 50em wide.

= 19 July 2017 =
* Post date content option should only show or hide dates, not “featured” tag name

= 10 July 2017 =
* Fixes issue where featured image doesn't expand with the width of its placeholder when theres no sidebar on a post
* Prevents font descenders from getting cut off in titles
* Removing widont filter which causes display issues on .card posts

= 7 July 2017 =
* Changing .post selectors to .hentry for responsive styles, custom fonts and RTL
* Swapping .post selectors for .hentry so that CPTs have style

= 5 July 2017 =
* Cleaning up heading styles
* Fixes issue with content area width on some pages, also updating comment metadata font color for better legibility
* Replacing HEADER_TEXTCOLOR constant with value from get_theme_support()
* Fixes warning alert for empty (and unused) variable

= 4 July 2017 =
* Syncing theme tags between style.css and readme.txt
* Fixes some missing escaping functions, prevents customizer from throwing an error before the featured page text option is saved
* Adding a singular placeholder for comments title

= 8 June 2017 =
* Add JavaScript event to trigger resize event, to make sure video widget aspect ratio is correct. Update styles for unordered list widgets, just in the text widget area, so all bullets appear.

= 22 May 2017 =
* Version bump for previous commit
* A benign version bump to keep wpcom and wporg versions in sync while resubmitting to wporg

= 11 May 2017 =
* Adding z-index to post title to prevent cutting off with featured image.

= 22 March 2017 =
* add Custom Colors annotations directly to the theme
* move fonts annotations directly into the theme

= 3 March 2017 =
* Reworking the featured page setup to use WP_Query. Fixes #4407 - I'm not entirely sure why it was causing issues as it was, but this will look/behave the same from the user's perspective.

= 1 March 2017 =
* Fixes issue where post dates continue to appear even after disabling them from Customizer >> Content options
* Fixes issue where Theme Options Featured Content settings are tied to "regular" Featured Content

= 22 February 2017 =
* Add custom logo to headstart annotation.

= 27 January 2017 =
* Fix sync word-break style across all heading tags (h1, h2, etc.)
* Replace get_the_tag_list() with the_tags() for a more straightforward approach that prevents potential fatal errors.

= 26 January 2017 =
* Adds date format fallbacks so that 'j M Y', 'j m y', 'jMY', and 'jmy' all output the default TextBook date format

= 25 January 2017 =
* Adds hover state animation for featred images
* Support default date format and use 'j M Y' as a special date format
* Headstart improvements to include images in featured contact so it matches the demo more closely. Also some code tidying

= 20 January 2017 =
* cleaning up featured content responsive styles
* Adds featured images to featured content
* Adds responsive styles to hfeed (archives, search, etc.)
* Cleaning up gradients in blog grid feeatured images
* Adding semi-transparent featured images to blog post grid

= 19 January 2017 =
* Removing genericons in favor over inline or css-only SVG
* Adding SVG support to the search UI
* Replacing genericons with SVG icons in the following elements

= 18 January 2017 =
* Improve font-size heirarchy in .site-footer credits
* Add translation of Headstart annotation

= 12 January 2017 =
* Adding theme tags and code cleanup

= 11 January 2017 =
* Fixing spacing issue in featured images wrapped in anchor links
* Adding wpcom tags to stylesheet

= 4 January 2017 =
* Cleaning up highlander comment styles

= 29 December 2016 =
* Adding more user friendly padding to the comment form
* Makes highlander comments better match the theme styles
* Cleaning up comment meta spacing and font sizing
* Minor spacing and border color
* Adding time machine styles (again?)
* clean up retired a8c widget Time Machine styles.
* Refactoring entry-meta links for larger clickable areas

= 28 December 2016 =
* Adding smaller global font size for mobile devices
* Removes unnecessary bottom-borders from the last list-item of comments
* Adds negative margins to make category and tag/category cloud widgets line up with borders
* Code cleanup
* Code cleanup
* Move category count and archive count html inside of anchor link

= 27 December 2016 =
* Fixes hover styles on mobile menu to prevent hidden links, add readme.md file
* Updating README file

= 14 December 2016 =
* Adding better color support for category and tag widgets

= 12 December 2016 =
* Adding support for JetPack Author Bio

= 9 December 2016 =
* Removes unneccesary 'esc_html__' function in favor of '__' translator function
* Adds menu descriptions to headstarted pages
* TUX list improvements, hiding entry date on sticky posts in hfeed, testing headstart annotations

= 8 December 2016 =
* Adding support for Single Testimonials
* Adds RTL support, and glotpress file

= 7 December 2016 =
* Cleans up spacing in footer meta when there are no categories available
* Cleaning up nested comment margins
* Improving social menu fall back for headstart
* Adding headstart annotations, and
* Adding better shadows to drop down menus
* Remove featured content meta separators
* Adjusting meta separator border
* Adding a better separator style
* Improving comment separators
* Fixing comment navigation padding
* Code cleanup and syntax inprovements

= 7 November 2016 =
* Fix higlander reply link color annotations issue

= 4 November 2016 =
* Adds infinite scroll support to search results to fix older/newer post link issue
* More last minute color annotation improvements
* Various color annotation

= 1 November 2016 =
* Improving comment title typography and adding avatar borders
* Cleaning up comment meta data typography
* Repositioning avatars and edit links in comments
* Various color annotation adjustments

= 31 October 2016 =
* Small tweaks and improvements for color annotations
* Improve clickable areas in menus to ignore dropdown indicators
* Cleans up mobile menu and header link colors
* Fix menu padding on last top level menu item
* Fix flexbox display in next/previous links on newest and oldest posts
* Revising comment list and form latout to account for next/previous comment links
* Fix issue where post meta borders on mobile appeared on desktop
* Add 'colors_manager' color settings to $themecolors array
* Various last minute

= 26 October 2016 =
* Cide cleanup up for testimonial styles and

= 25 October 2016 =
* Various improvements to better compile color annotations

= 24 October 2016 =
* Small tweaks and improvements
* Revising comment design to improve hierarchy and legibility
* Fix highlander comments label color

= 19 October 2016 =
* Use CSS selector for Content Options

= 13 September 2016 =
* Minor CSS improvements for pixel perfect design

= 12 September 2016 =
* Fix font weight issue in cards
* Fixing Google Fonts issue

= 2 September 2016 =
* Adding theme colors for 3rd party services
* Replaceing Flickity with Flexslider
* Cleaning up featured content customizer options
* Fixing Featured Content title font display

= 1 September 2016 =
* Cleaning up table word-breaks
* Cleaning up Navigation ui to fix overlapping border pixels, also
* Improving table typography and adding borders
* Adding improved table styles
* Prevent pages from showing cat links in the card display

= 31 August 2016 =
* Fix to de-queue Google fonts if custom fonts are being used instead.
* Excerpt and content Continue Reading links now use one function for consistency
* Removing meta nav arrow. Code comment clean up.
* Multiple commite mixed in here due to a weird SVN issue
* Add better logo sizing for logo
* Use core logo instead of site logo
* Cleaning up header image implementation to remove inline styles
* Removing empty /customizer directory
* More code comment clean up
* Cleaning up code comments
* Code clean up for inline code comments
* adding wpcom suffix to version number
* Combining is_home() conditionals into one check
* Cleaning up code comments formatting
* Cleaning up code comment formatting
* Remove dashes in code comments
* Removing unneccesary parameters from textbook_widgets_init
* Remove post-formats support (this isn't a tumblog!)

= 23 August 2016 =
* Small tweak to fix mobile dropdown indicators so they appear normally when going back and forth between desktop responsive views
* Cleaning up avatar displays globally, and adding tweaks to the author and author grid widgets
* Adding author avatar to byline.

= 22 August 2016 =
* Adding screenshot.png
* Cleaning up menu UI in customizer.
* Cleaning up and optimizing Menu CSS

= 19 August 2016 =
* Small clean up to style.css
* More menu bug
* Cleaning up Mobile menu

= 18 August 2016 =
* Typographic improvements to featured content, better responsive testimonials
* Cleaning up mobile menu UI
* Cleaning up Testimonials display on mobile

= 17 August 2016 =
* Cleaning up post flair styles

= 1 August 2016 =
* Cleaning up colors case, and adding more contrast to default burgundy color. Revising page highlight design and markup
* Cleaning up search UI and fixing z-index issue with menu and search form
* Improving Header Search UI

= 29 July 2016 =
* Re-writing the way featured content works
* Adds better separator support for large menus
* Constrains .page styles to single pages only. Hides menu separators/borders from any item passed the last one thats divisible by 5

= 27 July 2016 =
* Cleaning up comments area so there's less dead space between widgets
* Increasing search icon and social icon size
* Adding separators to header menu for edge cases where menu links break out into multiple lines
* Adding edit links to cards and archives

= 26 July 2016 =
* Makes site title bold on all pages, especially in cases where 'h1' changes to 'p'
* Fixes a Safari flex-box inconsistenct, and removes duplicate style declarations

= 25 July 2016 =
* Repositioning testimonials speech indicator, re ordering infinite scroll in SCSS
* Reorganizing styles in SCSS to better sync with components
* Fixing text domains to consitently use 'textbook'
* Re-working sharing selectors to differentiate between JetPack sharing and JetPack Post Flair
* Makes JetPack sharing Links look like JetPack Post Flair
* Makes sharing, rating and like sections fit consistently within the post area. Also, ads word breaks to paragraphs in widgets
* Various tweaks and

= 22 July 2016 =
* Adding color animation to buttons and anchor links
* Adding style to comments closed indicator
* Cleaning up comment reply titles
* Adding style to comment form headers
* Adding support for more than 4 widgets in footer widget area
* Adds positioning tweak to dropdown icons, adds contact info widget styling

= 21 July 2016 =
* Force infinite scroll to use on click UI
* Cleans up infinite scroll loader so it appears in the same place where the load more button is located
* Adding opacity animation to .card hover states, for a smoother transition
* Adds animation to header search form UI
* Adds better support for pages that don’t have a sidebar.
* More tweaks and improvements to Testimonials
* Cleaning up the Testimonials area

= 20 July 2016 =
* Adds taller line-height for menu items
* Fixes issue with icons still looking for font-awesome, uses genericons for dropdown indicators
* Various
* Adding style support for various wpcom specific widgets.

= 19 July 2016 =
* Adding support for authors widget
* Adding support for JetPack Display Posts from other sites widget
* Adding Author widget support and alphabetizing styles
* Removeing Sass files. These must have gotten came in the init commit by mistake

= 18 July 2016 =
* Fixing header image aspect ratio, and adding support for .org JetPack widgets
* Various TUX imporvements
* Pixel perfect adjustments to the star indicator that appears on sticky posts
* Adding a 'sticky' indicator for posts that appear in feeds.
* Improving card display to use 'contiue reading' instead of 'read more', smaller font, and better class naming
* Cleaning up widget heading baselines
* Various tweaks, to breadcrumbs, widget colors and typography, and footer spacing

= 15 July 2016 =
* Cleaning up card display to improve usability
* Various typographic and baseline consistency tweaks
* Adding padding to page layout
* More cleanup and optimization
* Cleaning up page styles and markup
* Updating colors, cleaning up highlander comments, re-working page layout

= 14 July 2016 =
* Fixing widget border display issue
* Cleaning up widget margins in footer
* Rewriting footer markup and styles for more flexible responsive layout
* Cleaning up Footer widget area and footer styles
* Cleaning up padding and responsive styles, renaming footer widget area

= 13 July 2016 =
* Various styling improvements for cards, comments, widgets and header elements
* Re-writing menus styles to use less css, cleaning up testimonial arrow navigation

= 12 July 2016 =
* Fixes Footer o conditionlally posiition social menu, footer, menu and copyright info
* Cleaning up responsive styles
* Replacing FLexslider with Flickity (metafizzy)
* Cleans up testimonial and comment mobile styles

= 11 July 2016 =
* Prevents mobile menu from running into header text
* Improvements to comments display, navigation and card layout
* Adding Flexslider to testimonials
* Fixing a typo in infinite scroll sass
* Cleaning up .card hover states and colors
* Removing unused Featured Page component, Using standard Featured Content instead
* Cleaning up infinite scroll overrides
* Various improvements and

= 30 June 2016 =
* Fixing testimonial margins
* Fixing header padding space
* Cleaning up card styles and adding responsive styles
* Adding improvements to Testimonials
* Adding spcae between site content and header
* Hiding unused markup when there isn't enough featured contents
* Cleaning up featured content to account for custom header images
* Cleaning up featured content area
* Cleaning up JetPack post flair borders and padding
* Adds style to JetPack post flair and removes extra line ending in extras.php
* Adding tweaks to Post Flair layout
* Decided o leave wpcom ads inside the_content
* Cleaning up javascript, and moving post flair and geo-location outside of the_content

= 29 June 2016 =
* Adding a tweak to the JetPack post features
* Small tweak to menu colors and adding layout support for JetPack post features
* Improving hover state styling for main menu, fixing an infinite scroll wrapper issue
* Fading out background images for single posts and pages
* Fix code comment typo
* Moving wpcom styles to jetpack directory
* Cleaning up card styles, and adding infinite scroll styles
* Remove border from top level list items
* Cleaning up footer navigation
* Hide wpstats icon
* Adding support for card formatted posts
* Revising footer widget area and adding footer navigation
* Adding a footer widget area
* Increases the content width to 900 from 640
* Small fix for taller custom header image height

= 28 June 2016 =
* Initial commit

== Credits ==

* Based on Underscores http://components.underscores.me/, (C) 2015-2016 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2016 Nicolas Gallagher and Jonathan Neal, [MIT](http://opensource.org/licenses/MIT)
* Flexslider 2.6.4 https://woocommerce.com/flexslider/, (c) 2015 WooThemes, [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* Theme screenshot uses a CC0 image from Pixabay: https://pixabay.com/en/building-university-college-54347/, [CC0 Creative Commons]
