<?php
/* Custom Colors: Brompton */

// Background Color
// $config-global--color-background-default
add_color_rule( 'bg', '#E8E4DD', array(

	// Background-color
	array( '.has-background-background-color[class],
			.screen-reader-text:focus,
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept,
			.main-navigation .button', 'background-color' ),

	// Text-color
	array( '.a8c-posts-list-item__featured span,
			.a8c-posts-list__view-all,
			.a8c-posts-list__view-all:focus,
			.a8c-posts-list__view-all:hover,
			.button,
			.button:focus,
			.button:hover,
			.has-background-color,
			.has-background-dim,
			.has-focus.a8c-posts-list__view-all,
			.has-focus.button,
			.has-focus.wp-block-button__link,
			.has-focus.wp-block-file__button,
			.sticky-post,
			.wp-block-button__link,
			.wp-block-button__link:focus,
			.wp-block-button__link:hover,
			.wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-image-text,
			.wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-text,
			.wp-block-cover-image:not([class*="background-color"]) .wp-block-cover__inner-container,
			.wp-block-cover:not([class*="background-color"]) .wp-block-cover-image-text,
			.wp-block-cover:not([class*="background-color"]) .wp-block-cover-text,
			.wp-block-cover:not([class*="background-color"]) .wp-block-cover__inner-container,
			.wp-block-file .wp-block-file__button,
			.wp-block-file a.wp-block-file__button:active,
			.wp-block-file a.wp-block-file__button:focus,
			.wp-block-file a.wp-block-file__button:hover,
			.wp-block-file a.wp-block-file__button:visited,
			.wp-block-file__button,
			.wp-block-file__button:focus,
			.wp-block-file__button:hover,
			.wp-block-pullquote.is-style-solid-color,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept:focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept:hover,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.has-focus.accept,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative,
			button,
			button.has-focus,
			button:focus,
			button:hover,
			button[data-load-more-btn],
			input.has-focus[type="submit"],
			input:focus[type="submit"],
			input:hover[type="submit"],
			input[type="submit"],
			.footer-navigation .footer-menu,
			.main-navigation,
			.main-navigation > div > ul > li.current-menu-item > a,
			.main-navigation > div > ul > li:hover li > a,
			.main-navigation a,
			.main-navigation a:link,
			.main-navigation a:visited,
			.site-branding,
			.site-info,
			.site-title,
			.social-navigation a', 'color' ),

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-foreground-background-color,
			.has-foreground-background-color.has-background-dim,
			.has-foreground-dark-background-color,
			.has-foreground-dark-background-color.has-background-dim,
			.has-foreground-light-background-color,
			.has-foreground-light-background-color.has-background-dim,
			.has-primary-background-color,
			.has-primary-background-color.has-background-dim,
			.has-secondary-background-color,
			.has-secondary-background-color.has-background-dim,
			.has-background-color,
			.has-background-dark-color,
			.has-background-light-color', 'color' ),
	// Background-color
	array( '.has-background-background-color,
			.has-background-background-color.has-background-dim', 'background-color' ),
	// Background-color darkened
	array( '.has-background-dark-color', 'color', '-1' ),
	array( '.has-background-dark-background-color,
			.has-background-dark-background-color.has-background-dim', 'background-color', '-1' ),
	// Background-color lightened
	array( '.has-background-light-color', 'color', '+1' ),
	array( '.has-background-light-background-color,
			.has-background-light-background-color.has-background-dim', 'background-color', '+1' ),

	/**
	 * Grays
	 * Uses a slightly darker color
	 */
	// Border-color
	array( '.wp-block-code,
			.wp-block-table td,
			.wp-block-table th,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
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
			table td,
			table th,
			textarea', 'border-color', '-1' ),
	// Border-top-color
	array( '.comment-list .children > li,
			.comment-list > li,
			.wp-block-pullquote', 'border-top-color', '-1' ),
	// Color
	array( 'hr.wp-block-separator.is-style-dots:before', 'color', '-1' ),

	// Background-color
	array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept.has-focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept:focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept:hover', '-1' ),

	/**
	 * Menu Hovers
	 * Uses a slightly less opaque color
	 */
	// Text-color
	array( '#masthead a:hover,
			.site-title a:hover,
			.social-navigation a:hover,
			.footer-navigation .footer-menu a:hover,
			.site-info a:hover', 'color', 0.8 ),

	// Background-color
	array( '.main-navigation #toggle-menu:active, 
			.main-navigation #toggle-menu:focus, 
			.main-navigation #toggle-menu:hover', 'background-color', 0.8 ),

), __( 'Background Color' ) );

// Link Color
// $config-global--color-primary-default
add_color_rule( 'link', '#C04239', array(

	// Background-color
	array( '.a8c-posts-list-item__featured span,
			.a8c-posts-list__view-all:focus,
			.a8c-posts-list__view-all:hover,
			.button:focus,
			.button:hover,
			.has-focus.a8c-posts-list__view-all,
			.has-focus.button,
			.has-focus.wp-block-button__link,
			.has-focus.wp-block-file__button,
			.sticky-post,
			.wp-block-button__link:focus,
			.wp-block-button__link:hover,
			.wp-block-file__button:focus,
			.wp-block-file__button:hover,
			.wp-block-pullquote.is-style-solid-color,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept:focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept:hover,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.has-focus.accept,
			button.has-focus,
			button:focus,
			button:hover,
			input.has-focus[type="submit"],
			input:focus[type="submit"],
			input:hover[type="submit"]', 'background-color' ),

	// Text-color
	array( '.a8c-posts-list .a8c-posts-list-item__meta a:active,
			.a8c-posts-list .a8c-posts-list-item__meta a:focus,
			.a8c-posts-list .a8c-posts-list-item__meta a:hover,
			.a8c-posts-list .a8c-posts-list-item__title a:active,
			.a8c-posts-list .a8c-posts-list-item__title a:focus,
			.a8c-posts-list .a8c-posts-list-item__title a:hover,
			.comments-area .comment-meta a:active,
			.comments-area .comment-meta a:focus,
			.comments-area .comment-meta a:hover,
			.comments-area .reply a:active,
			.comments-area .reply a:focus,
			.comments-area .reply a:hover,
			.entry-footer a:active,
			.entry-footer a:focus,
			.entry-footer a:hover,
			.page-title a:active,
			.page-title a:focus,
			.page-title a:hover,
			.pagination .nav-links > *.current,
			.pagination .nav-links > *:active,
			.pagination .nav-links > *:focus,
			.pagination .nav-links > *:hover,
			.post-navigation a:active,
			.post-navigation a:focus,
			.post-navigation a:hover,
			.wp-block-button.is-style-outline .wp-block-button__link.has-focus,
			.wp-block-button.is-style-outline .wp-block-button__link:focus,
			.wp-block-button.is-style-outline .wp-block-button__link:hover,
			.wp-block-button.is-style-outline.has-focus,
			.wp-block-button.is-style-outline:focus,
			.wp-block-button.is-style-outline:hover,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:focus,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:hover,
			a,
			article .entry-header .entry-title a:active,
			article .entry-header .entry-title a:focus,
			article .entry-header .entry-title a:hover', 'color' ),

	// Border color left
	array( '.wp-block-quote', 'border-left-color' ),

	// Border color right
	array( '.wp-block-quote[style*="text-align: right"],
			.wp-block-quote[style*="text-align:right"]', 'border-right-color' ),

	// Border color bottom
	array( '#colophon .site-info,
			#masthead', 'border-bottom-color' ),

	// Border color top
	array( '#colophon .footer-navigation,
			#colophon .site-info,
			#masthead', 'border-top-color' ),

	/**
	 * Utility Classes
	 */
	// Background-color
	array( '.has-primary-background-color,
			.has-primary-background-color.has-background-dim', 'background-color' ),

	// Text-color
	array( '.has-primary-color', 'color' ),

), __( 'Link Color' ) );

// Text Color
// $config-global--color-foreground-default
add_color_rule( 'txt', '#252E36', array(

	// Text-color
	array( '.a8c-posts-list__item .a8c-posts-list-item__meta a:active,
			.a8c-posts-list__item .a8c-posts-list-item__meta a:hover,
			.comment-meta .comment-metadata,
			.comment-meta .comment-metadata a:active,
			.comment-meta .comment-metadata a:hover,
			.entry-footer a:active,
			.entry-footer a:hover,
			.entry-meta a:active,
			.entry-meta a:hover,
			.main-navigation .button,
			.pagination .nav-links > *,
			.post-navigation .meta-nav,
			.screen-reader-text:focus,
			.wp-block-button.is-style-outline .wp-block-button__link:active,
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline.wp-block-button__link:active,
			.wp-block-button.is-style-outline.wp-block-button__link:not(.has-text-color),
			.wp-block-code,
			.wp-block-code pre,
			.wp-block-newspack-blocks-homepage-articles article .cat-links a:active,
			.wp-block-newspack-blocks-homepage-articles article .cat-links a:hover,
			.wp-block-newspack-blocks-homepage-articles article .entry-meta a:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-meta a:hover,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:hover,
			.wp-block-pullquote,
			.wp-block-table.is-style-stripes tbody tr:nth-child(odd),
			table.is-style-stripes tbody tr:nth-child(odd),
			a:hover,
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept', 'color' ),

	// Background-color
	array( '#colophon .footer-navigation,
			#colophon .site-info,
			#masthead,
			#masthead:before,
			#page:before,
			.a8c-posts-list__view-all,
			.button,
			.wp-block-button__link,
			.wp-block-cover,
			.wp-block-cover-image,
			.wp-block-cover-image.has-background-dim:not([class*="background-color"]),
			.wp-block-cover.has-background-dim:not([class*="background-color"]),
			.wp-block-file .wp-block-file__button,
			.wp-block-file__button,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative,
			button,
			button[data-load-more-btn],
			input[type="submit"],
			.main-navigation > div > ul > li > .sub-menu,
			.main-navigation > div > ul > li:hover li > a, 
			.main-navigation > div > ul > li.focus li > a, 
			.main-navigation > div > ul > li.current-menu-item li > a', 'background-color' ),

	// Border-color
	array( 'input[type="color"]:focus,
			input[type="date"]:focus,
			input[type="datetime"]:focus,
			input[type="datetime-local"]:focus,
			input[type="email"]:focus,
			input[type="month"]:focus,
			input[type="number"]:focus,
			input[type="password"]:focus,
			input[type="range"]:focus,
			input[type="search"]:focus,
			input[type="tel"]:focus,
			input[type="text"]:focus,
			input[type="time"]:focus,
			input[type="url"]:focus,
			input[type="week"]:focus,
			textarea:focus', 'border-color' ),

	// Border-top-color
	array( '.wp-block-pullquote', 'border-top-color' ),

	// Border-bottom-color
	array( '.comment-list,
			.wp-block-pullquote,
			hr,
			hr.wp-block-separator', 'border-bottom-color', '-1' ),

	/**
	 * Utility Classes
	 */
	// Foreground
	array( '.has-background-background-color,
			.has-background-background-color.has-background-dim,
			.has-background-dark-background-color,
			.has-background-dark-background-color.has-background-dim,
			.has-background-light-background-color,
			.has-background-light-background-color.has-background-dim,
			.has-foreground-color', 'color' ),

	array( '.has-background-dim,
			.has-foreground-background-color,
			.has-foreground-background-color.has-background-dim', 'background-color' ),

	// Text-color darkened
	array( '.has-foreground-dark-color[class]', 'color', '-1' ),
	// Background-color darkened
	array( '.has-foreground-dark-background-color[class]', 'background-color', '-1' ),

	// Text-color brightened
	array( '.has-foreground-light-color[class]', 'color', '+2' ),
	// Background-color brightened
	array( '.has-foreground-light-background-color[class]', 'background-color', '+2' ),

	/**
	 * Gray (Same as text color)
	 */
	// Text-color
	array( '.a8c-posts-list__item .a8c-posts-list-item__meta,
			.comments-area .reply,
			.entry-footer,
			.entry-meta,
			.has-foreground-light-color[class],
			.post-navigation a,
			.wp-block-image figcaption,
			.wp-block-latest-comments .wp-block-latest-comments__comment-date,
			.wp-block-latest-posts .wp-block-latest-posts__post-date,
			.wp-block-newspack-blocks-homepage-articles article .cat-links,
			.wp-block-newspack-blocks-homepage-articles article .entry-meta,
			.wp-block-pullquote .wp-block-pullquote__citation,
			.wp-block-pullquote cite,
			.wp-block-pullquote footer,
			.wp-block-quote .wp-block-quote__citation,
			.wp-block-quote cite,
			.wp-block-quote footer,
			.wp-block-quote.is-large .wp-block-quote__citation,
			.wp-block-quote.is-large cite,
			.wp-block-quote.is-large footer,
			.wp-block-quote.is-style-large .wp-block-quote__citation,
			.wp-block-quote.is-style-large cite,
			.wp-block-quote.is-style-large footer,
			.wp-block-video figcaption,
			figcaption', 'color' ),

), __( 'Text Color' ) );

// Accent Color
// $config-global--color-secondary-default
add_color_rule( 'fg1', '#FFFFFF', array(

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-secondary-color', 'color' ),

	// Background-color
	array( '.has-secondary-background-color,
			.has-secondary-background-color.has-background-dim', 'background-color' ),

), __( 'Secondary Color' ) );

/**
 * Custom CSS
 */

function brompton_custom_colors_extra_css() { 
	$colors_array = get_theme_mod( 'colors_manager' );
	$bg           = $colors_array['colors']['bg'];
?>

	input[type="color"],
	input[type="color"]:focus,
	input[type="date"],
	input[type="date"]:focus,
	input[type="datetime"],
	input[type="datetime"]:focus,
	input[type="datetime-local"],
	input[type="datetime-local"]:focus,
	input[type="email"],
	input[type="email"]:focus,
	input[type="month"],
	input[type="month"]:focus,
	input[type="number"],
	input[type="number"]:focus,
	input[type="password"],
	input[type="password"]:focus,
	input[type="range"],
	input[type="range"]:focus,
	input[type="search"],
	input[type="search"]:focus,
	input[type="tel"],
	input[type="tel"]:focus,
	input[type="text"],
	input[type="text"]:focus,
	input[type="time"],
	input[type="time"]:focus,
	input[type="url"],
	input[type="url"]:focus,
	input[type="week"],
	input[type="week"]:focus,
	textarea,
	textarea:focus {
	    	color: black;
	    	background: white;
	}

	@media screen and (min-width: 560px) {
		.main-navigation > div > ul > li:hover li > a, 
		.main-navigation > div > ul > li.focus li > a, 
		.main-navigation > div > ul > li.current-menu-item li > a {
			border-top-color: currentColor;
		}
	}
<?php }
add_theme_support( 'custom_colors_extra_css', 'brompton_custom_colors_extra_css' ); 

/**
 * Featured Varia Palettes
 */
// Light
add_color_palette( array(
	'#FFFFFF',
	'#1D1E1E',
	'#C8133E',
	'#4E2F4B',
), 'Light' );
// Medium
add_color_palette( array(
	'#EEF4F7',
	'#242527',
	'#35845D',
	'#233252',
), 'Medium' );
// Dark
add_color_palette( array(
	'#1F2527',
	'#FFFFFF',
	'#9FD3E8',
	'#FBE6AA',
), 'Dark' );
