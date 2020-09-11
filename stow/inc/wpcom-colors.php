<?php
/* Custom Colors: Redhill */

// Background Color
// $config-global--color-background-default
add_color_rule( 'bg', '#FFFFFF', array(

	// Background-color
	array( '#masthead,
			#masthead .site-branding,
			.screen-reader-text:focus,
			.site-content,
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept', 'background-color' ),

	// Text-color
	array( '.a8c-posts-list-item__featured span,
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
			.sticky-post,
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-text-color),
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-text-color):focus,
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-text-color):hover,
			.wp-block-cover-image.has-background-dim,
			.wp-block-cover.has-background-dim,
			.wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-image-text,
			.wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-text,
			.wp-block-cover-image:not([class*="background-color"]) .wp-block-cover__inner-container,
			.wp-block-cover:not([class*="background-color"]) .wp-block-cover-image-text,
			.wp-block-cover:not([class*="background-color"]) .wp-block-cover-text,
			.wp-block-cover:not([class*="background-color"]) .wp-block-cover__inner-container,
			.wp-block-file .wp-block-file__button,
			.wp-block-file a.wp-block-file__button,
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
			body:not(.fse-enabled) #site-navigation.main-navigation ul li a,
			body:not(.fse-enabled) .main-navigation.main-navigation ul li a,
			button,
			button.has-focus,
			button:focus,
			button:hover,
			button[data-load-more-btn],
			input.has-focus[type="submit"],
			input:focus[type="submit"],
			input:hover[type="submit"],
			input[type="submit"],
			body:not(.fse-enabled) #site-navigation.main-navigation ul li a,
			body:not(.fse-enabled) .main-navigation.main-navigation ul li a,
			body:not(.fse-enabled) #site-navigation.main-navigation ul ul li a, 
			body:not(.fse-enabled) .main-navigation.main-navigation ul ul li a', 'color' ),

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-background-dim[class],
			.has-background-color[class],
			.has-background-color.has-background-dim[class],
			.has-foreground-background-color[class],
			.has-foreground-background-color.has-background-dim[class],
			.has-foreground-dark-background-color[class],
			.has-foreground-dark-background-color.has-background-dim[class],
			.has-foreground-light-background-color[class],
			.has-foreground-light-background-color.has-background-dim[class],
			.has-primary-background-color[class],
			.has-primary-background-color.has-background-dim[class],
			.has-secondary-background-color[class],
			.has-secondary-background-color.has-background-dim[class]', 'color' ),
	// Background-color
	array( '.has-background-background-color[class],
			.has-background-background-color.has-background-dim[class]', 'background-color' ),

	// Text-color darkened
	array( '.has-background-dark-color[class],
			.has-background-dark-color.has-background-dim[class]', 'color', '-1' ),
	// Background-color darkened
	array( '.has-background-dark-background-color[class],
			.has-background-dark-background-color.has-background-dim[class]', 'background-color', '-1' ),

	// Text-color lightened
	array( '.has-background-light-color[class],
			.has-background-light-color.has-background-dim[class]', 'color', '+1' ),
	// Background-color lightened
	array( '.has-background-light-background-color[class],
			.has-background-light-background-color.has-background-dim[class]', 'background-color', '+1' ),

	// Text-color darkened
	array( 'body:not(.fse-enabled) #site-navigation.main-navigation ul li a:hover,
			body:not(.fse-enabled) #site-navigation.main-navigation ul li.current-menu-item a,
			body:not(.fse-enabled) .main-navigation.main-navigation ul li a:hover,
			body:not(.fse-enabled) .main-navigation.main-navigation ul li.current-menu-item a,
			body:not(.fse-enabled) #site-navigation.main-navigation ul li a:hover,
			body:not(.fse-enabled) #site-navigation.main-navigation ul li.current-menu-item a,
			body:not(.fse-enabled) .main-navigation.main-navigation ul li a:hover,
			body:not(.fse-enabled) .main-navigation.main-navigation ul li.current-menu-item a,
			body:not(.fse-enabled) #site-navigation.main-navigation ul ul li a:hover,
			body:not(.fse-enabled) #site-navigation.main-navigation ul ul li.current-menu-item a,
			body:not(.fse-enabled) .main-navigation.main-navigation ul ul li a:hover,
			body:not(.fse-enabled) .main-navigation.main-navigation ul ul li.current-menu-item a', '-1' ),
	// Border-color lightened
	array( '.wp-block-quote,
			.wp-block-quote[style*="text-align:center"],
			.wp-block-quote[style*="text-align:right"]', 'border-color', '+1' ),

), __( 'Background Color' ) );

// Link Color
// $config-global--color-primary-default
add_color_rule( 'link', '#404040', array(

	// Background-color
	array( '.a8c-posts-list-item__featured span,
			.sticky-post,
			.wp-block-pullquote.is-style-solid-color', 'background-color' ),

	// Text-color
	array( '.footer-navigation .footer-menu,
			.main-navigation a,
			.main-navigation a:link,
			.main-navigation a:visited,
			.site-info,
			.site-title,
			.social-navigation a,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a,
			a', 'color' ),

	// Border color left
	array( '.wp-block-quote', 'border-left-color' ),

	// Border color right
	array( '.wp-block-quote[style*="text-align: right"],
			.wp-block-quote[style*="text-align:right"]', 'border-right-color' ),

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-primary-color[class],
			.has-primary-color.has-background-dim[class]', 'color' ),
	// Background-color
	array( '.has-primary-background-color[class],
			.has-primary-background-color.has-background-dim[class]', 'background-color' ),

), __( 'Link Color' ) );

// Text Color
// $config-global--color-foreground-default
add_color_rule( 'txt', '#444444', array(

	// Text-color
	array( '.comment-meta .comment-metadata,
			.main-navigation,
			.screen-reader-text:focus,
			.wp-block-code,
			.wp-block-code pre,
			.wp-block-pullquote,
			.wp-block-table.is-style-stripes tbody tr:nth-child(odd),
			table.is-style-stripes tbody tr:nth-child(odd),
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept', 'color' ),

	// Background-color
	array( '.wp-block-cover,
			.wp-block-cover-image,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'background-color' ),

	/**
	 * Utility Classes
	 */
	// Text Color
	array( '.has-background-dim[class],
			.has-foreground-color[class],
			.has-foreground-color.has-background-dim[class],
			.has-background-background-color[class],
			.has-background-background-color.has-background-dim[class],
			.has-background-dark-background-color[class],
			.has-background-dark-background-color.has-background-dim[class],
			.has-background-light-background-color[class],
			.has-background-light-background-color.has-background-dim[class]', 'color' ),
	// Background-color
	array( '.has-foreground-background-color[class],
			.has-foreground-background-color.has-background-dim[class]', 'background-color' ),

	// Text-color darkened
	array( '.has-foreground-dark-color[class],
			.has-foreground-dark-color.has-background-dim[class]', 'color', '-1' ),
	// Background-color darkened
	array( '.has-foreground-dark-background-color[class],
			.has-foreground-dark-background-color.has-background-dim[class]', 'background-color', '-1' ),

	// Text-color brightened
	array( '.has-foreground-light-color[class],
			.has-foreground-light-color.has-background-dim[class]', 'color', '+2' ),
	// Background-color brightened
	array( '.has-foreground-light-background-color[class],
			.has-foreground-light-background-color.has-background-dim[class]', 'background-color', '+2' ),

	/**
	 * Gray (Same as text color)
	 */
	// Text-color lightened
	array( '.a8c-posts-list__item .a8c-posts-list-item__meta,
			.entry-footer,
			.entry-meta,
			.site-branding,
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
			figcaption,
			body:not(.fse-enabled) .site-description', 'color', '+1' ),
			
	// Border-color darkened
	array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'border-color', '-1' ),

), __( 'Text Color' ) );

// Accent Color
// $config-global--color-secondary-default
add_color_rule( 'fg1', '#F25F70', array(

	// Background-color
	array( '.a8c-posts-list__view-all,
			.button,
			.main-navigation #toggle:focus + #toggle-menu,
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-background-color),
			.wp-block-file .wp-block-file__button,
			.wp-block-file a.wp-block-file__button,
			.wp-block-file__button,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept,
			body:not(.fse-enabled) #site-navigation,
			body:not(.fse-enabled) .main-navigation,
			button,
			button[data-load-more-btn],
			input[type="submit"],
			.main-navigation > div > ul > li > .sub-menu,
			body:not(.fse-enabled) #site-navigation.main-navigation ul ul,
			body:not(.fse-enabled) .main-navigation.main-navigation ul ul,
			body:not(.fse-enabled) #site-navigation.main-navigation ul ul li:hover,
			body:not(.fse-enabled) .main-navigation.main-navigation ul ul li:hover', 'background-color' ),

	// Text-color
	array( '#masthead .social-navigation ul li a,
			.a8c-posts-list__item .a8c-posts-list-item__meta a:active,
			.a8c-posts-list__item .a8c-posts-list-item__meta a:hover,
			.comment-meta .comment-metadata a:active,
			.comment-meta .comment-metadata a:hover,
			.entry-footer a:active,
			.entry-footer a:hover,
			.entry-meta a:active,
			.entry-meta a:hover,
			.main-navigation a:hover,
			.site-title a:hover,
			.social-navigation a:hover,
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):active,
			.wp-block-button.is-style-outline.wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline.wp-block-button__link:not(.has-text-color):active,
			.wp-block-coblocks-column a,
			.wp-block-newspack-blocks-homepage-articles article .cat-links a:active,
			.wp-block-newspack-blocks-homepage-articles article .cat-links a:hover,
			.wp-block-newspack-blocks-homepage-articles article .entry-meta a:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-meta a:hover,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:hover,
			.wp-block-newspack-blocks-homepage-articles article .more-link:active,
			.wp-block-newspack-blocks-homepage-articles article .more-link:focus,
			.wp-block-newspack-blocks-homepage-articles article .more-link:hover,
			.wp-block-quote cite,
			.wp-block-quote[style*="text-align:center"] cite,
			.wp-block-quote[style*="text-align:right"] cite,
			a:hover', 'color' ),

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

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-secondary-color[class],
			.has-secondary-color.has-background-dim[class]', 'color' ),

	// Background-color
	array( '.has-secondary-background-color[class],
			.has-secondary-background-color.has-background-dim[class]', 'background-color' ),
			
	// Text-color lightened
	array( '.fse-template-part.fse-header .main-navigation div ul li a::after,
			body:not(.fse-enabled) #site-navigation.main-navigation ul li a::after,
			body:not(.fse-enabled) .main-navigation.main-navigation ul li a::after', 'color', '+1' ),

	/**
	 * Hovers
	 */
	// Background-color
	array( '.a8c-posts-list__view-all:focus,
			.a8c-posts-list__view-all:hover,
			.button:focus,
			.button:hover,
			.has-focus.a8c-posts-list__view-all,
			.has-focus.button,
			.has-focus.wp-block-button__link,
			.has-focus.wp-block-file__button,
			.wp-block-button__link:focus,
			.wp-block-button__link:hover,
			.wp-block-file a.wp-block-file__button:focus,
			.wp-block-file a.wp-block-file__button:hover,
			.wp-block-file a.wp-block-file__button:visited,
			.wp-block-file__button:focus,
			.wp-block-file__button:hover,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept:focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept:hover,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.has-focus.accept,
			button.has-focus,
			button:focus,
			button:hover,
			input.has-focus[type="submit"],
			input:focus[type="submit"],
			input:hover[type="submit"]', 'background-color', '-2' ),
	// Text-color
	array( '#masthead .social-navigation ul li a:hover,
			.footer-navigation .footer-menu a:hover,
			.site-info a:hover,
			.wp-block-button.is-style-outline .wp-block-button__link.has-focus,
			.wp-block-button.is-style-outline .wp-block-button__link:focus,
			.wp-block-button.is-style-outline .wp-block-button__link:hover,
			.wp-block-button.is-style-outline.wp-block-button__link.has-focus,
			.wp-block-button.is-style-outline.wp-block-button__link:focus,
			.wp-block-button.is-style-outline.wp-block-button__link:hover,
			.wp-block-coblocks-column a:hover', 'color', '-2' ),


), __( 'Secondary Color' ) );

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
