<?php
/* Custom Colors: Mayland */

// Background Color
// $config-global--color-background-default
add_color_rule( 'bg', '#ffffff', array(

	// Background-color
	array( '.screen-reader-text:focus,
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept,
			.main-navigation > div > ul > li > .sub-menu', 'background-color' ),

	// Text-color
	// Needs contrast against `link` (primary)
	array( '.a8c-posts-list-item__featured span,
			.sticky-post,
			.wp-block-pullquote.is-style-solid-color,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'color', 'link' ),

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

), __( 'Background Color' ) );

// Link Color
// $config-global--color-primary-default
add_color_rule( 'link', '#000000', array(

	// Background-color
	array( '.a8c-posts-list-item__featured span,
			.a8c-posts-list__view-all,
			.button,
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
	array( '.a8c-posts-list .a8c-posts-list-item__title a:active,
			.a8c-posts-list .a8c-posts-list-item__title a:focus,
			.a8c-posts-list .a8c-posts-list-item__title a:hover,
			.entry-title a:active,
			.entry-title a:focus,
			.entry-title a:hover,
			.main-navigation a,
			.main-navigation a:link,
			.main-navigation a:visited,
			.page-title a:active,
			.page-title a:focus,
			.page-title a:hover,
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
add_color_rule( 'txt', '#010101', array(

	// Text-color
	// Needs contrast against `bg` with more contrast
	array( 'body,
			.screen-reader-text:focus,
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
			.wp-block-code,
			.wp-block-code. pre,
			.wp-block-pullquote,
			.site-title,
			.main-navigation,
			.social-navigation a,
			.comment-meta .comment-metadata,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept', 'color', 'bg', 7 ),

	// Background-color
	// Needs contrast against `bg` with more contrast
	array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'background-color', 'bg', 7 ),

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
add_color_rule( 'fg1', '#1a1a1a', array(

	/**
	 * Utility Classes
	 */
	// Text-color
	// Needs contrast against `bg`
	array( '.has-secondary-color[class]', 'color', 'bg' ),

	// Background-color
	array( '.has-secondary-background-color[class]', 'background-color' ),

), __( 'Secondary Color' ) );