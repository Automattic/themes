<?php
add_color_rule( 'bg', '#1a1a1a', array(
	array(
		'body', 'background-color',
	),
),
__( 'Background', 'twentysixteen' ) );


add_color_rule( 'txt', '#ffffff', array(
	// Page Background Color used as background color.
	array(
		'.site,
		.main-navigation ul ul li', 'background-color',
	),

	// Page Background Color used as background color.
	array(
		'body #infinite-footer .container', 'background-color', 0.9
	),

	// Page Background Color used as border color.
	array(
		'.main-navigation ul ul:after', 'border-top-color',
	),

	array(
		'.main-navigation ul ul:after', 'border-bottom-color',
	),

	// Page Background Color used as text color.
	array(
		'mark,
		ins,
		button,
		button[disabled]:hover,
		button[disabled]:focus,
		input[type="button"],
		input[type="button"][disabled]:hover,
		input[type="button"][disabled]:focus,
		input[type="reset"],
		input[type="reset"][disabled]:hover,
		input[type="reset"][disabled]:focus,
		input[type="submit"],
		input[type="submit"][disabled]:hover,
		input[type="submit"][disabled]:focus,
		.menu-toggle.toggled-on,
		.menu-toggle.toggled-on:hover,
		.menu-toggle.toggled-on:focus,
		.pagination .prev,
		.pagination .next,
		.pagination .prev:hover,
		.pagination .prev:focus,
		.pagination .next:hover,
		.pagination .next:focus,
		.pagination .nav-links:before,
		.pagination .nav-links:after,
		.widget_calendar tbody a,
		.widget_calendar tbody a:hover,
		.widget_calendar tbody a:focus,
		.page-links a,
		.page-links a:hover,
		.page-links a:focus,
		.site-main #infinite-handle span', 'color',
	),
),
__( 'Page Background', 'twentysixteen' ) );


add_color_rule( 'link', '#007acc', array(
	/**
	 * Link color used as text color.
	 * It needs a contrast at least 4.51 against page background color (txt).
	 */
	array(
		'.menu-toggle:hover,
		.menu-toggle:focus,
		a,
		.main-navigation a:hover,
		.main-navigation a:focus,
		.dropdown-toggle:hover,
		.dropdown-toggle:focus,
		.social-navigation a:hover:before,
		.social-navigation a:focus:before,
		.post-navigation a:hover .post-title,
		.post-navigation a:focus .post-title,
		.tagcloud a:hover,
		.tagcloud a:focus,
		.site-branding .site-title a:hover,
		.site-branding .site-title a:focus,
		.entry-title a:hover,
		.entry-title a:focus,
		.entry-footer a:hover,
		.entry-footer a:focus,
		.comment-metadata a:hover,
		.comment-metadata a:focus,
		.pingback .comment-edit-link:hover,
		.pingback .comment-edit-link:focus,
		.comment-reply-link,
		.comment-reply-link:hover,
		.comment-reply-link:focus,
		.required,
		.site-info a:hover,
		.site-info a:focus,
		.main-navigation li:hover > a,
		.main-navigation li.focus > a,
		.comments-area #respond .comment-form-service a,
		.widget_flickr #flickr_badge_uber_wrapper a,
		.widget_flickr #flickr_badge_uber_wrapper a:link,
		.widget_flickr #flickr_badge_uber_wrapper a:active,
		.widget_flickr #flickr_badge_uber_wrapper a:visited,
		.wp_widget_tag_cloud a:hover,
		.wp_widget_tag_cloud a:focus,
		body #infinite-footer .blog-info a:hover,
		body #infinite-footer .blog-info a:focus,
		body #infinite-footer .blog-info a:hover,
		body #infinite-footer .blog-info a:focus,
		body #infinite-footer .blog-credits a:hover,
		body #infinite-footer .blog-credits a:focus', 'color', 'txt', 4.51
	),

	/**
	 * Link color used as background color.
	 * It needs a contrast at least 4.51 against page background color (txt).
	 */
	array(
		'mark,
		ins,
		button:hover,
		button:focus,
		input[type="button"]:hover,
		input[type="button"]:focus,
		input[type="reset"]:hover,
		input[type="reset"]:focus,
		input[type="submit"]:hover,
		input[type="submit"]:focus,
		.pagination .prev:hover,
		.pagination .prev:focus,
		.pagination .next:hover,
		.pagination .next:focus,
		.widget_calendar tbody a,
		.page-links a:hover,
		.page-links a:focus,
		#infinite-handle span:hover,
		#infinite-handle span:focus', 'background-color', 'txt', 4.51
	),

	/**
	 * Link color used as border color.
	 * It needs a contrast at least 4.51 against page background color (txt).
	 */
	array(
		'input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="password"]:focus,
		input[type="search"]:focus,
		textarea:focus,
		.tagcloud a:hover,
		.tagcloud a:focus,
		.menu-toggle:hover,
		.menu-toggle:focus,
		.comments-area #respond #comment-form-comment.active,
		.comments-area #comment-form-share-text-padder.active,
		.comments-area #respond .comment-form-fields div.comment-form-input.active,
		.wp_widget_tag_cloud a:hover,
		.wp_widget_tag_cloud a:focus', 'border-color', 'txt', 4.51
	),
),
__( 'Link Color', 'twentysixteen' ) );


add_color_rule( 'fg1', '#1a1a1a', array(
	/**
	 * Main text color used as text color.
	 * It needs a contrast at least 4.58 against page background color (txt).
	 */
	array(
		'body,
		blockquote cite,
		blockquote small,
		.main-navigation a,
		.menu-toggle,
		.dropdown-toggle,
		.social-navigation a,
		.post-navigation a,
		.widget-title a,
		.site-branding .site-title a,
		.entry-title a,
		.page-links > .page-links-title,
		.comment-author,
		.comment-reply-title small a:hover,
		.comment-reply-title small a:focus', 'color', 'txt', 4.58
	),

	/**
	 * Main text color used as border color.
	 * It needs a contrast at least 4.58 against page background color (txt).
	 */
	array(
		'blockquote,
		.menu-toggle.toggled-on,
		.menu-toggle.toggled-on:hover,
		.menu-toggle.toggled-on:focus,
		.post-navigation,
		.post-navigation div + div,
		.pagination,
		.widget,
		.page-header,
		.page-links a,
		.comments-title,
		.comment-reply-title', 'border-color', 'txt', 4.58
	),

	/**
	 * Main text color used as background color.
	 * It needs a contrast at least 4.58 against page background color (txt).
	 */
	array(
		'button,
		button[disabled]:hover,
		button[disabled]:focus,
		input[type="button"],
		input[type="button"][disabled]:hover,
		input[type="button"][disabled]:focus,
		input[type="reset"],
		input[type="reset"][disabled]:hover,
		input[type="reset"][disabled]:focus,
		input[type="submit"],
		input[type="submit"][disabled]:hover,
		input[type="submit"][disabled]:focus,
		.menu-toggle.toggled-on,
		.menu-toggle.toggled-on:hover,
		.menu-toggle.toggled-on:focus,
		.pagination:before,
		.pagination:after,
		.pagination .prev,
		.pagination .next,
		.page-links a,
		.site-main #infinite-handle span', 'background-color', 'txt', 4.58
	),

	/**
	 * Border color 20% of the main text color.
	 */
	array(
		'fieldset,
		pre,
		abbr,
		acronym,
		table,
		th,
		td,
		input[type="text"],
		input[type="email"],
		input[type="url"],
		input[type="password"],
		input[type="search"],
		textarea,
		.main-navigation li,
		.main-navigation .primary-menu,
		.menu-toggle,
		.dropdown-toggle:after,
		.social-navigation a,
		.image-navigation,
		.comment-navigation,
		.tagcloud a,
		.entry-content,
		.entry-summary,
		.page-links a,
		.page-links > span,
		.comment-list article,
		.comment-list .pingback,
		.comment-list .trackback,
		.comment-reply-link,
		.no-comments,
		.main-navigation ul ul,
		.main-navigation ul ul li,
		.comments-area #respond #comment-form-comment,
		.comments-area #comment-form-share-text-padder,
		.comments-area #respond .comment-form-fields div.comment-form-input,
		.comments-area #respond .comment-form-service,
		.wp_widget_tag_cloud a,
		body #infinite-footer .container', 'border-color', 0.2
	),

	array(
		'.main-navigation ul ul:before', 'border-top-color', 0.2
	),

	array(
		'.main-navigation ul ul:before', 'border-bottom-color', 0.2
	),

	/**
	 * Border color used as background color.
	 */
	array(
		'hr,
		code', 'background-color', 0.2
	),
),
__( 'Main Text Color', 'twentysixteen' ) );


add_color_rule( 'fg2', '#686868', array(
	/**
	 * Secondary text color used as text color.
	 * It needs a contrast at least 4.58 against page background color (txt).
	 */
	array(
		'blockquote,
		.post-password-form label,
		a:hover,
		a:focus,
		a:active,
		.post-navigation .meta-nav,
		.image-navigation,
		.comment-navigation,
		.widget_recent_entries .post-date,
		.widget_rss .rss-date,
		.widget_rss cite,
		.site-description,
		body:not(.search-results) .entry-summary,
		.author-bio,
		.entry-footer,
		.entry-footer a,
		.sticky-post,
		.taxonomy-description,
		.entry-caption,
		.comment-metadata,
		.pingback .edit-link,
		.comment-metadata a,
		.pingback .comment-edit-link,
		.comment-form label,
		.comment-notes,
		.comment-awaiting-moderation,
		.logged-in-as,
		.form-allowed-tags,
		.site-info,
		.site-info a,
		.wp-caption .wp-caption-text,
		.gallery-caption,
		.jp-relatedposts-post-aoverlay:hover .jp-relatedposts-post-title a,
		.jp-relatedposts-post-aoverlay:focus .jp-relatedposts-post-title a,
		.comments-area #respond .comment-form-fields label,
		.comments-area #respond .comment-form-fields label span.required,
		.comments-area #respond .comment-form-fields label span.nopublish,
		.comments-area #respond .comment-form-service a:hover,
		.comments-area #respond .comment-form-service a:focus,
		.comments-area #respond .comment-form-fields p.comment-form-posting-as,
		.comments-area #respond .comment-form-fields p.comment-form-log-out,
		.comments-area #respond #comment-form-identity #comment-form-nascar p,
		.comments-area #respond #comment-form-subscribe p,
		.comment-content p.comment-likes span.comment-like-feedback,
		.widget_flickr #flickr_badge_uber_wrapper a:focus,
		.widget_flickr #flickr_badge_uber_wrapper a:hover,
		.top_rated div > p,
		body #infinite-footer .blog-info a,
		body #infinite-footer .blog-credits,
		body #infinite-footer .blog-credits a', 'color', 'txt', 4.58
	),

	/* 
	 * Form field placeholders need contrast against white form field background for Jetpack comments.
	 */
	array( 
		'#respond.js .comment-form-fields label,
		#respond.js .comment-form-fields label span.required,
		#respond.js .comment-form-fields label span.nopublish', 'color', '#ffffff', 4.58
	),

	/**
	 * Secondary text color used as background color.
	 * It needs a contrast at least 4.58 against page background color (txt).
	 */
	array(
		'.widget_calendar tbody a:hover,
		.widget_calendar tbody a:focus', 'background-color', 'txt', 4.58
	),
),
__( 'Secondary Text Color', 'twentysixteen' ) );


// Additional CSS
add_theme_support( 'custom_colors_extra_css', 'twentysixteen_extra_css' );
function twentysixteen_extra_css() { ?>
	input[type="text"],
	input[type="email"],
	input[type="url"],
	input[type="password"],
	input[type="search"],
	input[type="tel"],
	input[type="number"],
	textarea {
		background: #f7f7f7;
		color: #686868;
	}

	input[type="text"]:focus,
	input[type="email"]:focus,
	input[type="url"]:focus,
	input[type="password"]:focus,
	input[type="search"]:focus,
	input[type="tel"]:focus,
	input[type="number"]:focus,
	textarea:focus {
		background-color: #fff;
		color: #1a1a1a;
	}
<?php
}

// Free color palettes
add_color_palette( array(
	'#262626', // Background
	'#1a1a1a', // Page Background
	'#9adffd', // Link Color
	'#e5e5e5', // Main Text Color
	'#c1c1c1', // Secondary Text Color
), 'Dark' );

add_color_palette( array(
	'#616a73', // Background
	'#4d545c', // Page Background
	'#c7c7c7', // Link Color
	'#f2f2f2', // Main Text Color
	'#f2f2f2', // Secondary Text Color
), 'Gray' );

add_color_palette( array(
	'#ffffff', // Background
	'#ff675f', // Page Background
	'#640c1f', // Link Color
	'#402b30', // Main Text Color
	'#402b30', // Secondary Text Color
), 'Red' );

add_color_palette( array(
	'#3b3721', // Background
	'#ffef8e', // Page Background
	'#774e24', // Link Color
	'#3b3721', // Main Text Color
	'#5b4d3e', // Secondary Text Color
), 'Yellow' );

add_color_palette( array(
	'#e6ddd0', // Background
	'#eee9e1', // Page Background
	'#e43333', // Link Color
	'#595959', // Main Text Color
	'#878787', // Secondary Text Color
), 'Beige' );

add_color_palette( array(
	'#f8f8f8', // Background
	'#eeeeee', // Page Background
	'#a7d736', // Link Color
	'#545454', // Main Text Color
	'#a8a8a8', // Secondary Text Color
), 'Green' );
