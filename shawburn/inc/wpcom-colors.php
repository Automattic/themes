<?php
/* Custom Colors: Shawburn */

// Background Color
// $config-global--color-background-default
add_color_rule( 'bg', 'white', array(

	// Background-color
	array( '#page,
			.main-navigation #toggle:focus + #toggle-menu,
			.screen-reader-text:focus,
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept,
			.main-navigation > div > ul > li > .sub-menu', 'background-color' ),

	// Text-color
	// Needs contrast against `link` (primary)
	array( '#toggle-menu,
			#toggle-menu:active,
			#toggle-menu:focus,
			#toggle-menu:hover,
			.a8c-posts-list-item__featured span,
			.a8c-posts-list__view-all,
			.a8c-posts-list__view-all:focus,
			.a8c-posts-list__view-all:hover,
			.button,
			.button:focus,
			.button:hover,
			.has-focus.a8c-posts-list__view-all,
			.has-focus.button,
			.has-focus.wp-block-button__link,
			.has-focus.wp-block-file__button,
			.main-navigation,
			.main-navigation #toggle:focus + #toggle-menu,
			.main-navigation #toggle:focus + #toggle-menu:active,
			.main-navigation #toggle:focus + #toggle-menu:focus,
			.main-navigation #toggle:focus + #toggle-menu:hover,
			.main-navigation a,
			.main-navigation a:hover,
			.main-navigation a:link,
			.main-navigation a:visited,
			.social-navigation a,
			.social-navigation a:hover,
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
			.wp-block-gallery .blocks-gallery-image figcaption,
			.wp-block-gallery .blocks-gallery-item figcaption,
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
			input[type="submit"]', 'color', 'link' ),

	/**
	 * Utility Classes
	 */
	// Text-color
	// Needs contrast against `link` (primary)
	array( '.has-primary-background-color[class]', 'color', 'link' ),
	// Text-color
	// Needs contrast against `fg1` (secondary)
	array( '.has-secondary-background-color[class]', 'color', 'fg1' ),

	// Text-color
	// Needs contrast against `txt` (foreground)
	array( '.has-foreground-background-color[class],
			.has-foreground-dark-background-color[class],
			.has-foreground-light-background-color[class]', 'color', 'txt', 12 ),
	// Text-color
	// Needs contrast against `txt` (background)
	array( '.has-background-color[class],
			.has-background-dark-color[class],
			.has-background-light-color[class],
			.has-background-background-color[class],
			.has-background-dark-background-color[class],
			.has-background-light-background-color[class]', 'color', 'bg', 12 ),
	// Background-color
	array( '.has-background-background-color[class]', 'background-color' ),
	// Background-color darkened
	array( '.has-background-dark-background-color[class]', 'background-color', '-1' ),
	// Background-color lightened
	array( '.has-background-light-background-color[class]', 'background-color', '+1' ),

	// Border color top
	// Needs contrast against `txt` (foreground)
	array( '.main-navigation #toggle:checked ~ div', 'border-top-color', 'txt' ),

), __( 'Background Color' ) );

// Link Color
// $config-global--color-primary-default
add_color_rule( 'link', '#0C80A1', array(

	// Background-color
	array( '#masthead .social-navigation ul li a,
			#site-navigation,
			#site-navigation.main-navigation ul ul,
			#toggle-menu,
			.a8c-posts-list-item__featured span,
			.a8c-posts-list__view-all,
			.button,
			.fse-template-part .main-navigation,
			.fse-template-part .main-navigation ul ul,
			.main-navigation #toggle:focus + #toggle-menu,
			.sticky-post,
			.wp-block-button__link,
			.wp-block-file .wp-block-file__button,
			.wp-block-file__button,
			.wp-block-pullquote.is-style-solid-color,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept,
			button,
			button[data-load-more-btn],
			input[type="submit"]', 'background-color' ),

	// Text-color
	// Needs contrast against `bg`
	array( 'ts-list-item__title a:active,
			.a8c-posts-list-item__title a:focus,
			.a8c-posts-list-item__title a:hover,
			.entry-header a:active,
			.entry-header a:focus,
			.entry-header a:hover,
			.footer-navigation .footer-menu a:hover,
			.site-info a:hover,
			.site-title a:hover,
			.wp-block-button.is-style-outline .wp-block-button__link,
			.wp-block-button.is-style-outline .wp-block-button__link:active,
			.wp-block-button.is-style-outline.wp-block-button__link,
			.wp-block-button.is-style-outline.wp-block-button__link:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:focus,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:hover,
			a', 'color', 'bg' ),

	// Border color left
	// Needs contrast against `bg`
	array( '.wp-block-quote', 'border-left-color', 'bg' ),

	// Border color right
	// Needs contrast against `bg`
	array( '.wp-block-quote[style*="text-align: right"],
			.wp-block-quote[style*="text-align:right"]', 'border-right-color', 'bg' ),

	/**
	 * Utility Classes
	 */
	// Background-color
	array( '.has-primary-background-color[class]', 'background-color' ),
	// Text-color
	// Needs contrast against `bg`
	array( '.has-primary-color[class]', 'color', 'bg' ),

), __( 'Link Color' ) );

// Text Color
// $config-global--color-foreground-default
add_color_rule( 'txt', '#444444', array(

	// Text-color
	// Needs contrast against `bg` with more contrast
	array( '.comment-meta .comment-metadata,
			.screen-reader-text:focus,
			.site-title,
			.wp-block-code,
			.wp-block-code pre,
			.wp-block-pullquote,
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept,
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
			textarea:focus', 'color', 'bg', 7 ),

	// Background-color
	// Needs contrast against `bg` with more contrast
	array( 'body,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'background-color', 'bg', 7 ),

	/**
	 * Utility Classes
	 */
	// Foreground
	// Needs contrast against `bg`
	array( '.has-foreground-color[class]', 'color', 'bg' ),
	array( '.has-foreground-background-color[class]', 'background-color' ),

	// Text-color darkened
	array( '.has-foreground-dark-color[class]', 'color', '-1' ),
	// Background-color darkened
	array( '.has-foreground-dark-background-color[class]', 'background-color', '-1' ),

	// Text-color brightened
	array( '.has-foreground-light-color[class]', 'color', '+2' ),
	// Background-color brightened
	array( '.has-foreground-light-background-color[class]', 'background-color', '+2' ),

), __( 'Text Color' ) );

// Accent Color
// $config-global--color-secondary-default
add_color_rule( 'fg1', '#D4401C', array(

	/**
	 * Utility Classes
	 */
	// Text-color
	// Needs contrast against `bg`
	array( '.has-secondary-color[class]', 'color', 'bg' ),

	// Background-color
	array( '.has-secondary-background-color[class]', 'background-color' ),

), __( 'Secondary Color' ) );