<?php
/**
 * Custom Colors: AltoFocus
 */

/**
 * WHITE --------------------
 */

add_color_rule( 'bg', '#ffffff', array(

	/* Background color, no contrast */

	array( 'html,
			body,
			button,
			#page a.button,
			input[type="button"],
			input[type="reset"],
			input[type="submit"],
			ins,
			mark,
			.dropdown-toggle,
			.hfeed #main .hentry.grid-item-featured:not(.has-post-thumbnail) .entry-header,
			.hfeed #main .hentry:not(.has-post-thumbnail) .entry-header,
			.hfeed #main .hentry .post-thumbnail:after,
			.site-header,
			.top-navigation > div,
			.menu-toggle,
			.single .entry-media,
			.site-content,
			#infinite-handle span button,
			.widget-area', 'background-color' ),

	/* Text color, link contrast */

	array( 'button:hover,
			#page a.button:hover,
			input[type="button"]:hover,
			input[type="reset"]:hover,
			input[type="submit"]:hover,
			#infinite-handle span button:hover,
			.comments-link:hover a,
			.dropdown-toggle.toggled-on:after,
			.dropdown-toggle:hover:after', 'color' ),

	/* Text color, link contrast */

	array( '.top-navigation .children li a,
			.top-navigation .sub-menu li a,
			.top-navigation div > ul li.toggled-on a,
			.hfeed #main .hentry.grid-item-featured .entry-header-wrap,
			.hfeed #main .hentry.grid-item-featured .entry-header-wrap .posted-on,
			.hfeed #main .hentry.grid-item-featured:hover.has-post-thumbnail .edit-link a', 'color', 'link', 5 ),

	/* Stroke color, contrast bg */

	array( '.dropdown-toggle.toggled-on .meta-nav .dropdown-icon .line,
			.dropdown-toggle:hover .meta-nav .dropdown-icon .line,
			.menu-toggle:hover .meta-nav .menu-icon .line,
			.post-navigation-fixed .nav-links a:hover .meta-nav .arrow-icon .arrow', 'stroke', 'link', 5 ),

	/* Fill color, contrast bg */

	array( '.comments-link .comment-icon .path,
			.post-navigation-fixed .nav-links a .meta-nav .arrow-icon .circle', 'fill' ),

), __( 'Background Color', 'altofocus' ) );



/**
 * ORANGE --------------------
 */

add_color_rule( 'txt', '#e38900', array(

	/* Background color, bg contrast */

	array( '#infinite-handle span button:hover,
			.dropdown-toggle.toggled-on,
			.dropdown-toggle:hover,
			button:hover,
			#page a.button:hover,
			input[type="button"]:hover,
			input[type="reset"]:hover,
			input[type="submit"]:hover', 'background-color', 'bg', 3 ),

	/* Background color, bg contrast */

	array( '.hfeed #main .hentry.grid-item-featured .post-thumbnail:after', 'background-color' ),

	/* Background color, .9 opacity */

	array( '.flex-control-paging li a:hover,
			.flex-control-paging li a.flex-active', 'background-color', 0.9 ),

	/* Border color, bg contrast */

	array( '#infinite-handle span button:hover,
			.dropdown-toggle.toggled-on,
			.dropdown-toggle:hover,
			button:hover,
			#page a.button:hover,
			input[type="button"]:hover,
			input[type="reset"]:hover,
			input[type="submit"]:hover', 'border-color', 'bg', 3 ),

	/* Border color, no contrast */

	array( '.comments-link:hover:after,
			.comments-link:hover:before', 'border-top-color' ),

	array( '.comments-link:hover:after,
			.comments-link:hover:before', 'border-left-color' ),

	/* Text color, bg contrast */

	array( 'a,
			a:active,
			a:hover,
			a:focus,
			a:visited,
			.flex-direction-nav a:hover .meta-nav:before,
			.hfeed #main .hentry .edit-link a,
			.hfeed #main .hentry.grid-item-featured:not(.has-post-thumbnail) .entry-header-wrap,
			.hfeed #main .hentry.grid-item-featured:not(.has-post-thumbnail) .entry-header-wrap .posted-on,
			.hfeed #main .hentry:not(.has-post-thumbnail) .entry-header-wrap,
			.hfeed #main .hentry:not(.has-post-thumbnail) .entry-header-wrap .posted-on,
			.hfeed #main .hentry .entry-header-wrap,
			.hfeed #main .hentry .entry-header-wrap .posted-on,
			.hfeed #main .hentry:hover.has-post-thumbnail .edit-link a', 'color', 'bg' ),

	/* Comments link fill, bg contrast */

	array( '.comments-link:hover .comment-icon .path,
			.post-navigation-fixed .nav-links a:hover .meta-nav .arrow-icon .circle', 'fill', 'bg', 3 ),

	/* Comments link stroke, bg contrast */

	array( '.comments-link:hover .comment-icon .path,
			.post-navigation-fixed .nav-links a:hover .meta-nav .arrow-icon .circle,
			.flex-direction-nav a:hover .meta-nav .arrow', 'stroke', 'bg', 3 ),

), __( 'Link Color', 'altofocus' ) );



/**
 * LIGHT GREY --------------------
 */

add_color_rule( 'link', '#888888', array(

), __( 'Category Color 1', 'altofocus' ) );



/**
 * LIGHT GRAY --------------------
 */

add_color_rule( 'fg1', '#888888', array(

), __( 'Category Color 1', 'altofocus' ) );



/**
 * LIGHT GRAY --------------------
 */

add_color_rule( 'extra', '#888888', array(

	/* Text color, contrast bg */

	array( '#respond p[class^="comment-form"] label,
			#secondary .widget-grofile .grofile-meta h4,
			#secondary .widget_calendar caption,
			#secondary .widget_search .screen-reader-text,
			.hfeed .page-header .page-title,
			.hfeed .page-header .taxonomy-description,
			.byline,
			.comment-body .comment-metadata a,
			.comment-body .fn,
			.comment-navigation .screen-reader-text,
			.comment-reply-title,
			.comment-respond p[class^="comment-form"] label,
			.comments-title,
			.highlander-enabled #respond label,
			.highlander-enabled #respond form label,
			.entry-footer,
			.hentry .entry-content > #jp-post-flair .jp-relatedposts-headline,
			.hentry .entry-content > #jp-post-flair .sd-title,
			.hentry .entry-content > .sd-sharing-enabled .jp-relatedposts-headline,
			.hentry .entry-content > .sd-sharing-enabled .sd-title,
			.post-navigation .screen-reader-text,
			.posted-on,
			.posts-navigation .screen-reader-text,
			.widget-title,
			cite', 'color', 'bg', 3 ),

), __( 'Hover Color', 'altofocus' ) );



/**
 * DARK GRAY --------------------
 */

add_color_rule( 'extra', '#111111', array(

	/* Text color, contrast bg */

	array( '#infinite-handle span button,
			.hfeed .page-header .page-title,
			.comment-body .fn,
			.comments-link a,
			.dropdown-toggle,
			.dropdown-toggle:after,
			.flex-direction-nav a .meta-nav:before,
			#content .comment-navigation .meta-nav,
			#content .post-navigation .meta-nav,
			#content .posts-navigation .meta-nav,
			body,
			button,
			.menu-toggle,
			#page a.button,
			input,
			input[type="button"],
			input[type="reset"],
			input[type="submit"],
			select,
			textarea', 'color', 'bg', 5 ),

	/* Border-color, transparent */

	array( '#infinite-handle span button,
			button,
			#page a.button,
			input[type="button"],
			input[type="reset"],
			input[type="submit"]', 'border-color', 0.2 ),

	/* Stroke color, transparent */

	array( '.comments-link .comment-icon .path,
			.post-navigation-fixed .nav-links a .meta-nav .arrow-icon .circle', 'stroke', 0.2 ),

	/* Stroke color, contrast bg */

	array( '.dropdown-toggle .meta-nav .dropdown-icon .line,
			.menu-toggle .meta-nav .menu-icon .line,
			.post-navigation-fixed .nav-links a .meta-nav .arrow-icon .arrow,
			.flex-direction-nav a .meta-nav .arrow-icon .arrow', 'stroke', 'bg', 5 ),

	/* Border-color, .5 opacity */

	array( '#secondary #flickr_badge_wrapper,
			.hfeed #main .hentry .entry-header,
			.hfeed #main .hentry:not(.has-post-thumbnail) .entry-header,
			.hfeed #main .hentry.grid-item-featured:not(.has-post-thumbnail) .entry-header', 'border-color', 'bg', 5 ),

	array( '.home .content-area,
			.blog .content-area,
			.hfeed .content-area,
			table,
			.top-navigation .sub-menu:before,
			.top-navigation .children:before,
			.top-navigation > div > ul,
			.comment-navigation,
			.posts-navigation,
			.post-navigation,
			.single .hentry:not(.has-post-thumbnail):before,
			.page .hentry.page:before,
			.comments-area,
			.no-comments,
			.comment-body,
			.pingback .comment-body,
			.trackback .comment-body,
			.page .site-content .comments-area:before,
			.single .comment-list,
			#respond,
			.comment-respond,
			.widget,
			.highlander-enabled #respond,
			#secondary,
			.site-footer', 'border-top-color', 'bg', 5 ),

	array( '.hfeed .hentry:before,
			table th,
			table td,
			.top-navigation li:after,
			.site-content', 'border-bottom-color', 'bg', 5 ),

	array( '.dropdown-toggle,
			.dropdown-toggle:active,
			.dropdown-toggle:focus', 'border-color', 0.2 ),

) );



/**
 * MEDIUM GRAY --------------------
 */

add_color_rule( 'extra', '#cccccc', array(

	/* Background color, contrast bg */

	array( 'hr', 'background-color', 'bg', 3 ),

	/* Background color, .5 opacity */

	array( '.flex-control-paging li a', 'background-color', 0.5 ),

	/* Text color, contrast bg */

	array( '.comment-navigation .meta-nav,
			.post-navigation .meta-nav,
			.posts-navigation .meta-nav', 'color', 'bg', 3 ),

	/* Border-color, contrast bg */

	array( '.hentry .entry-content > #jp-post-flair div#jp-relatedposts div.jp-relatedposts-items-visual .jp-relatedposts-post img.jp-relatedposts-post-img,
			.hentry .entry-content > #jp-post-flair div#jp-relatedposts div.jp-relatedposts-items-visual .jp-relatedposts-post span,
			.hentry .entry-content > .sd-sharing-enabled div#jp-relatedposts div.jp-relatedposts-items-visual .jp-relatedposts-post img.jp-relatedposts-post-img,
			.hentry .entry-content > .sd-sharing-enabled div#jp-relatedposts div.jp-relatedposts-items-visual .jp-relatedposts-post span,
			input[type="color"],
			input[type="date"],
			input[type="datetime"],
			input[type="datetime-local"],
			input[type="email"],
			input[type="month"],
			input[type="number"],
			input[type="password"],
			input[type="range"],
			input[type="search"],
			input[type="tel"],
			input[type="text"],
			input[type="time"],
			input[type="url"],
			input[type="week"],
			select,
			textarea', 'border-color', 'bg', 3 ),

) );



/**
 * EXTRA CSS --------------------
 */

function altofocus_extra_css() {

	$colors_array = get_theme_mod( 'colors_manager' );
	$bg           = $colors_array['colors']['bg'];     // White
	$link         = $colors_array['colors']['txt'];   // Orange
	$extra        = $colors_array['colors']['extra'];  // Light Gray

	/**
	 * WHITE --------------------
	 */
	?>

	@media screen and (max-width: 37.5em) {

		/* background-color */

		.hfeed #main .hentry.grid-item-featured .entry-header-wrap,
		.hfeed #main .hentry.grid-item-featured .entry-header-wrap .posted-on,
		.hfeed #main .hentry.grid-item-featured .edit-link a {

			color: <?php echo $bg; ?>;
		}
	}

	@media screen and (min-width: 37.5em) {

		/* border-top-color */

		.top-navigation .children > li.toggled-on,
		.top-navigation .sub-menu > li.toggled-on,
		.top-navigation div > ul > li > .children,
		.top-navigation div > ul > li > .sub-menu {
			border-top-color: <?php echo $bg; ?>;
		}

		/* border-bottom-color */

		.top-navigation .children .children,
		.top-navigation .children .sub-menu,
		.top-navigation .sub-menu .children,
		.top-navigation .sub-menu .sub-menu {
			border-bottom-color: <?php echo $bg; ?>;
		}
	}

	<?php
	/**
	 * ORANGE --------------------
	 */
	?>

	@media screen and (max-width: 37.5em) {

		/* background-color */

		.hfeed .hentry.grid-item-featured {
			background-color: <?php echo $link; ?>;
		}

		#masthead .top-navigation div > ul li a {
			color: <?php echo $link; ?>;
		}
	}

	@media screen and (min-width: 37.5em) {

		/* background-color */

		.top-navigation .children,
		.top-navigation .sub-menu,
		.top-navigation div > ul li.toggled-on {
			background-color: <?php echo $link; ?>;
		}
	}
	<?php
}
add_theme_support( 'custom_colors_extra_css', 'altofocus_extra_css' );

/**
 * Additional color palettes
 */
add_color_palette( array(
	'#f0eeec',
	'#325cb8'
), __( 'Beige on Blue', 'altofocus' ) );

add_color_palette( array(
	'#ffffff',
	'#000000'
), __( 'Black on White', 'altofocus' ) );

add_color_palette( array(
	'#000000',
	'#c44d58'
), __( 'Red on Black', 'altofocus' ) );

add_color_palette( array(
	'#cecece',
	'#22a961'
), __( 'Purple on Tan', 'altofocus' ) );

add_color_palette( array(
	'#1c3c59',
	'#ecaa91'
), __( 'Salmon on Navy Blue', 'altofocus' ) );

add_color_palette( array(
	'#ffe5b2',
	'#b11623'
), __( 'Burgundy on Banana', 'altofocus' ) );
