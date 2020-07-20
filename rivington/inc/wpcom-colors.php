<?php
/* Custom Colors: Rivington */

// Background Color
// $config-global--color-background-default
add_color_rule( 'bg', '#060f29', array(

	// Background-color
	array( '.screen-reader-text:focus,
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept,
			.main-navigation > div > ul > li > .sub-menu,
			.site-header .main-navigation > div > ul > li:hover li > a,
			.site-header .main-navigation > div > ul > li.focus li > a,
			.site-header .main-navigation > div > ul > li.current-menu-item li > a,
			.site-header .main-navigation > div > ul > li.current-menu-item li.current-menu-item > a,
			.site-header .main-navigation > div > ul > li.current-menu-item li.focus > a,
			.site-header .main-navigation > div > ul > li.current-menu-item li:hover > a,
			.site-header .main-navigation > div > ul > li.focus li.current-menu-item > a,
			.site-header .main-navigation > div > ul > li.focus li.focus > a,
			.site-header .main-navigation > div > ul > li.focus li:hover > a,
			.site-header .main-navigation > div > ul > li:hover li.current-menu-item > a,
			.site-header .main-navigation > div > ul > li:hover li.focus > a,
			.site-header .main-navigation > div > ul > li:hover li:hover > a', 'background-color' ),

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
			.wp-block-button__link,
			.wp-block-button__link:focus,
			.wp-block-button__link:hover,
			.wp-block-button.is-style-outline.wp-block-button__link,
			.wp-block-button.is-style-outline .wp-block-button__link,
			.wp-block-file .wp-block-file__button,
			.wp-block-file a.wp-block-file__button:active,
			.wp-block-file a.wp-block-file__button:focus,
			.wp-block-file a.wp-block-file__button:hover,
			.wp-block-file a.wp-block-file__button:visited,
			.wp-block-file__button,
			.wp-block-file__button:focus,
			.wp-block-file__button:hover,
			.wp-block-pullquote.is-style-solid-color,
			table.is-style-stripes tbody tr:nth-child(odd),
			.wp-block-table.is-style-stripes tbody tr:nth-child(odd),
			.wp-block-cover-image:not([class="has-background-background-color"]) .wp-block-cover-image-text,
			.wp-block-cover-image:not([class="has-background-background-color"]) .wp-block-cover-text,
			.wp-block-cover-image:not([class="has-background-background-color"]) .wp-block-cover__inner-container,
			.wp-block-cover:not([class="has-background-background-color"]) .wp-block-cover-image-text,
			.wp-block-cover:not([class="has-background-background-color"]) .wp-block-cover-text,
			.wp-block-cover:not([class="has-background-background-color"]) .wp-block-cover__inner-container,
			.wp-block-cover.has-background-dim,
			.wp-block-cover-image.has-background-dim,
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
			input:hover[type="submit"]', 'color' ),

	/**
	 * Utility Classes
	 */
	// Text-color
	// Needs contrast against `link` (primary)
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
			textarea,
			.main-navigation > div > ul > li > .sub-menu > li > a,
			.main-navigation > div > ul > li > .sub-menu > li:first-child > a,
			.main-navigation > div > ul > li > .sub-menu > li:last-child > a', 'border-color', '-1' ),
	// Border-top-color
	array( '.comment-list .children > li,
			.comment-list > li,
			.wp-block-pullquote', 'border-top-color', '-1' ),
	// Border-bottom-color
	array( '.comment-list,
			.wp-block-pullquote,
			hr,
			hr.wp-block-separator', 'border-bottom-color', '-1' ),
	// Color
	array( 'hr.wp-block-separator.is-style-dots:before', 'color', '-1' ),

), __( 'Background Color' ) );

// Link Color
// $config-global--color-primary-default
add_color_rule( 'link', '#CAAB57', array(

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
			input[type="submit"]', 'background-color' ),

	// Text-color
	array( '.a8c-posts-list .a8c-posts-list-item__title a:active,
			.a8c-posts-list .a8c-posts-list-item__title a:focus,
			.a8c-posts-list .a8c-posts-list-item__title a:hover,
			.entry-title a:active,
			.entry-title a:focus,
			.entry-title a:hover,
			.main-navigation a:hover,
			.page-title a:active,
			.page-title a:focus,
			.page-title a:hover,
			.site-title a:hover,
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):active,
			.wp-block-button.is-style-outline.wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline.wp-block-button__link:not(.has-text-color):active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:focus,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:hover,
			a,
			.site-header .main-navigation > div > ul > li.current-menu-item li > a,
			.site-header .main-navigation > div > ul > li.focus li > a,
			.site-header .main-navigation > div > ul > li:hover li > a,
			.site-header .main-navigation > div > ul > li:hover > a,
			.site-header .main-navigation > div > ul > li.focus > a,
			.site-header .main-navigation > div > ul > li.current-menu-item > a,
			.site-header .main-navigation > div > ul > li > .sub-menu > li:hover > a', 'color' ),

	// Border color left
	array( '.wp-block-quote', 'border-left-color' ),

	// Border color right
	array( '.wp-block-quote[style*="text-align: right"],
			.wp-block-quote[style*="text-align:right"]', 'border-right-color' ),

	// Border color bottom
	array( '.site-header .main-navigation > div > ul > li.current-menu-item > ul:before,
			.site-header .main-navigation > div > ul > li.focus > ul:before,
			.site-header .main-navigation > div > ul > li:hover > ul:before', 'border-bottom-color' ),

	/**
	 * Utility Classes
	 */
	// Background-color
	array( '.has-primary-background-color[class]', 'background-color' ),
	// Text-color
	array( '.has-primary-color[class]', 'color' ),

), __( 'Link Color' ) );

// Text Color
// $config-global--color-foreground-default
add_color_rule( 'txt', '#f2f2f2', array(

	// Text-color
	array( '.comment-meta .comment-metadata,
			.main-navigation,
			.main-navigation a,
			.main-navigation a:link,
			.main-navigation a:visited,
			.screen-reader-text:focus,
			.site-branding,
			.site-title,
			.social-navigation a,
			.wp-block-code,
			.wp-block-code pre,
			.wp-block-pullquote,
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept,
			.site-header .main-navigation > div > ul > li.current-menu-item li > a,
			.site-header .main-navigation > div > ul > li.focus li > a,
			.site-header .main-navigation > div > ul > li:hover li > a', 'color' ),

	// Background-color
	array( '.wp-block-cover.has-background-dim:not([class*="background-color"]),
			.wp-block-cover-image.has-background-dim:not([class*="background-color"]),
			.has-foreground-background-color[class],
			table.is-style-stripes tbody tr:nth-child(odd),
			.wp-block-table.is-style-stripes tbody tr:nth-child(odd),
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'background-color' ),

	/**
	 * Utility Classes
	 */
	// Foreground
	array( '.has-foreground-color[class]', 'color' ),
	array( '.has-foreground-background-color[class]', 'background-color' ),

	// Text color
	array( '.has-background-background-color[class],
			.has-background-light-background-color[class],
			.has-background-dark-background-color[class]', 'color' ),

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
			.comment-notes,
			.entry-footer,
			.entry-meta,
			.footer-navigation .footer-menu,
			.has-foreground-light-color[class],
			.post-navigation .meta-nav,
			.site-info,
			.widget_archive ul li,
			.widget_categories ul li,
			.widget_meta ul li,
			.widget_nav_menu ul li,
			.widget_pages ul li,
			.widget_recent_comments ul li,
			.widget_recent_entries ul li,
			.widget_rss ul li,
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

	/**
	 * Hover States
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
			input:hover[type="submit"]', 'background-color', 0.7 ),
	// Text-color
	array( '.a8c-posts-list__item .a8c-posts-list-item__meta a:active,
			.a8c-posts-list__item .a8c-posts-list-item__meta a:hover,
			.comment-meta .comment-metadata a:active,
			.comment-meta .comment-metadata a:hover,
			.entry-footer a:active,
			.entry-footer a:hover,
			.entry-meta a:active,
			.entry-meta a:hover,
			.footer-navigation .footer-menu a:hover,
			.site-info a:hover,
			.social-navigation a:hover,
			.wp-block-button.is-style-outline .wp-block-button__link.has-focus,
			.wp-block-button.is-style-outline .wp-block-button__link:focus,
			.wp-block-button.is-style-outline .wp-block-button__link:hover,
			.wp-block-button.is-style-outline.wp-block-button__link.has-focus,
			.wp-block-button.is-style-outline.wp-block-button__link:focus,
			.wp-block-button.is-style-outline.wp-block-button__link:hover,
			.wp-block-newspack-blocks-homepage-articles article .cat-links a:active,
			.wp-block-newspack-blocks-homepage-articles article .cat-links a:focus,
			.wp-block-newspack-blocks-homepage-articles article .cat-links a:hover,
			.wp-block-newspack-blocks-homepage-articles article .entry-meta a:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-meta a:focus,
			.wp-block-newspack-blocks-homepage-articles article .entry-meta a:hover,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:hover,
			.wp-block-newspack-blocks-homepage-articles article .more-link:active,
			.wp-block-newspack-blocks-homepage-articles article .more-link:focus,
			.wp-block-newspack-blocks-homepage-articles article .more-link:hover,
			a:hover', 'color', 0.7 ),
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
			textarea:focus', 'border-color', 0.7 ),

), __( 'Text Color' ) );

// Accent Color
// $config-global--color-secondary-default
add_color_rule( 'fg1', '#EE4266', array(

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
function rivington_custom_colors_extra_css() { ?>
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
	textarea {
		border-width: 1px;
	}

	@media screen and (min-width: 560px) {
		.main-navigation > div > ul > li > .sub-menu > li:first-child > a {
			border-top: 1px solid;
		}
		.main-navigation > div > ul > li > .sub-menu > li > a {
			border-left: 1px solid;
			border-right: 1px solid;
		}
		.main-navigation > div > ul > li > .sub-menu > li:last-child > a {
			border-bottom: 1px solid;
		}
		.site-header .main-navigation > div > ul > li.current-menu-item > ul::before,
		.site-header .main-navigation > div > ul > li.focus > ul::before,
		.site-header .main-navigation > div > ul > li:hover > ul::before {
			opacity: 0;
		}
	}
<?php }
add_theme_support( 'custom_colors_extra_css', 'rivington_custom_colors_extra_css' );

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
