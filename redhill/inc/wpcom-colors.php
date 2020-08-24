<?php
/* Custom Colors: Redhill */

// Background Color
// $config-global--color-background-default
add_color_rule( 'bg', '#FFFFFF', array(

	// Background-color
	array( '.screen-reader-text:focus,
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept,
			.main-navigation > div > ul > li > .sub-menu', 'background-color' ),

	// Text-color
	array( '.a8c-posts-list-item__featured span,
			.a8c-posts-list__view-all,
			.a8c-posts-list__view-all:focus,
			.a8c-posts-list__view-all:hover,
			.button,
			.button:focus,
			.button:hover,
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
			input[type="submit"],
			.main-navigation > div > ul > li.current-menu-item > a,
			.main-navigation > div > ul > li.current-menu-item li > a,
			.main-navigation > div > ul > li.focus > a,
			.main-navigation > div > ul > li.focus li > a,
			.main-navigation > div > ul > li:hover > a,
			.main-navigation > div > ul > li:hover li > a', 'color' ),

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
	array( '.has-background-background-color[class]', 'background-color' ),
	// Background-color darkened
	array( '.has-background-dark-background-color[class]', 'background-color', '-1' ),
	// Background-color lightened
	array( '.has-background-light-background-color[class]', 'background-color', '+1' ),

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
			textarea,
			', 'border-color', '-1' ),
	// Border-top-color
	array( '.comment-list .children > li,
			.comment-list > li,
			.entry-footer,
			.wp-block-pullquote,
			#jp-relatedposts h3.jp-relatedposts-headline em:before', 'border-top-color', '-1' ),
	// Border-bottom-color
	array( '.comment-list,
			.wp-block-pullquote,
			hr,
			hr.wp-block-separator', 'border-bottom-color', '-1' ),
	// Color
	array( 'hr.wp-block-separator.is-style-dots:before', 'color', '-1' ),
	// Background-color
	array( '.comments-area:before,
			.post-navigation:before,
			.pagination:before,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept.has-focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept:focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept:hover', 'background-color', '-1' ),


), __( 'Background Color' ) );

// Link Color
// $config-global--color-primary-default
add_color_rule( 'link', '#CA2017', array(

	// Background-color
	array( '.a8c-posts-list-item__featured span,
			.a8c-posts-list__view-all,
			.button,
			.main-navigation #toggle:focus + #toggle-menu,
			.sticky-post,
			.wp-block-button__link,
			.wp-block-file .wp-block-file__button,
			.wp-block-file__button,
			.wp-block-pullquote.is-style-solid-color,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept,
			button,
			button[data-load-more-btn],
			input[type="submit"],
			.main-navigation > div > ul > li.current-menu-item > a,
			.main-navigation > div > ul > li.current-menu-item li.current-menu-item > a,
			.main-navigation > div > ul > li.current-menu-item li.focus > a,
			.main-navigation > div > ul > li.current-menu-item li:hover > a,
			.main-navigation > div > ul > li.focus > a,
			.main-navigation > div > ul > li.focus li.current-menu-item > a,
			.main-navigation > div > ul > li.focus li.focus > a,
			.main-navigation > div > ul > li.focus li:hover > a,
			.main-navigation > div > ul > li:hover > a,
			.main-navigation > div > ul > li:hover li.current-menu-item > a,
			.main-navigation > div > ul > li:hover li.focus > a,
			.main-navigation > div > ul > li:hover li:hover > a', 'background-color' ),

	// Text-color
	array( '.a8c-posts-list-item__title a:active,
			.a8c-posts-list-item__title a:focus,
			.a8c-posts-list-item__title a:hover,
			.comment-meta .comment-metadata a:active,
			.comment-meta .comment-metadata a:focus,
			.comment-meta .comment-metadata a:hover,
			.comment-navigation a:active,
			.comment-navigation a:focus,
			.comment-navigation a:hover,
			.footer-navigation .footer-menu a:hover,
			.main-navigation a:hover,
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
			.site-info a:hover,
			.site-title a:hover,
			.social-navigation a,
			.wp-block-button.is-style-outline,
			.wp-block-button.is-style-outline .wp-block-button__link,
			.wp-block-button.is-style-outline .wp-block-button__link:active,
			.wp-block-button.is-style-outline:active,
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

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-primary-color[class]', 'color' ),
	// Background-color
	array( '.has-primary-background-color[class],
			.has-primary-background-color.has-background-dim[class]', 'background-color' ),

), __( 'Link Color' ) );

// Text Color (Gray)
// $config-global--color-foreground-default
add_color_rule( 'txt', '#222222', array(

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
			.main-navigation,
			.main-navigation a,
			.main-navigation a:link,
			.main-navigation a:visited,
			.post-navigation a,
			.screen-reader-text:focus,
			.social-navigation a:hover,
			.wp-block-button.is-style-outline .wp-block-button__link.has-focus,
			.wp-block-button.is-style-outline .wp-block-button__link:focus,
			.wp-block-button.is-style-outline .wp-block-button__link:hover,
			.wp-block-button.is-style-outline.wp-block-button__link.has-focus,
			.wp-block-button.is-style-outline.wp-block-button__link:focus,
			.wp-block-button.is-style-outline.wp-block-button__link:hover,
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
	array( '.a8c-posts-list__view-all:focus,
			.a8c-posts-list__view-all:hover,
			.button:focus,
			.button:hover,
			.has-focus.a8c-posts-list__view-all,
			.has-focus.button,
			.has-focus.wp-block-button__link,
			.has-focus.wp-block-file__button,
			.has-foreground-background-color[class],
			.wp-block-button__link:focus,
			.wp-block-button__link:hover,
			.wp-block-cover,
			.wp-block-cover-image,
			.wp-block-cover-image.has-background-dim,
			.wp-block-file__button:focus,
			.wp-block-file__button:hover,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept:focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept:hover,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.has-focus.accept,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative,
			button.has-focus,
			button:focus,
			button:hover,
			input.has-focus[type="submit"],
			input:focus[type="submit"],
			input:hover[type="submit"],
			.main-navigation > div > ul > li.current-menu-item li > a,
			.main-navigation > div > ul > li.focus li > a,
			.main-navigation > div > ul > li:hover li > a', 'background-color' ),

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
	array( '.site', 'border-top-color' ),

	/**
	 * Utility Classes
	 */
	// Foreground
	array( '.has-background-background-color[class],
			.has-background-background-color.has-background-dim[class],
			.has-background-dark-background-color[class],
			.has-background-dark-background-color.has-background-dim[class],
			.has-background-light-background-color[class],
			.has-background-light-background-color.has-background-dim[class],
			.has-foreground-color[class]', 'color' ),
	// Background-color
	array( '.has-background-dim[class],
			.has-foreground-background-color[class],
			.has-foreground-background-color.has-background-dim[class]', 'background-color' ),

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
			.comment-meta .comment-metadata,
			.comment-navigation a,
			.entry-footer,
			.entry-meta,
			.footer-navigation .footer-menu,
			.has-foreground-light-color[class],
			.pagination .nav-links > *,
			.post-navigation .meta-nav,
			.site-branding,
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
			.site-title', 'color' ),
			// Border-color
			array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'border-color' ),

), __( 'Text Color' ) );

// Accent Color
// $config-global--color-secondary-default
add_color_rule( 'fg1', '#007FDB', array(

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-secondary-color[class]', 'color' ),

	// Background-color
	array( '.has-secondary-background-color[class]', 'background-color' ),

), __( 'Secondary Color' ) );

/**
 * Custom CSS
 */
function redhill_custom_colors_extra_css() { ?>
	@media screen and (max-width: 560px) {
		/* Prevent background color hovers on mobile */
		.site-header .main-navigation > div,
		.site-header .main-navigation > div > ul > li.current-menu-item > a,
		.site-header .main-navigation > div > ul > li.current-menu-item li.current-menu-item > a,
		.site-header .main-navigation > div > ul > li.current-menu-item li.focus > a,
		.site-header .main-navigation > div > ul > li.current-menu-item li:hover > a,
		.site-header .main-navigation > div > ul > li.focus > a,
		.site-header .main-navigation > div > ul > li.focus li.current-menu-item > a,
		.site-header .main-navigation > div > ul > li.focus li.focus > a,
		.site-header .main-navigation > div > ul > li.focus li:hover > a,
		.site-header .main-navigation > div > ul > li:hover > a,
		.site-header .main-navigation > div > ul > li:hover li.current-menu-item > a,
		.site-header .main-navigation > div > ul > li:hover li.focus > a,
		.site-header .main-navigation > div > ul > li:hover li:hover > a,
		.site-header .main-navigation > div > ul > li:hover li > a {
			background: transparent;
			color: inherit;
		}
		.site-header .main-navigation > div > ul > li.current-menu-item li.focus > a,
		.site-header .main-navigation > div > ul > li.current-menu-item li:hover > a,
		.site-header .main-navigation > div > ul > li.focus > a,
		.site-header .main-navigation > div > ul > li.focus li.current-menu-item > a,
		.site-header .main-navigation > div > ul > li.focus li.focus > a,
		.site-header .main-navigation > div > ul > li.focus li:hover > a,
		.site-header .main-navigation > div > ul > li:hover > a,
		.site-header .main-navigation > div > ul > li:hover li.current-menu-item > a,
		.site-header .main-navigation > div > ul > li:hover li.focus > a,
		.site-header .main-navigation > div > ul > li:hover li:hover > a {
			text-decoration: underline;
		}
	}
<?php }
add_theme_support( 'custom_colors_extra_css', 'redhill_custom_colors_extra_css' );

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
