<?php
/* Custom Colors: Toujours */

//Background
add_color_rule( 'bg', '#eeeeee', array(
	array( 'body', 'background-color' ),

	array( '#page', 'border-color', '-1' ),
) );

// Text
add_color_rule( 'txt', '#333333', array(
	// Colour - contrast against white
	array( '.main-navigation a,
		#featured-post-trio article h2 a,
		.entry-title a,
		.nav-links .nav-title,
		.menu-toggle', 'color', '#ffffff', 4 ),

	// Background Colour - contrast against white
	array( 'pre,
		.blog #primary .format-quote,
		.archive #primary .format-quote,
		.single #primary .format-quote,
		#footer-widgets,
		#colophon', 'background-color', '#ffffff', 2 ),
),
__( 'Navigation, Post Titles' ) );

// Feature Blue
add_color_rule( 'link', '#2590ec', array(

	// Colour - contrast against white
	array( 'a,
		.search-form.hover-button label:before,
		.main-navigation a:focus,
		.main-navigation a:hover,
		.widget #flickr_badge_uber_wrapper a:hover,
		.widget #flickr_badge_uber_wrapper a:link,
		.widget #flickr_badge_uber_wrapper a:active,
		.widget #flickr_badge_uber_wrapper a:visited,
		.site-title a,
		.slideshow .prev-slide:hover,
		.slideshow .next-slide:hover,
		#featured-post-trio article h2 a:hover,
		.entry-title a:hover,
		.blog #primary .format-aside .entry-title a:hover,
		.archive #primary .format-aside .entry-title a:hover,
		.blog #primary .format-audio .entry-title a:hover,
		.archive #primary .format-audio .entry-title a:hover,
		.blog #primary .format-image .entry-title a:hover,
		.archive #primary .format-image .entry-title a:hover,
		.blog #primary .format-link .entry-title a:hover,
		.archive #primary .format-image .entry-title a:hover,
		.comment-metadata .edit-link a,
		.reply a,
		.comment-navigation .nav-links a,
		.comment-respond #reply-title small,
		.error404 .widget_tag_cloud a:hover,
		#secondary .widget a:hover,
		#secondary .widget_tag_cloud a:hover,
		#secondary .wp_widget_tag_cloud a:hover', 'color', '#ffffff', 3 ),

	// Background colour - contrast against white
	array( 'button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		.featured-post,
		.page-links a:hover .page-links-num,
		.entry-audio .mejs-container,
		.entry-audio .mejs-container .mejs-controls,
		.entry-content .mejs-audio .mejs-controls .mejs-time-rail .mejs-time-current,
		.bypostauthor .avatar-container:before,
		#infinite-handle span button,
		.posts-navigation .nav-previous a,
		.posts-navigation .nav-next a', 'background-color', '#ffffff', 4 ),

	// Border colour - contrast against bg
	array( '.page-links a:hover .page-links-num', 'border-color', '#ffffff', 4 ),
),
__( 'Links in Content, Site Title' ) );

/* Extra CSS */
function toujours_extra_css() { ?>
	#footer-widgets, #colophon {
		color: rgba( 255, 255, 255, 0.7 );
	}

	#colophon .jetpack-social-navigation li a,
	#footer-widgets h3,
	#colophon h3 {
		color: rgba( 255, 255, 255, 0.8 );
	}

	#footer-widgets a,
	#colophon a,
	#footer-widgets .widget #flickr_badge_uber_wrapper a:link,
	#footer-widgets .widget #flickr_badge_uber_wrapper a:active,
	#footer-widgets .widget #flickr_badge_uber_wrapper a:visited {
		color: rgba( 255, 255, 255, 0.8);
	}

	#footer-widgets a:hover,
	#colophon a:hover,
	#footer-widgets .widget #flickr_badge_uber_wrapper a:hover {
		color: rgba( 255, 255, 255, 1.0 );
	}

	#footer-widgets .widget_archive > ul,
	#footer-widgets .widget_archive li,
	#footer-widgets .widget_authors ul ul li,
	#footer-widgets .widget_categories > ul,
	#footer-widgets .widget_categories li,
	#footer-widgets .widget_goodreads div[class^="gr_custom_each_container"],
	#footer-widgets .widget_goodreads div[class^="gr_custom_container"],
	#footer-widgets .widget_jp_blogs_i_follow > ol,
	#footer-widgets .widget_jp_blogs_i_follow li,
	#footer-widgets .widget_jetpack_posts_i_like > ul,
	#footer-widgets .widget_jetpack_posts_i_like li,
	#footer-widgets .widget_links > ul,
	#footer-widgets .widget_links li,
	#footer-widgets .widget_meta > ul,
	#footer-widgets .widget_meta li,
	#footer-widgets .widget_nav_menu > ul,
	#footer-widgets .widget_nav_menu li,
	#footer-widgets .widget_pages > ul,
	#footer-widgets .widget_pages li,
	#footer-widgets .widget_recent_comments > ul,
	#footer-widgets .widget_recent_comments li,
	#footer-widgets .widget_recent_entries > ul,
	#footer-widgets .widget_recent_entries li,
	#footer-widgets .widget_rss > ul,
	#footer-widgets .widget_rss li,
	#footer-widgets .widget_rss_links > ul,
	#footer-widgets .widget_rss_links li,
	#footer-widgets .widget.top_rated #top_posts,
	#footer-widgets .widget.top_rated li,
	#footer-widgets .widget_top-clicks > ul,
	#footer-widgets .widget_top-clicks li,
	#footer-widgets .widget_top-posts > ul,
	#footer-widgets .widget_top-posts li,
	#footer-widgets hr {
		border-color: rgba( 255, 255, 255, 0.3 );
	}

	#footer-widgets .wrap {
		border-color: rgba( 255, 255, 255, 0.2 );
	}

<?php
}
add_theme_support( 'custom_colors_extra_css', 'toujours_extra_css' );

//Additional palettes
add_color_palette( array(
	'#dddddd',
	'#222222',
	'#31bb8c',
), 'Featured 1' );

add_color_palette( array(
	'#f0f0f0',
	'#666666',
	'#dd5466',
), 'Featured 2' );

add_color_palette( array(
	'#a7c5c1',
	'#442d40',
	'#8e4883',
), 'Featured 3' );

add_color_palette( array(
	'#e0d9d1',
	'#333333',
	'#cf2424',
), 'Featured 4' );

add_color_palette( array(
	'#61475d',
	'#3c7683',
	'#31a7bb',
), 'Featured 5' );

add_color_palette( array(
	'#a8a7a7',
	'#61475d',
	'#e8175d',
), 'Featured 6' );
