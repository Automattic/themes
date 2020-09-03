<?php
/* Custom Colors: Shawburn */

// Background Color
// $config-global--color-background-default
add_color_rule( 'bg', '#FFFFFF', array(

	// Background-color
	array( '#page,
			.main-navigation #toggle:focus + #toggle-menu,
			.screen-reader-text:focus,
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept,
			.main-navigation > div > ul > li > .sub-menu', 'background-color' ),

	// Text-color
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
			input[type="submit"]', 'color' ),

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-background-color[class],
			.has-foreground-background-color[class],
			.has-foreground-background-color.has-background-dim[class],
			.has-foreground-dark-background-color[class],
			.has-foreground-dark-background-color.has-background-dim[class],
			.has-foreground-light-background-color[class],
			.has-foreground-light-background-color.has-background-dim[class],
			.has-primary-background-color[class],
			.has-primary-background-color.has-background-dim[class],
			.has-secondary-background-color[class],
			.has-secondary-background-color.has-background-dim[class],
			.has-background-dim[class]', 'color' ),
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
	array( '.has-background-light-background-color[class],
			.has-background-light-background-color.has-background-dim[class]', 'color', '+1' ),
	// Background-color lightened
	array( '.has-background-light-background-color[class],
			.has-background-light-background-color.has-background-dim[class]', 'background-color', '+1' ),

	// Border color top
	array( '.main-navigation #toggle:checked ~ div', 'border-top-color' ),

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
			.wp-block-separator,
			hr,
			hr.wp-block-separator', 'border-bottom-color', '-1' ),
	// Color
	array( 'hr.wp-block-separator.is-style-dots:before', 'color', '-1' ),
	// Background-color
	array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept.has-focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept:focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept:hover', '-1' ),

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
			.wp-block-button:not(.is-style-outline) .wp-block-button__link,
			.wp-block-file .wp-block-file__button,
			.wp-block-file__button,
			.wp-block-pullquote.is-style-solid-color,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept,
			button,
			button[data-load-more-btn],
			input[type="submit"]', 'background-color' ),

	// Text-color
	array( 'ts-list-item__title a:active,
			.a8c-posts-list-item__title a:focus,
			.a8c-posts-list-item__title a:hover,
			.entry-header a:active,
			.entry-header a:focus,
			.entry-header a:hover,
			.footer-navigation .footer-menu a:hover,
			.site-info a:hover,
			.site-title a:hover,
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):active,
			.wp-block-button.is-style-outline.wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline.wp-block-button__link:not(.has-text-color):active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:focus,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:hover,
			a', 'color' ),

	// Border color left
	array( '.wp-block-quote', 'border-left-color' ),

	// Border color right
	array( '.wp-block-quote[style*="text-align: right"],
			.wp-block-quote[style*="text-align:right"]', 'border-right-color' ),

	/**
	 * Utility Classes
	 */
	// Background-color
	array( '.has-primary-background-color[class],
			.has-primary-background-color.has-background-dim[class]', 'background-color' ),
	// Text-color
	array( '.has-primary-color[class],
			.has-primary-color.has-background-dim[class]', 'color' ),

	/**
	 * Focus + Hovers
	 */
	// Background-color
	array( '#masthead .social-navigation ul li a:active,
			#masthead .social-navigation ul li a:focus,
			#masthead .social-navigation ul li a:hover,
			#site-navigation.main-navigation ul > li.current-menu-item > a,
			#site-navigation.main-navigation ul > li.focus > a,
			#site-navigation.main-navigation ul > li:hover > a,
			#toggle-menu:active,
			#toggle-menu:focus,
			#toggle-menu:hover,
			.a8c-posts-list__view-all:focus,
			.a8c-posts-list__view-all:hover,
			.button:focus,
			.button:hover,
			.fse-template-part .main-navigation ul > li.current-menu-item > a,
			.fse-template-part .main-navigation ul > li.focus > a,
			.fse-template-part .main-navigation ul > li:hover > a,
			.has-focus.a8c-posts-list__view-all,
			.has-focus.button,
			.has-focus.wp-block-button__link,
			.has-focus.wp-block-file__button,
			.main-navigation #toggle:focus + #toggle-menu:active,
			.main-navigation #toggle:focus + #toggle-menu:focus,
			.main-navigation #toggle:focus + #toggle-menu:hover,
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
	array( '.a8c-posts-list__item .a8c-posts-list-item__meta a:active,
			.a8c-posts-list__item .a8c-posts-list-item__meta a:hover,
			.comment-meta .comment-metadata a:active,
			.comment-meta .comment-metadata a:hover,
			.entry-footer a:active,
			.entry-footer a:hover,
			.entry-meta a:active,
			.entry-meta a:hover,
			.wp-block-button.is-style-outline .wp-block-button__link.has-focus,
			.wp-block-button.is-style-outline .wp-block-button__link:focus,
			.wp-block-button.is-style-outline .wp-block-button__link:hover,
			.wp-block-button.is-style-outline.wp-block-button__link.has-focus,
			.wp-block-button.is-style-outline.wp-block-button__link:focus,
			.wp-block-button.is-style-outline.wp-block-button__link:hover,
			.wp-block-newspack-blocks-homepage-articles article .cat-links a:active,
			.wp-block-newspack-blocks-homepage-articles article .cat-links a:hover,
			.wp-block-newspack-blocks-homepage-articles article .entry-meta a:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-meta a:hover,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:hover,
			a:hover,
			#site-navigation.main-navigation ul.main-menu > li:after,
			.fse-template-part .main-navigation ul.main-menu > li:after', 'color', '-1' ),
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
			textarea:focus', 'border-color', '-1' ),

), __( 'Link Color' ) );

// Text Color
// $config-global--color-foreground-default
add_color_rule( 'txt', '#444444', array(

	// Text-color
	array( '.comment-meta .comment-metadata,
			.screen-reader-text:focus,
			.site-title,
			.wp-block-code,
			.wp-block-code pre,
			.wp-block-pullquote,
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept', 'color' ),

	// Background-color
	array( 'body,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'background-color' ),

	/**
	 * Utility Classes
	 */
	// Text-color
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

	/*
	 * Grays (Same as text color)
	 */
	// Text-color
	array( '.a8c-posts-list .a8c-posts-list-item__featured span,
			.a8c-posts-list__item .a8c-posts-list-item__meta,
			.entry-footer,
			.entry-meta,
			.footer-navigation .footer-menu,
			.site-branding,
			.site-info,
			.sticky-post,
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
			figcaption', 'color' )

), __( 'Text Color' ) );

// Accent Color
// $config-global--color-secondary-default
add_color_rule( 'fg1', '#D4401C', array(

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
function shawburn_custom_colors_extra_css() {
	$colors_array = get_theme_mod( 'colors_manager' );
	$bg           = $colors_array['colors']['bg'];
	$link         = $colors_array['colors']['link'];
?>
	.has-background a,
	.has-text-color a {
		text-decoration: underline;
	}
<?php }
add_theme_support( 'custom_colors_extra_css', 'shawburn_custom_colors_extra_css' );

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
