<?php
add_color_rule( 'bg', '#ffffff', array(
	// Background - no contrast
	array( 'body,
		.site-content-contain,
		.navigation-top,
		.main-navigation ul,
		.main-navigation ul ul,
		#infinite-footer .container', 'background-color' ),

	// Background - slightly darker
	array( '.site-header,
		.single-featured-image-header', 'background-color', '-0.2' ),

	array( 'input[type="text"],
		input[type="email"],
		input[type="url"],
		input[type="password"],
		input[type="search"],
		input[type="number"],
		input[type="tel"],
		input[type="range"],
		input[type="date"],
		input[type="month"],
		input[type="week"],
		input[type="time"],
		input[type="datetime"],
		input[type="datetime-local"],
		input[type="color"],
		textarea,
		select,
		fieldset', 'background-color', '-0.3' ),

	/* Background - 2 contrast against bg */
	array( 'pre,
		mark,
		ins,
		button.secondary,
		input[type="reset"],
		input[type="button"].secondary,
		input[type="reset"].secondary,
		input[type="submit"].secondary,
		.prev.page-numbers,
		.next.page-numbers', 'background-color', 'bg', 2 ),

	// Background - 4 contrast against bg
	array( 'button.secondary:hover,
		button.secondary:focus,
		input[type="reset"]:hover,
		input[type="reset"]:focus,
		input[type="button"].secondary:hover,
		input[type="button"].secondary:focus,
		input[type="reset"].secondary:hover,
		input[type="reset"].secondary:focus,
		input[type="submit"].secondary:hover,
		input[type="submit"].secondary:focus,
		hr', 'background-color', 'bg', 4 ),

	// Border - 2 contrast against bg
	array( ' tr,
		 thead th,
		 .widget .tagcloud a,
		 .widget.widget_tag_cloud a,
		 .wp_widget_tag_cloud a,
		 .widget_goodreads div[class^="gr_custom_each_container"],
		 #infinite-footer .container', 'border-color', 'bg', 2 ),

	// Border bottom - 2 contrast against bg
	array( '.single-featured-image-header,
		.navigation-top,
		.main-navigation li,
		.entry-footer,
		#comments,
		.widget ul li', 'border-bottom-color', 'bg', 2 ),

	// Border top - 2 contrast against bg
	array( '.navigation-top,
		.main-navigation > div > ul,
		.pagination,
		.comment-navigation,
		.entry-footer,
		.site-footer,
		.twentyseventeen-front-page article:not(.has-post-thumbnail):not(:first-child),
		.widget ul li', 'border-top-color', 'bg', 2 ),

	// Border - 4 contrast against bg
	array( 'input[type="text"],
		input[type="email"],
		input[type="url"],
		input[type="password"],
		input[type="search"],
		input[type="number"],
		input[type="tel"],
		input[type="range"],
		input[type="date"],
		input[type="month"],
		input[type="week"],
		input[type="time"],
		input[type="datetime"],
		input[type="datetime-local"],
		input[type="color"],
		textarea,
		select,
		fieldset,
		.widget .tagcloud a:hover,
		.widget .tagcloud a:focus,
		.widget.widget_tag_cloud a:hover,
		.widget.widget_tag_cloud a:focus,
		.wp_widget_tag_cloud a:hover,
		.wp_widget_tag_cloud a:focus', 'border-color', 'bg', 4 ),

	// Border Color - bottom
	array( '.main-navigation ul li.menu-item-has-children:after,
		.main-navigation ul li.page_item_has_children:after', 'border-bottom-color' ),

	// Color - no contrast
	array( '.entry-content a img,
		.widget a img', 'color' ),

	// Color - contrast against link
	array( '.social-navigation a,
		.site .jetpack_widget_social_icons ul li a', 'color', 'link', 5 ),

	// Color - contrast against fg1
	array( '.social-navigation a:hover,
		.social-navigation a:focus,
		.site .jetpack_widget_social_icons ul li a:focus,
		.site .jetpack_widget_social_icons ul li a:hover', 'color', 'fg1', 5 ),

), __( 'Background' ) );


add_color_rule( 'txt', '#222222', array(
	/* Color - contrast against bg */
	array( 'body,
		input,
		select,
		textarea,
		h3,
		h4,
		h6,
		label,
		.entry-title a,
		.twentyseventeen-front-page .panel-content .recent-posts article,
		.entry-footer .cat-links a,
		.entry-footer .tags-links a,
		.format-quote blockquote,
		.nav-title,
		.comment-body,
		input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="password"]:focus,
		input[type="search"]:focus,
		input[type="number"]:focus,
		input[type="tel"]:focus,
		input[type="range"]:focus,
		input[type="date"]:focus,
		input[type="month"]:focus,
		input[type="week"]:focus,
		input[type="time"]:focus,
		input[type="datetime"]:focus,
		input[type="datetime-local"]:focus,
		input[type="color"]:focus,
		textarea:focus,
		button.secondary,
		input[type="reset"],
		input[type="button"].secondary,
		input[type="reset"].secondary,
		input[type="submit"].secondary,
		a,
		.site-title,
		.site-title a,
		.navigation-top a,
		.dropdown-toggle,
		.menu-toggle,
		.page .panel-content .entry-title,
		.page-title,
		body.page:not(.twentyseventeen-front-page) .entry-title,
		.page:not(.twentyseventeen-front-page) .entry-title,
		.page-links a .page-number,
		.comment-metadata a.comment-edit-link,
		.comment-reply-link .icon,
		h2.widget-title,
		mark,
		.post-navigation a:focus .icon,
		.post-navigation a:hover .icon,
		.blog .entry-meta a.post-edit-link,
		.archive .entry-meta a.post-edit-link,
		.search .entry-meta a.post-edit-link,
		.twentyseventeen-panel .recent-posts .entry-header .edit-link,
		.widget_goodreads div[class^="gr_custom_container"],
		.widget_goodreads div[class^="gr_custom_container"] a,
		div#jp-relatedposts .jp-relatedposts-post-title a,
		#infinite-footer .blog-info a,
		#infinite-footer .blog-credits,
		#infinite-footer .blog-credits a', 'color', 'bg', 5 ),

	array( '::-webkit-input-placeholder', 'color', 'bg', 10 ),
	array( ':-moz-placeholder', 'color', 'bg', 10 ),
	array( '::-moz-placeholder', 'color', 'bg', 10 ),
	array( ':-ms-input-placeholder', 'color', 'bg', 10 ),

	// Color - contrast against bg
	array( '.main-navigation li li:hover,
		.main-navigation li li.focus', 'color', 'bg' ),

	// Color - contrast against link
	array( '.main-navigation li li:hover > a,
		.main-navigation li li.focus > a', 'color', 'link' ),

	array( 'button:hover,
		button:focus,
		input[type="button"]:hover,
		input[type="button"]:focus,
		input[type="submit"]:hover,
		input[type="submit"]:focus,
		.site-main #infinite-handle span:hover,
		.site-main #infinite-handle span:focus,
		.site-main #infinite-handle span:hover button,
		.site-main #infinite-handle span:hover button:hover,
		.site-main #infinite-handle span:hover button:focus
		.site-main #infinite-handle span:focus button,
		.site-main #infinite-handle span:focus button:hover,
		.site-main #infinite-handle span:focus button:focus', 'color', 'link', 5 ),

	// Color - contrast against fg1
	array( '.entry-footer .edit-link a.post-edit-link,
		button,
		input[type="button"],
		input[type="submit"],
		.site-main #infinite-handle span,
		.site-main #infinite-handle span button', 'color', 'fg1', 5 ),

	/* Border Color - contrast against bg */
	array( 'input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="password"]:focus,
		input[type="search"]:focus,
		input[type="number"]:focus,
		input[type="tel"]:focus,
		input[type="range"]:focus,
		input[type="date"]:focus,
		input[type="month"]:focus,
		input[type="week"]:focus,
		input[type="time"]:focus,
		input[type="datetime"]:focus,
		input[type="datetime-local"]:focus,
		input[type="color"]:focus,
		textarea:focus,
		.bypostauthor > .comment-body > .comment-meta > .comment-author .avatar,
		div#jp-relatedposts h3.jp-relatedposts-headline em:before', 'border-color', 'bg', 3 ),
), __( 'Text' ) );


add_color_rule( 'link', '#767676', array(
	// Color - contrast against bg
	array( '.entry-footer .cat-links .icon,
		.entry-footer .tags-links .icon,
		h5,
		.main-navigation a:hover,
		.entry-meta,
		.entry-meta a,
		.nav-subtitle,
		.comment-metadata,
		.comment-metadata a,
		.no-comments,
		.comment-awaiting-moderation,
		.page-numbers.current,
		.page-links .page-number,
		.site-description,
		.site-header .navigation-top .menu-scroll-down,
		.widget_rss .rss-date,
		.widget_rss li cite', 'color', 'bg', 6 ),

	// Color - less contrast against bg
	array( 'h2,
		blockquote,
		input[type="text"],
		input[type="email"],
		input[type="url"],
		input[type="password"],
		input[type="search"],
		input[type="number"],
		input[type="tel"],
		input[type="range"],
		input[type="date"],
		input[type="month"],
		input[type="week"],
		input[type="time"],
		input[type="datetime"],
		input[type="datetime-local"],
		input[type="color"],
		textarea,
		.navigation-top .current-menu-item > a,
		.navigation-top .current_page_item > a,
		.entry-content blockquote.alignleft,
		.entry-content blockquote.alignright,
		.taxonomy-description,
		.site-info a,
		.wp-caption', 'color', 'bg', 4 ),

	// Background color
	array( 'button:hover,
		button:focus,
		input[type="button"]:hover,
		input[type="button"]:focus,
		input[type="submit"]:hover,
		input[type="submit"]:focus,
		.prev.page-numbers:focus,
		.prev.page-numbers:hover,
		.next.page-numbers:focus,
		.next.page-numbers:hover,
		.entry-footer .edit-link a.post-edit-link:focus,
		.entry-footer .edit-link a.post-edit-link:hover,
		.main-navigation li li:hover,
		.main-navigation li li.focus,
		.social-navigation a,
		.site .jetpack_widget_social_icons ul li a,
		.site-main #infinite-handle span:hover,
		.site-main #infinite-handle span:focus', 'background-color' ),

	// Border colour - slight contrast against bg
	array( '.main-navigation ul ul,
		abbr,
		acronym', 'border-color', 'bg', 2 ),

	array( '.main-navigation ul li.menu-item-has-children:before,
		.main-navigation ul li.page_item_has_children:before', 'border-bottom-color', 'bg', 3 ),
), __( 'Links' ) );


add_color_rule( 'fg1', '#000000', array(
	// Background color - no contrast
	array( 'button,
		input[type="button"],
		input[type="submit"],
		input[type="submit"],
		.entry-footer .edit-link a.post-edit-link,
		.social-navigation a:hover,
		.social-navigation a:focus,
		.site .jetpack_widget_social_icons ul li a:focus,
		.site .jetpack_widget_social_icons ul li a:hover,
		.site-main #infinite-handle span', 'background-color' ),

	// Color - contrast against bg
	array( 'a:hover,
		a:active,
		.entry-content a:focus,
		.entry-content a:hover,
		.entry-summary a:focus,
		.entry-summary a:hover,
		.widget a:focus,
		.widget a:hover,
		.site-footer .widget-area a:focus,
		.site-footer .widget-area a:hover,
		.posts-navigation a:focus,
		.posts-navigation a:hover,
		.comment-metadata a:focus,
		.comment-metadata a:hover,
		.comment-metadata a.comment-edit-link:focus,
		.comment-metadata a.comment-edit-link:hover,
		.comment-reply-link:focus,
		.comment-reply-link:hover,
		.widget_authors a:focus strong,
		.widget_authors a:hover strong,
		.entry-title a:focus,
		.entry-title a:hover,
		.entry-meta a:focus,
		.entry-meta a:hover,
		.colors-dark.blog .entry-meta a.post-edit-link:focus,
		.colors-dark.blog .entry-meta a.post-edit-link:hover,
		.colors-dark.archive .entry-meta a.post-edit-link:focus,
		.colors-dark.archive .entry-meta a.post-edit-link:hover,
		.colors-dark.search .entry-meta a.post-edit-link:focus,
		.colors-dark.search .entry-meta a.post-edit-link:hover,
		.page-links a:focus .page-number,
		.page-links a:hover .page-number,
		.entry-footer .cat-links a:focus,
		.entry-footer .cat-links a:hover,
		.entry-footer .tags-links a:focus,
		.entry-footer .tags-links a:hover,
		.post-navigation a:focus,
		.post-navigation a:hover,
		.pagination a:not(.prev):not(.next):focus,
		.pagination a:not(.prev):not(.next):hover,
		.comments-pagination a:not(.prev):not(.next):focus,
		.comments-pagination a:not(.prev):not(.next):hover,
		.logged-in-as a:focus,
		.logged-in-as a:hover,
		a:focus .nav-title,
		a:hover .nav-title,
		.edit-link a:focus,
		.edit-link a:hover,
		.site-info a:focus,
		.site-info a:hover,
		.widget .widget-title a:focus,
		.widget .widget-title a:hover,
		.widget ul li a:focus,
		.widget ul li a:hover', 'color', 'bg' ),
) );


// Additional CSS
function twentyseventeen_extra_css() { ?>

	.entry-content a img,
	.widget a img {
		-webkit-box-shadow: 0 0 0 8px #<?php echo get_background_color(); ?>;
		box-shadow: 0 0 0 8px #<?php echo get_background_color(); ?>;
	}

	.entry-title a,
	.entry-meta a,
	.blog .entry-meta a.post-edit-link,
	.archive .entry-meta a.post-edit-link,
	.search .entry-meta a.post-edit-link,
	.page-links a,
	.page-links a .page-number,
	.entry-footer a,
	.entry-footer .cat-links a,
	.entry-footer .tags-links a,
	.edit-link a,
	.post-navigation a,
	.logged-in-as a,
	.comment-navigation a,
	.comment-metadata a,
	.comment-metadata a.comment-edit-link,
	.comment-reply-link,
	a .nav-title,
	.pagination a,
	.comments-pagination a,
	.widget .widget-title a,
	.widget ul li a,
	.site-footer .widget-area ul li a,
	.site-info a,
	.widget_jetpack_display_posts_widget .jetpack-display-remote-posts h4 a,
	.site-footer .widget_jetpack_display_posts_widget .jetpack-display-remote-posts h4 a,
	div#jp-relatedposts .jp-relatedposts-post-title a {
		-webkit-box-shadow: inset 0 -1px 0 rgba( <?php echo twentyseventeen_hex2rgb( get_background_color() ); ?>, 1 );
		box-shadow: inset 0 -1px 0 rgba( <?php echo twentyseventeen_hex2rgb( get_background_color() ); ?>, 1 );
	}

	.entry-content a,
	.entry-summary a,
	.widget a,
	.site-footer .widget-area a,
	.posts-navigation a,
	.widget_authors a strong {
		-webkit-box-shadow: inset 0 -1px 0 currentColor;
		box-shadow: inset 0 -1px 0 currentColor;
	}

	.entry-content a:focus,
	.entry-content a:hover,
	.entry-summary a:focus,
	.entry-summary a:hover,
	.widget a:focus,
	.widget a:hover,
	.site-footer .widget-area a:focus,
	.site-footer .widget-area a:hover,
	.posts-navigation a:focus,
	.posts-navigation a:hover,
	.comment-metadata a:focus,
	.comment-metadata a:hover,
	.comment-metadata a.comment-edit-link:focus,
	.comment-metadata a.comment-edit-link:hover,
	.comment-reply-link:focus,
	.comment-reply-link:hover,
	.widget_authors a:focus strong,
	.widget_authors a:hover strong,
	.entry-title a:focus,
	.entry-title a:hover,
	.entry-meta a:focus,
	.entry-meta a:hover,
	.page-links a:focus .page-number,
	.page-links a:hover .page-number,
	.entry-footer a:focus,
	.entry-footer a:hover,
	.entry-footer .cat-links a:focus,
	.entry-footer .cat-links a:hover,
	.entry-footer .tags-links a:focus,
	.entry-footer .tags-links a:hover,
	.post-navigation a:focus,
	.post-navigation a:hover,
	.pagination a:not(.prev):not(.next):focus,
	.pagination a:not(.prev):not(.next):hover,
	.comments-pagination a:not(.prev):not(.next):focus,
	.comments-pagination a:not(.prev):not(.next):hover,
	.logged-in-as a:focus,
	.logged-in-as a:hover,
	a:focus .nav-title,
	a:hover .nav-title,
	.edit-link a:focus,
	.edit-link a:hover,
	.site-info a:focus,
	.site-info a:hover,
	.widget .widget-title a:focus,
	.widget .widget-title a:hover,
	.widget ul li a:focus,
	.widget ul li a:hover,
	.widget_jetpack_display_posts_widget .jetpack-display-remote-posts h4 a:hover,
	.widget_jetpack_display_posts_widget .jetpack-display-remote-posts h4 a:focus,
	.site-footer .widget_jetpack_display_posts_widget .jetpack-display-remote-posts h4 a:hover,
	.site-footer .widget_jetpack_display_posts_widget .jetpack-display-remote-posts h4 a:focus,
	div#jp-relatedposts .jp-relatedposts-post-title a:hover,
	div#jp-relatedposts .jp-relatedposts-post-title a:focus,
	div#jp-relatedposts .jp-relatedposts-post:hover .jp-relatedposts-post-title a,
	div#jp-relatedposts .jp-relatedposts-post:focus .jp-relatedposts-post-title a {
		-webkit-box-shadow: inset 0 0 0 rgba(0, 0, 0, 0), 0 3px 0 currentColor;
		box-shadow: inset 0 0 0 rgba(0, 0, 0, 0), 0 3px 0 currentColor;
	}

	.menu-toggle,
	.menu-toggle:hover,
	.menu-toggle:focus,
	.dropdown-toggle,
	.dropdown-toggle:hover,
	.dropdown-toggle:focus,
	.menu-scroll-down,
	.menu-scroll-down:hover,
	.menu-scroll-down:focus {
		background-color: transparent;
	}

	.gallery-item a,
	.gallery-item a:hover,
	.gallery-item a:focus,
	.widget .tagcloud a,
	.widget .tagcloud a:focus,
	.widget .tagcloud a:hover,
	.widget.widget_tag_cloud a,
	.widget.widget_tag_cloud a:focus,
	.widget.widget_tag_cloud a:hover,
	.wp_widget_tag_cloud a,
	.wp_widget_tag_cloud a:focus,
	.wp_widget_tag_cloud a:hover,
	.widget_authors > ul > li > a,
	.widget_authors > ul > li > a:hover,
	.widget_authors > ul > li > a:focus,
	.site-footer .widget_authors > ul > li > a,
	.site-footer .widget_authors > ul > li > a:hover,
	.site-footer .widget_authors > ul > li > a:focus,
	.entry-footer .edit-link a.post-edit-link:focus,
	.entry-footer .edit-link a.post-edit-link:hover,
	.tiled-gallery a,
	.tiled-gallery a:hover,
	.tiled-gallery a:focus,
	.widget-area .tiled-gallery a,
	.widget-area .tiled-gallery a:hover,
	.widget-area .tiled-gallery a:focus
	.site-footer .widget-area .tiled-gallery a,
	.site-footer .widget-area .tiled-gallery a:hover,
	.site-footer .widget-area .tiled-gallery a:focus,
	.widget_wpcom_social_media_icons_widget ul li a:hover,
	.widget_wpcom_social_media_icons_widget ul li a:focus,
	.widget_recent_images a,
	.site-footer .widget_recent_images a,
	.widget_recent_images a:hover,
	.site-footer .widget_recent_images a:hover,
	.widget_recent_images a:focus,
	.site-footer .widget_recent_images a:focus,
	.widget_google_translate_widget a,
	.site-footer .widget_google_translate_widget a,
	.widget_google_translate_widget a:hover,
	.site-footer .widget_google_translate_widget a:hover,
	.widget_google_translate_widget a:focus,
	.site-footer .widget_google_translate_widget a:focus,
	.widget_google_translate_widget a img,
	.site-footer .widget_google_translate_widget a img {
		-webkit-box-shadow: none;
		box-shadow: none;
	}

	@media screen and ( max-width: 47.9em ) {
		.wrap .main-navigation li li:hover,
		.wrap .main-navigation li li.focus {
			background: transparent;
		}

		.wrap .main-navigation li li:hover > a,
		.wrap .main-navigation li li.focus > a {
			color: inherit;
		}
	}
<?php
}
add_theme_support( 'custom_colors_extra_css', 'twentyseventeen_extra_css' );

// Free color palettes
add_color_palette( array(
	'#262626',
	'#dddddd',
	'#bbbbbb',
	'#ffffff',
) );

add_color_palette( array(
	'#2a323c',
	'#cfe1e2',
	'#4a868b',
	'#85ccd0'
) );

add_color_palette( array(
	'#5d5d69',
	'#c1c1c2',
	'#ffffff',
	'#d1c2ac'
) );

add_color_palette( array(
	'#eeeeee',
	'#444444',
	'#9d3333',
	'#dd4545'
) );

add_color_palette( array(
	'#ffffff',
	'#555555',
	'#33649d',
	'#6ba1df'
) );

add_color_palette( array(
	'#fefefe',
	'#444444',
	'#48b681',
	'#1d8553'
) );
