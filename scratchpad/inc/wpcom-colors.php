<?php
/* Custom Colors: Scratchpad */

//Background
add_color_rule( 'bg', '#bdcbcc', array(
	array( 'body', 'background-color', '#ffffff', 3 ),

	// Colour - contrast against background
	array( '#masthead .site-description,
		body:not(.single) .format-audio .entry-title a,
		body:not(.single) .format-gallery .entry-title a,
		body:not(.single) .format-image .entry-title a,
		body:not(.single) .format-quote .entry-title a,
		body:not(.single) .format-video .entry-title a,
		.post-navigation-container a,
		.post-navigation-container a:hover,
		.page-header p,
		.error404 .page-content > p,
		.search-no-results .page-content > p,
		body:not(.single) .format-audio.post-password-required,
		body:not(.single) .format-audio .post-password-form label,
		body:not(.single) .format-gallery.post-password-required,
		body:not(.single) .format-gallery .post-password-form label,
		body:not(.single) .format-image.post-password-required,
		body:not(.single) .format-image .post-password-form label,
		body:not(.single) .format-video.post-password-required,
		body:not(.single) .format-video .post-password-form label,
		body:not(.single) .format-audio .post-password-form input[type="submit"],
		body:not(.single) .format-gallery .post-password-form input[type="submit"],
		body:not(.single) .format-image .post-password-form input[type="submit"],
		body:not(.single) .format-video .post-password-form input[type="submit"],
		body:not(.single) .format-audio .post-password-form input[type="submit"]:hover,
		body:not(.single) .format-audio .post-password-form input[type="submit"]:focus,
		body:not(.single) .format-gallery .post-password-form input[type="submit"]:hover,
		body:not(.single) .format-gallery .post-password-form input[type="submit"]:focus,
		body:not(.single) .format-image .post-password-form input[type="submit"]:hover,
		body:not(.single) .format-image .post-password-form input[type="submit"]:focus,
		body:not(.single) .format-video .post-password-form input[type="submit"]:hover,
		body:not(.single) .format-video .post-password-form input[type="submit"]:focus', 'color', 'bg', 5 ),

	array( 'body:not(.single) .format-audio .entry-meta,
		body:not(.single) .format-audio .entry-meta a,
		body:not(.single) .format-gallery .entry-meta,
		body:not(.single) .format-gallery .entry-meta a,
		body:not(.single) .format-image .entry-meta,
		body:not(.single) .format-image .entry-meta a,
		body:not(.single) .format-quote .entry-meta,
		body:not(.single) .format-quote .entry-meta a,
		body:not(.single) .format-video .entry-meta,
		body:not(.single) .format-video .entry-meta a,
		#colophon .site-info,
		#colophon .site-info a,
		#infinite-handle span button,
		#infinite-handle span button:hover,
		#infinite-handle span button:focus,
		.post-navigation-container .post-navigation-header,
		.posts-navigation .nav-previous a,
		.posts-navigation .nav-next a', 'color', 'bg', 3 ),

	array( 'body:not(.single) .format-audio .post-password-form input[type="submit"],
		body:not(.single) .format-gallery .post-password-form input[type="submit"],
		body:not(.single) .format-image .post-password-form input[type="submit"],
		body:not(.single) .format-video .post-password-form input[type="submit"],
		body:not(.single) .format-audio .post-password-form input[type="submit"]:hover,
		body:not(.single) .format-audio .post-password-form input[type="submit"]:focus,
		body:not(.single) .format-gallery .post-password-form input[type="submit"]:hover,
		body:not(.single) .format-gallery .post-password-form input[type="submit"]:focus,
		body:not(.single) .format-image .post-password-form input[type="submit"]:hover,
		body:not(.single) .format-image .post-password-form input[type="submit"]:focus,
		body:not(.single) .format-video .post-password-form input[type="submit"]:hover,
		body:not(.single) .format-video .post-password-form input[type="submit"]:focus', 'border-color', 'bg', 5 ),

	array( '.single #primary .author-info', 'background-color', 0.1 ),

	// Background colour - contrast against background
	array( '.main-navigation ul ul a', 'background-color', 'bg', 2 ),

	array( '.main-navigation ul ul a:hover', 'background-color', 'bg', 3 ),

	array( 'body:not(.single) .format-aside,
		.widget:nth-of-type(4n+2)', 'background-color', 'bg', 4 ),

	array( '.binderclip0,
		.line0,
		.stamp1', 'fill', 'bg', 3 ),

	// Background - slight opacity
	array( '.page-links a', 'background-color', 0.2 ),

	array( '.page-links a:hover', 'background-color', 0.1 ),

	// Border - contrast against background
	array( '#infinite-handle span button,
		#infinite-handle span button:hover,
		#infinite-handle span button:focus,
		.posts-navigation .nav-previous a,
		.posts-navigation .nav-next a', 'border-color', 'bg', 3 ),

	// Border Color - contrast against white - top triangle
	array( '.main-navigation ul ul:before', 'border-bottom-color', 'bg', 2 ),
	array('.main-navigation ul ul ul:before', 'border-right-color', 'bg', 2 ),
	array('.rtl .main-navigation ul ul ul:before', 'border-left-color', 'bg', 2 ),

	// Color; already contrasts against this colour
	array( 'body:not(.single) .format-aside .entry-header .entry-title a,
		.widget:nth-of-type(4n+2),
		.widget:nth-of-type(4n+2) a,
		.widget:nth-of-type(4n+2) #flickr_badge_uber_wrapper a:hover,
		.widget:nth-of-type(4n+2) #flickr_badge_uber_wrapper a:link,
		.widget:nth-of-type(4n+2) #flickr_badge_uber_wrapper a:active,
		.widget:nth-of-type(4n+2) #flickr_badge_uber_wrapper a:visited,
		.widget:nth-of-type(4n+2).widget_goodreads div[class^="gr_custom_author"],
		.widget:nth-of-type(4n+2) button,
		.widget:nth-of-type(4n+2) input[type="button"],
		.widget:nth-of-type(4n+2) input[type="reset"],
		.widget:nth-of-type(4n+2) input[type="submit"],
		.widget:nth-of-type(4n+2) button:hover,
		.widget:nth-of-type(4n+2) input[type="button"]:hover,
		.widget:nth-of-type(4n+2) input[type="reset"]:hover,
		.widget:nth-of-type(4n+2) input[type="submit"]:hover,
		.widget:nth-of-type(4n+2) button:focus,
		.widget:nth-of-type(4n+2) input[type="button"]:focus,
		.widget:nth-of-type(4n+2) input[type="reset"]:focus,
		.widget:nth-of-type(4n+2) input[type="submit"]:focus,
		.widget:nth-of-type(4n+2) .wp-caption,
		.widget:nth-of-type(4n+2) .wp-caption-text,
		.widget:nth-of-type(4n+2) .widget_rss .rss-date,
		body:not(.single) .format-aside,
		body:not(.single) .format-aside a', 'color' ),

	array( 'body:not(.single) .format-aside .entry-content,
		body:not(.single) .format-aside input[type="submit"],
		body:not(.single) .format-aside input[type="submit"]:hover,
		body:not(.single) .format-aside input[type="submit"]:focus,
		body:not(.single) .format-aside .post-password-form label', 'color', 0.8 ),

	array( 'body:not(.single) .format-aside input[type="submit"],
		body:not(.single) .format-aside input[type="submit"]:hover,
		body:not(.single) .format-aside input[type="submit"]:focus', 'border-color', 0.8 ),

	array( 'body:not(.single) .format-aside .entry-meta,
		body:not(.single) .format-aside .entry-meta .entry-meta,
		body:not(.single) .format-aside .entry-meta a', 'color', 0.6 ),

	// Border Colour; bg already contrasts against this colour
	array('.widget:nth-of-type(4n+2).widget_archive > ul,
		.widget:nth-of-type(4n+2).widget_archive li,
		.widget:nth-of-type(4n+2).widget_categories > ul,
		.widget:nth-of-type(4n+2).widget_categories li,
		.widget:nth-of-type(4n+2).widget_jp_blogs_i_follow > ol,
		.widget:nth-of-type(4n+2).widget_jp_blogs_i_follow li,
		.widget:nth-of-type(4n+2).widget_jetpack_posts_i_like > ul,
		.widget:nth-of-type(4n+2).widget_jetpack_posts_i_like li,
		.widget:nth-of-type(4n+2).widget_links > ul,
		.widget:nth-of-type(4n+2).widget_links li,
		.widget:nth-of-type(4n+2).widget_meta > ul,
		.widget:nth-of-type(4n+2).widget_meta li,
		.widget:nth-of-type(4n+2).widget_nav_menu > ul,
		.widget:nth-of-type(4n+2).widget_nav_menu li,
		.widget:nth-of-type(4n+2).widget_pages > ul,
		.widget:nth-of-type(4n+2).widget_pages li,
		.widget:nth-of-type(4n+2).widget_recent_entries > ul,
		.widget:nth-of-type(4n+2).widget_recent_entries li,
		.widget:nth-of-type(4n+2).widget_recent_comments > ul,
		.widget:nth-of-type(4n+2).widget_recent_comments li,
		.widget:nth-of-type(4n+2).widget_rss > ul,
		.widget:nth-of-type(4n+2).widget_rss li,
		.widget:nth-of-type(4n+2).widget_rss_links > ul,
		.widget:nth-of-type(4n+2).widget_rss_links li,
		.widget:nth-of-type(4n+2).widget_top-clicks > ul,
		.widget:nth-of-type(4n+2).widget_top-clicks li,
		.widget:nth-of-type(4n+2).widget_top-posts > ul,
		.widget:nth-of-type(4n+2).widget_top-posts li,
		.widget:nth-of-type(4n+2).widget.top_rated #top_posts,
		.widget:nth-of-type(4n+2).widget.top_rated li,
		.widget:nth-of-type(4n+2) table,
		.widget:nth-of-type(4n+2) table td,
		.widget:nth-of-type(4n+2) table th,
		.widget:nth-of-type(4n+2).widget_goodreads div[class^="gr_custom_each_container"],
		.widget:nth-of-type(4n+2).widget_goodreads div[class^="gr_custom_container"],
		.widget:nth-of-type(4n+2) button,
		.widget:nth-of-type(4n+2) input[type="button"],
		.widget:nth-of-type(4n+2) input[type="reset"],
		.widget:nth-of-type(4n+2) input[type="submit"],
		.widget:nth-of-type(4n+2) button:hover,
		.widget:nth-of-type(4n+2) input[type="button"]:hover,
		.widget:nth-of-type(4n+2) input[type="reset"]:hover,
		.widget:nth-of-type(4n+2) input[type="submit"]:hover,
		.widget:nth-of-type(4n+2) button:focus,
		.widget:nth-of-type(4n+2) input[type="button"]:focus,
		.widget:nth-of-type(4n+2) input[type="reset"]:focus,
		.widget:nth-of-type(4n+2) input[type="submit"]:focus,
		.widget:nth-of-type(4n+2) .wp-caption,
		.widget:nth-of-type(4n+2) .wp-caption-text,
		.widget:nth-of-type(4n+2).widget_calendar tbody td a:after', 'border-color' ),

	// Colour - contrast against white
	array( 'a,
		a:hover,
		a:focus,
		a:active,
		.single #primary .author-link:hover,
		.page-links,
		.page-links span,
		.page-header .page-title,
		.page .edit-link a', 'color', '#ffffff', 5 ),

	array( '.main-navigation a,
		.single #primary article.post .tags-links a,
		.single #primary article.jetpack-portfolio .tags-links a,
		.single #primary article.attachment .tags-links a,
		.single #primary .author-link', 'color', '#ffffff', 3 ),

	// Border colour - contrast against white
	array( '.page-header .page-title:before,
		.page-header .page-title:after', 'border-color', '#ffffff', 2 ),

),
__( 'Color 1' ) );

// Blue
add_color_rule( 'txt', '#2a44b6', array(
	// Colour
	array( 'body:not(.single) .format-status,
		.widget:nth-of-type(4n+1),
		.widget:nth-of-type(4n+1) a,
		.widget:nth-of-type(4n+1) #flickr_badge_uber_wrapper a:hover,
		.widget:nth-of-type(4n+1) #flickr_badge_uber_wrapper a:link,
		.widget:nth-of-type(4n+1) #flickr_badge_uber_wrapper a:active,
		.widget:nth-of-type(4n+1) #flickr_badge_uber_wrapper a:visited,
		.widget:nth-of-type(4n+1).widget_goodreads div[class^="gr_custom_author"],
		.widget:nth-of-type(4n+1) button,
		.widget:nth-of-type(4n+1) input[type="button"],
		.widget:nth-of-type(4n+1) input[type="reset"],
		.widget:nth-of-type(4n+1) input[type="submit"],
		.widget:nth-of-type(4n+1) button:hover,
		.widget:nth-of-type(4n+1) input[type="button"]:hover,
		.widget:nth-of-type(4n+1) input[type="reset"]:hover,
		.widget:nth-of-type(4n+1) input[type="submit"]:hover,
		.widget:nth-of-type(4n+1) button:focus,
		.widget:nth-of-type(4n+1) input[type="button"]:focus,
		.widget:nth-of-type(4n+1) input[type="reset"]:focus,
		.widget:nth-of-type(4n+1) input[type="submit"]:focus,
		.widget:nth-of-type(4n+1) .wp-caption,
		.widget:nth-of-type(4n+1) .wp-caption-text,
		.widget:nth-of-type(4n+1) .widget_rss .rss-date', 'color', '#ffffff', 4 ),

	array( 'body:not(.single) .format-status .entry-meta,
		body:not(.single) .format-status .entry-meta a', 'color', '#ffffff', 3 ),

	// Border Colour
	array( '.widget:nth-of-type(4n+1) button,
		.widget:nth-of-type(4n+1) input[type="button"],
		.widget:nth-of-type(4n+1) input[type="reset"],
		.widget:nth-of-type(4n+1) input[type="submit"],
		.widget:nth-of-type(4n+1) button:hover,
		.widget:nth-of-type(4n+1) input[type="button"]:hover,
		.widget:nth-of-type(4n+1) input[type="reset"]:hover,
		.widget:nth-of-type(4n+1) input[type="submit"]:hover,
		.widget:nth-of-type(4n+1) button:focus,
		.widget:nth-of-type(4n+1) input[type="button"]:focus,
		.widget:nth-of-type(4n+1) input[type="reset"]:focus,
		.widget:nth-of-type(4n+1) input[type="submit"]:focus,
		.widget:nth-of-type(4n+1) .wp-caption,
		.widget:nth-of-type(4n+1) .wp-caption-text,
		.widget:nth-of-type(4n+1).widget_calendar tbody td a:after', 'border-color', '#ffffff', 2 ),

	// Fill
	array( '.pen0', 'fill', '#ffffff', 3 ),
),
__( 'Color 2' ) );

// Orange
add_color_rule( 'link', '#d16221', array(
	// Background colour - contrast against white
	array( 'article .mejs-container.mejs-audio', 'background-color', '#ffffff', 3 ),

	// Background color - contrast against link
	array( 'article .mejs-controls .mejs-time-rail .mejs-time-total,
		article .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total', 'background-color', 'link', 4 ),

	array( 'article .mejs-audio .mejs-controls .mejs-time-rail .mejs-time-loaded,
		article .mejs-audio .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current', 'background-color', 'link', 3 ),

	// Colour - contrast against white
	array( '.cat-links a,
		body:not(.single) .hentry .more-link:hover,
		body:not(.single) .format-link .entry-header a,
		.single #primary article.post .tags-links .tags-header,
		.single #primary article.jetpack-portfolio .tags-links .tags-header,
		.single #primary article.attachment .tags-links .tags-header,
		.page #primary article.page .tags-links .tags-header', 'color', '#ffffff' ),

	// Border colour
	array( '.page-header .page-title,
		.widget_calendar tbody td a:hover:after', 'border-color' ),

	array( '.page-links span:after', 'border-color', '#ffffff', 2 ),

	// Fill
	array( '.pencil0,
		.movie-ticket0', 'fill', '#ffffff' ),

),
__( 'Color 3' ) );

// Light yellow
add_color_rule( 'fg1', '#efe8be', array(
	// Background-color
	array( 'body:not(.single) .format-quote .entry-content,
		.widget:nth-of-type(4n+3)', 'background-color' ),

	// Color - contrast against this colour
	array( 'body:not(.single) .format-quote .entry-content', 'color', 'fg1', 4 ),

	array( '.widget:nth-of-type(4n+3),
		.widget:nth-of-type(4n+3) a,
		.widget:nth-of-type(4n+3) #flickr_badge_uber_wrapper a:hover,
		.widget:nth-of-type(4n+3) #flickr_badge_uber_wrapper a:link,
		.widget:nth-of-type(4n+3) #flickr_badge_uber_wrapper a:active,
		.widget:nth-of-type(4n+3) #flickr_badge_uber_wrapper a:visited,
		.widget:nth-of-type(4n+3).widget_goodreads div[class^="gr_custom_author"],
		.widget:nth-of-type(4n+3) button,
		.widget:nth-of-type(4n+3) input[type="button"],
		.widget:nth-of-type(4n+3) input[type="reset"],
		.widget:nth-of-type(4n+3) input[type="submit"],
		.widget:nth-of-type(4n+3) button:hover,
		.widget:nth-of-type(4n+3) input[type="button"]:hover,
		.widget:nth-of-type(4n+3) input[type="reset"]:hover,
		.widget:nth-of-type(4n+3) input[type="submit"]:hover,
		.widget:nth-of-type(4n+3) button:focus,
		.widget:nth-of-type(4n+3) input[type="button"]:focus,
		.widget:nth-of-type(4n+3) input[type="reset"]:focus,
		.widget:nth-of-type(4n+3) input[type="submit"]:focus,
		.widget:nth-of-type(4n+3) .wp-caption,
		.widget:nth-of-type(4n+3) .wp-caption-text,
		.widget:nth-of-type(4n+3) .widget_rss .rss-date', 'color', 'fg1', 6 ),

	array( 'body:not(.single) .format-quote .entry-content .quote', 'fill', 'fg1', 2),

	// Border colour - contrast against this colour
	array( '.widget:nth-of-type(4n+3) button,
		.widget:nth-of-type(4n+3) input[type="button"],
		.widget:nth-of-type(4n+3) input[type="reset"],
		.widget:nth-of-type(4n+3) input[type="submit"],
		.widget:nth-of-type(4n+3) button:hover,
		.widget:nth-of-type(4n+3) input[type="button"]:hover,
		.widget:nth-of-type(4n+3) input[type="reset"]:hover,
		.widget:nth-of-type(4n+3) input[type="submit"]:hover,
		.widget:nth-of-type(4n+3) button:focus,
		.widget:nth-of-type(4n+3) input[type="button"]:focus,
		.widget:nth-of-type(4n+3) input[type="reset"]:focus,
		.widget:nth-of-type(4n+3) input[type="submit"]:focus,
		.widget:nth-of-type(4n+3) .wp-caption,
		.widget:nth-of-type(4n+3) .wp-caption-text,
		.widget:nth-of-type(4n+3).widget_calendar tbody td a:after', 'border-color', 'fg1', 2 ),
),
__( 'Color 4' ) );

// Bright Blue
add_color_rule( 'fg2', '#2590ec', array(
	// Background color
	array( '.widget:nth-of-type(4n+4)', 'background-color' ),

	// Background color - contrast against while
	array( '.entry-content .jetpack-recipe-title', 'background-color', '#ffffff', 3 ),

	// Color - contrast against this color
	array( '.widget:nth-of-type(4n+4),
		.widget:nth-of-type(4n+4) a,
		.widget:nth-of-type(4n+4) #flickr_badge_uber_wrapper a:hover,
		.widget:nth-of-type(4n+4) #flickr_badge_uber_wrapper a:link,
		.widget:nth-of-type(4n+4) #flickr_badge_uber_wrapper a:active,
		.widget:nth-of-type(4n+4) #flickr_badge_uber_wrapper a:visited,
		.widget:nth-of-type(4n+4).widget_goodreads div[class^="gr_custom_author"],
		.widget:nth-of-type(4n+4) button,
		.widget:nth-of-type(4n+4) input[type="button"],
		.widget:nth-of-type(4n+4) input[type="reset"],
		.widget:nth-of-type(4n+4) input[type="submit"],
		.widget:nth-of-type(4n+4) button:hover,
		.widget:nth-of-type(4n+4) input[type="button"]:hover,
		.widget:nth-of-type(4n+4) input[type="reset"]:hover,
		.widget:nth-of-type(4n+4) input[type="submit"]:hover,
		.widget:nth-of-type(4n+4) button:focus,
		.widget:nth-of-type(4n+4) input[type="button"]:focus,
		.widget:nth-of-type(4n+4) input[type="reset"]:focus,
		.widget:nth-of-type(4n+4) input[type="submit"]:focus,
		.widget:nth-of-type(4n+4) .wp-caption,
		.widget:nth-of-type(4n+4) .wp-caption-text,
		.widget:nth-of-type(4n+4) .widget_rss .rss-date', 'color', 'fg2', 6 ),

	// Border colour - contrast against this colour
	array( '.widget:nth-of-type(4n+4).widget_archive > ul,
		.widget:nth-of-type(4n+4).widget_archive li,
		.widget:nth-of-type(4n+4).widget_categories > ul,
		.widget:nth-of-type(4n+4).widget_categories li,
		.widget:nth-of-type(4n+4).widget_jp_blogs_i_follow > ol,
		.widget:nth-of-type(4n+4).widget_jp_blogs_i_follow li,
		.widget:nth-of-type(4n+4).widget_jetpack_posts_i_like > ul,
		.widget:nth-of-type(4n+4).widget_jetpack_posts_i_like li,
		.widget:nth-of-type(4n+4).widget_links > ul,
		.widget:nth-of-type(4n+4).widget_links li,
		.widget:nth-of-type(4n+4).widget_meta > ul,
		.widget:nth-of-type(4n+4).widget_meta li,
		.widget:nth-of-type(4n+4).widget_nav_menu > ul,
		.widget:nth-of-type(4n+4).widget_nav_menu li,
		.widget:nth-of-type(4n+4).widget_pages > ul,
		.widget:nth-of-type(4n+4).widget_pages li,
		.widget:nth-of-type(4n+4).widget_recent_entries > ul,
		.widget:nth-of-type(4n+4).widget_recent_entries li,
		.widget:nth-of-type(4n+4).widget_recent_comments > ul,
		.widget:nth-of-type(4n+4).widget_recent_comments li,
		.widget:nth-of-type(4n+4).widget_rss > ul,
		.widget:nth-of-type(4n+4).widget_rss li,
		.widget:nth-of-type(4n+4).widget_rss_links > ul,
		.widget:nth-of-type(4n+4).widget_rss_links li,
		.widget:nth-of-type(4n+4).widget_top-clicks > ul,
		.widget:nth-of-type(4n+4).widget_top-clicks li,
		.widget:nth-of-type(4n+4).widget_top-posts > ul,
		.widget:nth-of-type(4n+4).widget_top-posts li,
		.widget:nth-of-type(4n+4).widget.top_rated #top_posts,
		.widget:nth-of-type(4n+4).widget.top_rated li,
		.widget:nth-of-type(4n+4) table,
		.widget:nth-of-type(4n+4) table td,
		.widget:nth-of-type(4n+4) table th,
		.widget:nth-of-type(4n+4).widget_goodreads div[class^="gr_custom_each_container"],
		.widget:nth-of-type(4n+4).widget_goodreads div[class^="gr_custom_container"],
		.widget:nth-of-type(4n+4) button,
		.widget:nth-of-type(4n+4) input[type="button"],
		.widget:nth-of-type(4n+4) input[type="reset"],
		.widget:nth-of-type(4n+4) input[type="submit"],
		.widget:nth-of-type(4n+4) button:hover,
		.widget:nth-of-type(4n+4) input[type="button"]:hover,
		.widget:nth-of-type(4n+4) input[type="reset"]:hover,
		.widget:nth-of-type(4n+4) input[type="submit"]:hover,
		.widget:nth-of-type(4n+4) button:focus,
		.widget:nth-of-type(4n+4) input[type="button"]:focus,
		.widget:nth-of-type(4n+4) input[type="reset"]:focus,
		.widget:nth-of-type(4n+4) input[type="submit"]:focus,
		.widget:nth-of-type(4n+4) .wp-caption,
		.widget:nth-of-type(4n+4) .wp-caption-text,
		.widget:nth-of-type(4n+4).widget_calendar tbody td a:after', 'border-color', 'fg2', 2 ),

	// Border color - contrast against white
	array( '.entry-content .jetpack-recipe:before,
		.entry-content .jetpack-recipe .jetpack-recipe-content', 'border-color', '#ffffff', 2 ),

	// Fill
	array( '.grip-pencil0,
		.grip-pencil2', 'fill', 'bg', 3 ),
),
__( 'Color 5' ) );

add_color_rule( 'extra', '#ffffff', array(
	// Colour - contrast against bg
	array( '#masthead .site-title a', 'color', 'bg', 6 ),
),
'' );

add_color_rule( 'extra', '#444444', array(
	// Fill - contrast against bg
	// array( '.highlighter0', 'fill', 'bg', 2 ),
),
'' );

/* Extra CSS */
function scratchpad_extra_css() { ?>
	#page:before {
		background: -moz-radial-gradient(center, ellipse cover,  rgba(255,255,255,0.35) 0%, rgba(255,255,255,0) 50%, rgba(255,255,255,0) 100%); /* FF3.6-15 */
		background: -webkit-radial-gradient(center, ellipse cover,  rgba(255,255,255,0.35) 0%,rgba(255,255,255,0) 50%,rgba(255,255,255,0) 100%); /* Chrome10-25,Safari5.1-6 */
		background: radial-gradient(ellipse at center,  rgba(255,255,255,0.35) 0%,rgba(255,255,255,0) 50%,rgba(255,255,255,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#59ffffff', endColorstr='#00ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
	}

	/* Menu */
	.main-navigation ul ul a {
		border-color: rgba(255,255,255,0.3);
	}

	.main-navigation ul ul li:last-child a {
		border: 0;
	}

	/* Post background colours */
	body:not(.single) .format-standard,
	body:not(.single) .format-chat,
	.single #primary article.post,
	.single #primary article.jetpack-portfolio,
	.single #primary article.attachment,
	.page #primary article.page,
	.search .type-page {
		background-color: #fff;
	}

	/* Background patterns - grid */
	body:not(.single) .format-quote .entry-content,
	.widget:nth-of-type(4n+3) {
		background-image: linear-gradient(rgba(0,0,0,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(0,0,0,0.1) 1px, transparent 1px);
	}

	/* Background patterns - torn paper */
	body:not(.single) .format-status span.paper-top {
		background-image: linear-gradient(90deg, #<?php echo get_background_color(); ?> 7px, transparent 7px), radial-gradient(#<?php echo get_background_color(); ?> 8px, transparent 8px);
	}

	/* Underlines */
	.entry-header .entry-title a:hover,
	.post-navigation-container a:hover,
	.single #primary .author-description h2 a:hover {
		box-shadow: inset 0 -5px 0 0 rgba(0,0,0,0.1);;
	}

	/* Ruler */
	article .mejs-container.mejs-audio {
		background-image: linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.1) 1px, transparent 1px)
	}

	/* Pen */
	.pen1 {
		opacity: 0.6;
	}

	/* Stamp */
	.stamp2 {
		fill: rgba(255,255,255,0.5);
	}

	@media only screen and (max-width: 800px) {
		#masthead .main-navigation a,
		#masthead .main-navigation ul ul a {
			background-color: transparent;
			color: inherit;
		}

		#masthead .main-navigation a:hover,
		#masthead .main-navigation ul ul a:hover {
			color: #333;
		}
	}

<?php
}
add_theme_support( 'custom_colors_extra_css', 'scratchpad_extra_css' );

//Additional palettes
add_color_palette( array(
	'#4b596c',
	'#e97633',
	'#c44d58',
	'#e4b3b3',
	'#a6b4c8',
), 'Featured 1' );

add_color_palette( array(
	'#c44d58',
	'#537349',
	'#ced89d',
	'#dfba74',
	'#f1edd0'
), 'Featured 2' );

add_color_palette( array(
	'#c9d1d3',
	'#d2411c',
	'#4d8da1',
	'#504d4d',
	'#f2f2f2'
), 'Featured 3' );

add_color_palette( array(
	'#2790b0',
	'#4e4d4a',
	'#94ba65',
	'#98d1e6',
	'#dbe6ca'
), 'Featured 4' );

add_color_palette( array(
	'#793a57',
	'#cf1040',
	'#73a99d',
	'#e1c479',
	'#98d1e6'
), 'Featured 5' );
