<?php

/**
 * Background color
 * - Default: white
 * - Used for all backgrounds
 */
add_color_rule( 'bg', '#ffffff', array(

	// Background color, no contrast
	array(
		'body,
		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		ins,
		mark,
		.main-navigation .children,
		.main-navigation .sub-menu,
		.main-navigation > div,
		.menu-toggle,
		.menu-toggle:focus,
		.entry-image .entry-image-caption,
		#infinite-handle span button,
		.comment .comment-reply-title a', 'background-color' ),

	// Border color, no contrast
	array(
		'.card:hover .entry-header,
		.card .entry-title a:hover,
		.card:hover .entry-title a:hover', 'border-color' ),

	// Text color, no contrast
	array(
		'button:active,
		button:focus,
		button:hover,
		input[type="button"]:active,
		input[type="button"]:focus,
		input[type="button"]:hover,
		input[type="reset"]:active,
		input[type="reset"]:focus,
		input[type="reset"]:hover,
		input[type="submit"]:active,
		input[type="submit"]:focus,
		input[type="submit"]:hover,
		pre,
		.page-links a:hover,
		.posts-navigation a:active,
		.posts-navigation a:hover,
		.site-feature .entry-header .entry-categories:after,
		.site-feature .entry-header .entry-meta,
		.site-feature .entry-header .entry-meta a,
		.site-feature .entry-header .entry-meta a:active,
		.site-feature .entry-header .entry-meta a:hover,
		.site-feature .entry-header .entry-summary,
		.site-feature .entry-header .entry-title a,
		.site-feature .entry-header a,
		.card:hover,
		.card:hover a,
		.card:hover a:active,
		.card:hover a:hover,
		.card:hover .entry-meta,
		.card:hover .entry-meta > span:after,
		.card:hover .sd-rating h3.sd-title,
		#infinite-handle span button:active,
		#infinite-handle span button:focus,
		#infinite-handle span button:hover,
		.widget_tag_cloud a[style]:active,
		.widget_tag_cloud a[style]:hover', 'color' ),

),

__( 'Background color' ) );

/**
 * Text and Border Colors
 * - Default: black
 * - Used for buttons, general rules and borders
 */
add_color_rule( 'txt', '#000000', array(

	// Background Color, bg contrast, less contrast to match #CCC
	array(
		'button:active,
		button:focus,
		button:hover,
		input[type="button"]:active,
		input[type="button"]:focus,
		input[type="button"]:hover,
		input[type="reset"]:active,
		input[type="reset"]:focus,
		input[type="reset"]:hover,
		input[type="submit"]:active,
		input[type="submit"]:focus,
		input[type="submit"]:hover,
		hr,
		pre,
		.site-feature .entry-image-link,
		.card .entry-image,
		#infinite-handle span button:active,
		#infinite-handle span button:focus,
		#infinite-handle span button:hover,
		.page-links a:hover,
		.posts-navigation a:active,
		.posts-navigation a:hover,
		.widget_tag_cloud a[style]:active,
		.widget_tag_cloud a[style]:hover', 'background-color', 'bg' ),

	// Background Color, bg contrast, more contrast to match #555
	array(
		'.site-feature .entry-header', 'background-color', 'bg', 8 ),

	// Border Color, bg contrast
	array(
		'button,
		input[type="button"],
		input[type="email"],
		input[type="password"],
		input[type="reset"],
		input[type="search"],
		input[type="submit"],
		input[type="text"],
		input[type="url"],
		textarea,
		.site-heading,
		.site-branding,
		.site-footer,
		.site-main .comment-navigation .nav-links,
		.main-navigation .children,
		.main-navigation .sub-menu,
		.main-navigation .menu-item-has-children:hover,
		.main-navigation .page_item_has_children:hover,
		.main-navigation div > ul ul,
		.main-navigation ul ul > li:hover,
		.archive .page-header .page-title,
		.comment-respond p input,
		.comment-respond p textarea,
		.page-links a,
		.posts-navigation a,
		.search .page-header .page-title,
		.widget_tag_cloud a[style],
		.wpcom-reblog-snapshot .reblog-post,
		.entry-image .entry-image-caption,
		.main-navigation div > ul:last-child,
		.main-navigation div > ul:first-child,
		.page .page,
		.pingback .comment-body,
		.search .page-header,
		.search-no-results .page-content,
		.single #page .site-main,
		.single .site-main .post-navigation,
		.single-jetpack-portfolio .hentry,
		.archive .page-header,
		.author-meta,
		.card .entry-header,
		.card .entry-image-section,
		.comments-area,
		.entry-author,
		.error404 .not-found,
		#infinite-handle span button,
		#infinite-handle span button:active,
		#infinite-handle span button:focus,
		#infinite-handle span button:hover,
		#secondary', 'border-color', 'bg' ),

	// Border Color, bg contrast, less contrast to match #CCC
	array(
		'.single .site-main > .post-navigation,
		.site-main .comment-navigation .nav-links,
		.pingback .comment-body', 'border-color', 'bg', 2 ),

	// Border Color, bg contrast, more contrast to match #999
	array(
		'.main-navigation .sub-menu:before,
		.main-navigation .children:before,
		.main-navigation li:after,
		.main-navigation li:after,
		.dropdown-toggle,
		.comment .children .comment-body,
		.comment .comment-body,
		.comment-content td,
		.comment-content th,
		.comment-content tr,
		.single div#respond,
		.comment-respond,
		.no-comments,
		.entry-content tbody td,
		.entry-content tbody th,
		.entry-content tbody tr,
		.widget_calendar tbody td,
		.widget_calendar tbody th,
		.widget_calendar tbody tr', 'border-color', 'bg', 12 ),

	// Text Color, bg contrast
	array(
		'a,
		a:visited,
		input[type="email"]:focus,
		input[type="password"]:focus,
		input[type="search"]:focus,
		input[type="text"]:focus,
		input[type="url"]:focus,
		mark,
		textarea:focus,
		.entry-content a:active,
		.entry-content a:hover,
		.entry-title a,
		.site-title a,
		.site-description,
		.main-navigation ul > li a,
		.dropdown-toggle:after,
		.comment-content a:active,
		.comment-content a:hover,
		.widget_calendar table a:active,
		.widget_calendar table a:hover', 'color', 'bg' ),

	// Text Color, bg contrast, less contrast to match #CCC
	array(
		'.comment-navigation .nav-next:after,
		.comment-navigation .nav-previous:after,
		.entry-meta > span:after,
		.post-navigation .nav-next:after,
		.post-navigation .nav-previous:after', 'color', 'bg', 2 ),

	// Text Color, bg contrast, with lowered opacity
	array(
		'body,
		button,
		input,
		select,
		textarea,
		.entry-meta a,
		footer.entry-meta a:hover,
		footer.entry-meta a:active,
		div.sharedaddy h3.sd-title,
		div#jp-relatedposts h3.jp-relatedposts-headline em', 'color', 'bg', 2 ),

	// Text Color, bg contrast, more contrast to match #999
	array(
		'.archive .taxonomy-description,
		.comment-metadata a,
		.entry-image .entry-image-caption,
		.entry-meta,
		.gallery-caption,
		.pingback .comment-body,
		.search .taxonomy-description,
		.widget_calendar tbody,
		.wp-caption .wp-caption-text', 'color', 'bg', 12 ),

),

__( 'Text and Border Colors' ) );

/**
 * Link color
 * - Default: red
 * - Used for link hover states, primary menu hover states, and buttons
 */
add_color_rule( 'link', '#f35029', array(

	// Background Color, bg contrast
	array(
		'.card:hover', 'background-color', 'bg' ),

	// Border Color, bg contrast
	array(
		'.dropdown-toggle:hover,
		.dropdown-toggle.toggled-on,
		.comment-content blockquote,
		.comment-content q,
		.entry-content blockquote,
		.entry-content q,
		.card .entry-title a:hover', 'border-color', 'bg' ),

	// Text Color, bg contrast
	array(
		'a:active,
		a:focus,
		a:hover,
		button,
		footer.entry-meta a,
		input[type="button"],
		input[type="email"],
		input[type="password"],
		input[type="reset"],
		input[type="search"],
		input[type="submit"],
		input[type="text"],
		input[type="url"],
		textarea,
		.site-title a:hover,
		.main-navigation .children li:hover:before,
		.main-navigation .sub-menu li:hover:before,
		.main-navigation ul > li:hover > a,
		.main-navigation ul ul > li:hover > a,
		.menu-toggle,
		.menu-toggle:focus,
		.dropdown-toggle.toggled-on:after,
		.dropdown-toggle:hover::after,
		.dropdown-toggle:active,
		.dropdown-toggle:focus,
		.entry-content a,
		.entry-meta a:active,
		.entry-meta a:hover,
		.entry-title a:active,
		.entry-title a:hover,
		.bypostauthor .fn:before,
		.comment .comment-author a,
		.comment-content a,
		.comment .comment-reply-link,
		.comment .comment-reply-title a,
		#infinite-handle span button,
		.posts-navigation a,
		.widget_calendar table a,
		.widget_tag_cloud a[style],
		.wpcom-reblog-snapshot .reblog-post:before', 'color', 'bg' ),

),

__( 'Links, Headings, and Buttons' ) );

/**
 * Featured Color Schemes
 */

add_color_palette( array(
	'#F9F4F0',
	'#ed0202',
	'#1e120f',
	'',
	'',
), __( 'Tan, Red, & Mahogany' ) );

add_color_palette( array(
	'#2a044a',
	'#f0c060',
	'#f35029',
	'',
	'',
), __( 'Mardi Gras' ) );

add_color_palette( array(
	'#f9f7f0',
	'#666666',
	'#198975',
	'',
	'',
), __( 'Off White & Ever Green' ) );

add_color_palette( array(
	'#000000',
	'#ededed',
	'#c60000',
	'',
	'',
), __( 'Black, Gray, & Red' ) );

add_color_palette( array(
	'#228a24',
	'#ffffff',
	'#000000',
	'',
	'',
), __( 'Green, White & Black' ) );

add_color_palette( array(
	'#ffffff',
	'#b38184',
	'#455c86',
	'',
	'',
), __( 'White, Mauve & Navy' ) );
