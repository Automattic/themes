<?php
/* Custom Colors: Hever */

// Background Color
// $config-global--color-background-default
add_color_rule( 'bg', '#FFFFFF', array(

	// Background-color
	array( '.screen-reader-text:focus,
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept,
			.main-navigation > div > ul > li > .sub-menu,
			.site-header .main-navigation > div > ul > li.current-menu-item li > a,
			.site-header .main-navigation > div > ul > li.focus li > a,
			.site-header .main-navigation > div > ul > li:hover li > a,
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
			.wp-block-button:not(.is-style-outline) .wp-block-button__link,
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:focus,
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:hover,
			.wp-block-cover-image.has-background-dim,
			.wp-block-cover.has-background-dim,
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
			input[type="submit"]', 'color' ),
			
	// Background-color darkened
	array( '.singular .hentry .entry-header .entry-title:before, 
			.singular .hentry .entry-header .entry-title:after, 
			.page-title:before, 
			.page-title:after', 'background-color', '-1' ),

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-background-dim[class],
			.has-primary-background-color[class],
			.has-secondary-background-color[class],
			.has-foreground-background-color[class],
			.has-foreground-dark-background-color[class],
			.has-foreground-light-background-color[class],
			.has-background-color[class],
			.has-primary-background-color.has-background-dim[class],
			.has-secondary-background-color.has-background-dim[class],
			.has-foreground-background-color.has-background-dim[class],
			.has-foreground-dark-background-color.has-background-dim[class],
			.has-foreground-light-background-color.has-background-dim[class],
			.has-background-color.has-background-dim[class]', 'color' ),
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
			.main-navigation > div > ul > li > .sub-menu > li > a,
			.main-navigation > div > ul > li > .sub-menu > li > a:first-child,
			.main-navigation > div > ul > li > .sub-menu > li > a:last-child', 'border-color', '-1' ),
	// Border-top-color
	array( '.comment-list .children > li,
			.comment-list > li,
			.widget_archive li,
			.widget_authors li,
			.widget_categories li,
			.widget_jp_blogs_i_follow li,
			.widget_links li,
			.widget_meta li,
			.widget_nav_menu li,
			.widget_pages li,
			.widget_recent_comments li,
			.widget_recent_entries li,
			.widget_rss li,
			.widget_rss_links li,
			.widget_top-click li,
			.widget_top-posts li,
			.widget_upcoming_events_widget li,
			.wp-block-pullquote', 'border-top-color', '-1' ),
	// Border-bottom-color
	array( '.comment-list,
			.widget_archive ul,
			.widget_authors ul,
			.widget_categories ul,
			.widget_jp_blogs_i_follow ul,
			.widget_links ul,
			.widget_meta ul,
			.widget_nav_menu ul,
			.widget_pages ul,
			.widget_recent_comments ul,
			.widget_recent_entries ul,
			.widget_rss ul,
			.widget_rss_links ul,
			.widget_top-click ul,
			.widget_top-posts ul,
			.widget_upcoming_events_widget ul,
			.wp-block-pullquote,
			hr,
			hr.wp-block-separator', 'border-bottom-color', '-1' ),
	// Color
	array( 'hr.wp-block-separator.is-style-dots:before', 'color', '-1' ),
	// Background-color
	array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept.has-focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept:focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept:hover', 'background-color', '-1' ),

), __( 'Background Color' ) );

// Link Color
// $config-global--color-primary-default
add_color_rule( 'link', '#1279BE', array(

	// Background-color
	array( '.a8c-posts-list-item__featured span,
			.a8c-posts-list__view-all,
			.button,
			.main-navigation #toggle:focus + #toggle-menu,
			.sticky-post,
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-background),
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
			.main-navigation a:hover,
			.page-title a:active,
			.page-title a:focus,
			.page-title a:hover,
			.site-title a:hover,
			.entry-footer a:hover,
			.entry-meta a:hover,
			.social-navigation a:hover,
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):active,
			.wp-block-button.is-style-outline.wp-block-button__link:not(.has-text-color), 
			.wp-block-button.is-style-outline.wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline.wp-block-button__link:not(.has-text-color):active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:focus,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:hover,
			a,
			article .entry-header .entry-title a:active,
			article .entry-header .entry-title a:focus,
			article .entry-header .entry-title a:hover,
			.site-header .main-navigation > div > ul > li.current-menu-item > a,
			.site-header .main-navigation > div > ul > li.focus > a,
			.site-header .main-navigation > div > ul > li:hover > a,
			.site-header .main-navigation > div > ul > li.focus li.focus > a,
			.site-header .main-navigation > div > ul > li.focus li:hover > a,
			.site-header .main-navigation > div > ul > li:hover li.current-menu-item > a,
			.site-header .main-navigation > div > ul > li:hover li.focus > a,
			.site-header .main-navigation > div > ul > li:hover li:hover > a', 'color' ),

	// Border color left
	array( '.wp-block-quote,
			.has-background:not(.has-background-background-color) .wp-block-quote, 
			[class*="background-color"]:not(.has-background-background-color) .wp-block-quote, 
			[style*="background-color"] .wp-block-quote, 
			.wp-block-cover[style*="background-image"] .wp-block-quote', 'border-left-color' ),

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
	array( '.has-primary-background-color[class],
			.has-primary-background-color.has-background-dim[class]', 'background-color' ),
	// Text-color
	array( '.has-primary-color[class],
			.has-primary-color.has-background-dim[class]', 'color' ),

), __( 'Link Color' ) );

// Text Color
// $config-global--color-foreground-default
add_color_rule( 'txt', '#303030', array(

	// Text-color
	array( '.a8c-posts-list__item .a8c-posts-list-item__meta a:active,
			.a8c-posts-list__item .a8c-posts-list-item__meta a:hover,
			.comment-meta .comment-metadata,
			.comment-meta .comment-metadata a:active,
			.comment-meta .comment-metadata a:hover,
			.entry-footer a:active,
			.entry-meta a:active,
			.footer-navigation .footer-menu a:hover,
			.main-navigation,
			.main-navigation a,
			.main-navigation a:link,
			.main-navigation a:visited,
			.screen-reader-text:focus,
			.site-info a:hover,
			.site-title,
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
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept,
			.site-header .main-navigation > div > ul > li.current-menu-item li > a,
			.site-header .main-navigation > div > ul > li.focus li > a,
			.site-header .main-navigation > div > ul > li:hover li > a,
			.has-background:not(.has-background-background-color) .wp-block-quote .wp-block-quote__citation, 
			[class*="background-color"]:not(.has-background-background-color) .wp-block-quote .wp-block-quote__citation, 
			[style*="background-color"] .wp-block-quote .wp-block-quote__citation, 
			.wp-block-cover[style*="background-image"] .wp-block-quote .wp-block-quote__citation, 
			.has-background:not(.has-background-background-color) .wp-block-quote cite, 
			[class*="background-color"]:not(.has-background-background-color) .wp-block-quote cite, 
			[style*="background-color"] .wp-block-quote cite, 
			.wp-block-cover[style*="background-image"] .wp-block-quote cite, 
			.has-background:not(.has-background-background-color) .wp-block-quote footer, 
			[class*="background-color"]:not(.has-background-background-color) .wp-block-quote footer, 
			[style*="background-color"] .wp-block-quote footer, 
			.wp-block-cover[style*="background-image"] .wp-block-quote footer', 'color' ),

	// Background-color
	array( '.a8c-posts-list__view-all:focus,
			.a8c-posts-list__view-all:hover,
			button.has-focus,
			button:focus,
			button:hover,
			.button:focus,
			.button:hover,
			.button.has-focus,
			.has-focus.a8c-posts-list__view-all,
			.wp-block-button:not(.is-style-outline) .wp-block-button__link.has-focus,
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:focus,
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:hover,
			.wp-block-cover,
			.wp-block-cover.has-background-dim,
			.wp-block-cover-image,
			.wp-block-cover-image.has-background-dim,
			.wp-block-file__button.has-focus,
			.wp-block-file__button:focus,
			.wp-block-file__button:hover,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept:focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept:hover,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.has-focus.accept,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative,
			input.has-focus[type="submit"],
			input:focus[type="submit"],
			input:hover[type="submit"]', 'background-color' ),

	// Border color
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
	// Foreground
	array( '.has-foreground-color[class],
			.has-background-background-color[class],
			.has-background-dark-background-color[class],
			.has-background-light-background-color[class],
			.has-foreground-color.has-background-dim[class],
			.has-background-background-color.has-background-dim[class],
			.has-background-dark-background-color.has-background-dim[class],
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
	// Text-color
	array( '.a8c-posts-list__item .a8c-posts-list-item__meta,
			.entry-footer,
			.entry-meta,
			.footer-navigation .footer-menu,
			.has-foreground-light-color[class],
			.site-branding,
			.site-description,
			.site-info,
			.social-navigation a,
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
			figcaption', 'color', '-1' ),

	// Border-color
	array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'border-color', '-1' ),

), __( 'Text Color' ) );

// Accent Color
// $config-global--color-secondary-default
add_color_rule( 'fg1', '#FFB302', array(

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-secondary-color[class],
			.has-secondary-color.has-background-dim[class]', 'color' ),
	// Background-color
	array( '.has-secondary-background-color[class],
			.has-secondary-background-color.has-background-dim[class]', 'background-color' ),

), __( 'Secondary Color' ) );

/**
 * Custom CSS
 */
function hever_custom_colors_extra_css() { ?>
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
			border: none;
		}
	}
<?php }
add_theme_support( 'custom_colors_extra_css', 'hever_custom_colors_extra_css' );

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
