<?php
/* Custom Colors: Dalston */

// Background Color
// $config-global--color-background-default
add_color_rule( 'bg', '#FFFFFF', array(

	// Background-color
	array( '.screen-reader-text:focus,
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept,
			.main-navigation > div > ul > li > .sub-menu,
			.sticky-post,
			.site-header .main-navigation > div > ul > li.current-menu-item li > a,
			.site-header .main-navigation > div > ul > li.focus li > a,
			.site-header .main-navigation > div > ul > li:hover li > a,
			.site-header .main-navigation > div > ul > li:hover li:hover > a, .site-header .main-navigation > div > ul > li:hover li.focus > a, .site-header .main-navigation > div > ul > li:hover li.current-menu-item > a, 
			.site-header .main-navigation > div > ul > li.focus li:hover > a, .site-header .main-navigation > div > ul > li.focus li.focus > a, 
			.site-header .main-navigation > div > ul > li.focus li.current-menu-item > a, .site-header .main-navigation > div > ul > li.current-menu-item li:hover > a, 
			.site-header .main-navigation > div > ul > li.current-menu-item li.focus > a, 
			.site-header .main-navigation > div > ul > li.current-menu-item li.current-menu-item > a,
			.site-header .main-navigation > div > ul > li .sub-menu a,
			.main-navigation > div > ul > li.current-menu-item li.current-menu-item > a,
			.mobile-nav-side .site-header #site-navigation.main-navigation .woocommerce-menu-container, 
			.mobile-nav-side .site-header #site-navigation.main-navigation > div', 'background-color' ),

	// Text-color
	array( '.a8c-posts-list-item__featured span,
			.a8c-posts-list__view-all,
			.a8c-posts-list__view-all:focus,
			.a8c-posts-list__view-all:hover,
			.a8c-posts-list__view-all.has-focus,
			.entry .entry-content .wp-block-media-text,
			.wp-block-search .wp-block-search__button,
			.wp-block-search .wp-block-search__button:hover,
			.wp-block-search .wp-block-search__button:not(.has-background):hover,
			.wp-block-search .wp-block-search__button:focus,
			.button,
			.button:focus,
			.button:hover,
			.button.has-focus,
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-text-color).has-focus,
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-text-color),
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-text-color):focus,
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-text-color):hover,
			.wp-block-file .wp-block-file__button,
			.wp-block-file .wp-block-file__button.has-focus,
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
			input[type="submit"]', 'color' ),

	// Border-color
	array( '.entry .entry-content .wp-block-media-text.is-style-inset-borders:before', 'border-color' ),

	/**
	 * Grays
	 * Uses a slightly darker color
	 */
	// Border-color
	array( '.wp-block-code,
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
			textarea', 'border-color', '-1' ),
	// Border-top-color
	array( '.comment-list .children > li,
			.comment-list > li', 'border-top-color', '-1' ),
	// Border-bottom-color
	array( '.comment-list,
			hr,
			hr.wp-block-separator', 'border-bottom-color', '-1' ),
	// Color
	array( 'hr.wp-block-separator.is-style-dots:before', 'color', '-1' ),

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-primary-background-color[class],
			.has-secondary-background-color[class],
			.has-foreground-background-color[class],
			.has-foreground-dark-background-color[class],
			.has-foreground-light-background-color[class],
			.has-background-color[class],
			.has-background-dark-color[class],
			.has-background-light-color[class]', 'color' ),
	// Background-color
	array( '.has-background-background-color[class],
			.has-background-background-color[class].has-background-dim', 'background-color' ),

	// Text-color darkened
	array( '.has-background-dark-color[class]', 'color', '-1' ),
	// Background-color darkened
	array( '.has-background-dark-background-color[class],
			.has-background-dark-background-color[class].has-background-dim', 'background-color', '-1' ),

	// Text-color lightened
	array( '.has-background-light-color[class]', 'color', '+1' ),
	// Background-color lightened
	array( '.has-background-light-background-color[class],
			.has-background-light-background-color[class].has-background-dim', 'background-color', '+1' ),

), __( 'Background Color' ) );

// Link Color
// $config-global--color-primary-default
add_color_rule( 'link', '#0073AA', array(

	// Background-color
	array( '.a8c-posts-list-item__featured span,
			.a8c-posts-list__view-all,
			.button,
			.wp-block-search .wp-block-search__button,
			.wp-block-search .wp-block-search__button:hover,
			.wp-block-search .wp-block-search__button:not(.has-background):hover,
			.wp-block-search .wp-block-search__button:focus,
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-background),
			.wp-block-file .wp-block-file__button,
			.wp-block-file__button,
			.wp-block-pullquote.is-style-solid-color,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept,
			button,
			button[data-load-more-btn],
			input[type="submit"]', 'background-color' ),
			
	// Background-color darkened
	array( '.a8c-posts-list__view-all:focus,
			.a8c-posts-list__view-all:hover,
			.button:focus,
			.button:hover,
			.has-focus.a8c-posts-list__view-all,
			.has-focus.button,
			.wp-block-button__link.has-focus,
			.wp-block-file__button.has-focus,
			.main-navigation #toggle:focus + #toggle-menu,
			.wp-block-button__link:focus,
			.wp-block-button__link:hover,
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
			input:hover[type="submit"]', 'background-color', '-1' ),

	// Text-color
	array( '.a8c-posts-list-item__featured span,
			.main-navigation a,
			.main-navigation a:link,
			.main-navigation a:visited,
			.site-title a:hover,
			.social-navigation a:hover,
			.sticky-post,
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:focus,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:hover,
			a,
			.site-header .main-navigation > div > ul > li.current-menu-item li > a,
			.site-header .main-navigation > div > ul > li.focus li > a,
			.site-header .main-navigation > div > ul > li:hover li > a,
			.main-navigation > div > ul > li > .sub-menu', 'color' ),
			
	// Text-color darkened
	array( '.a8c-posts-list__item .a8c-posts-list-item__meta a:active,
			.a8c-posts-list__item .a8c-posts-list-item__meta a:hover,
			.comment-meta .comment-metadata a:active,
			.comment-meta .comment-metadata a:hover,
			.entry-footer a:active,
			.entry-footer a:hover,
			.entry-meta a:active,
			.entry-meta a:hover,
			.footer-navigation .footer-menu a:hover,
			.main-navigation a:hover,
			.site-info a:hover,
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color).has-focus,
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):focus,
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):hover,
			.wp-block-newspack-blocks-homepage-articles article .cat-links a:active,
			.wp-block-newspack-blocks-homepage-articles article .cat-links a:hover,
			.wp-block-newspack-blocks-homepage-articles article .entry-meta a:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-meta a:hover,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:hover,
			a:hover', 'color', '-1' ),

	// Border color
	array( '.main-navigation > div > ul > li > .sub-menu', 'border-color' ),
	
	// Border color left
	array( '.wp-block-quote', 'border-left-color' ),

	// Border color right
	array( '.wp-block-quote[style*="text-align: right"],
			.wp-block-quote[style*="text-align:right"]', 'border-right-color' ),

	// Border color bottom
	array( '.site-header .main-navigation > div > ul > li.current-menu-item > ul:before,
			.site-header .main-navigation > div > ul > li.focus > ul:before,
			.site-header .main-navigation > div > ul > li:hover > ul:before', 'border-bottom-color' ),

	// Border color darkened
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
			textarea:focus', 'border-color', '-1' ),

	/**
	 * Utility Classes
	 */
	// Background-color
	array( '.has-primary-background-color[class],
			.has-primary-background-color[class].has-background-dim', 'background-color' ),

	// Text-color
	array( '.has-primary-color[class]', 'color' ),

), __( 'Link Color' ) );

// Text Color
// $config-global--color-foreground-default
add_color_rule( 'txt', '#1e1e1e', array(

	// Text-color
	array( '.comment-meta .comment-metadata,
			.main-navigation,
			.screen-reader-text:focus,
			.wp-block-code,
			.wp-block-code pre,
			.wp-block-pullquote,
			body,
			.wp-block-table.is-style-stripes tbody tr:nth-child(odd),
			table.is-style-stripes tbody tr:nth-child(odd),
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept,
			.site-header .main-navigation > div > ul > li > a:hover,
			.site-header .main-navigation > div > ul > li:hover li:hover > a, 
			.site-header .main-navigation > div > ul > li:hover li.focus > a, 
			.site-header .main-navigation > div > ul > li:hover li.current-menu-item > a, 
			.site-header .main-navigation > div > ul > li.focus li:hover > a, 
			.site-header .main-navigation > div > ul > li.focus li.focus > a, 
			.site-header .main-navigation > div > ul > li.focus li.current-menu-item > a, 
			.site-header .main-navigation > div > ul > li.current-menu-item li:hover > a, 
			.site-header .main-navigation > div > ul > li.current-menu-item li.focus > a, 
			.site-header .main-navigation > div > ul > li.current-menu-item li.current-menu-item > a', 'color' ),

	// Text-color darkened
	array( '.has-foreground-dark-color,
			.site-branding,
			.site-description,
			.site-title,
			.social-navigation a', 'color', '-1' ),
			
	// Text-color lightened
	array( '.a8c-posts-list__item .a8c-posts-list-item__meta,
			.entry-footer,
			.entry-meta,
			.footer-navigation .footer-menu,
			.has-foreground-light-color,
			.site-info,
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
			figcaption', 'color', '+2' ),

	// Background-color
	array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'background-color' ),
	
	// Text-color darkened
	array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'border-color', '-1' ),

	/**
	 * Utility Classes
	 */
	// Foreground
	array( '.has-background-background-color[class],
			.has-background-background-color[class].has-background-dim,
			.has-background-dark-background-color[class],
			.has-background-dark-background-color[class].has-background-dim,
			.has-background-light-background-color[class],
			.has-background-light-background-color[class].has-background-dim,
			.has-foreground-color[class]', 'color' ),

	// Background
	array( '.has-background-dim,
			.has-foreground-background-color[class],
			.has-foreground-background-color[class].has-background-dim', 'background-color' ),

	// Text-color darkened
	array( '.has-foreground-dark-color[class]', 'color', '-1' ),
	// Background-color darkened
	array( '.has-foreground-dark-background-color[class]', 'background-color', '-1' ),

	// Text-color brightened
	array( '.has-foreground-light-color[class]', 'color', '+2' ),
	// Background-color brightened
	array( '.has-foreground-light-background-color[class],
			.has-foreground-light-background-color[class].has-background-dim', 'background-color', '+2' ),

	/**
	 * Gray (Same as text color)
	 */
	// Text-color
	array( '.a8c-posts-list__item .a8c-posts-list-item__meta,
			.entry-footer,
			.entry-meta,
			.footer-navigation .footer-menu,
			.has-foreground-light-color[class],
			.site-info,
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
			.site-branding,
			.site-description,
			.site-title,
			.social-navigation a', 'color' ),
	// Border-color
	array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'border-color' ),

), __( 'Text Color' ) );

// Accent Color
// $config-global--color-secondary-default
add_color_rule( 'fg1', '#0d1b24', array(

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-secondary-color[class]', 'color' ),

	// Background-color
	array( '.has-secondary-background-color[class],
			input:hover[type="submit"],
			.main-navigation .button:focus,
			.main-navigation .button:hover,
			.main-navigation #toggle:focus + #toggle-menu,
			.has-secondary-background-color', 'background-color' ),

), __( 'Secondary Color' ) );

/**
 * Custom CSS
 */
function dalston_custom_colors_extra_css() { ?>

	.wp-block-button.is-style-outline .wp-block-button__link.has-text-color {
		color: currentColor;
	}

	@media screen and (min-width: 560px) {
		.main-navigation > div > ul > li > .sub-menu {
			border: 1px solid;
		}
		.site-header .main-navigation > div > ul > li.current-menu-item > ul::before,
		.site-header .main-navigation > div > ul > li.focus > ul::before,
		.site-header .main-navigation > div > ul > li:hover > ul::before {
			border: 0;
		}
 	}
<?php }
add_theme_support( 'custom_colors_extra_css', 'dalston_custom_colors_extra_css' ); 

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
