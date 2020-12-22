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
			.main-navigation > div > ul > li > .sub-menu,
			.site-header .main-navigation > div > ul > li .sub-menu a,
			.main-navigation > div > ul > li.current-menu-item li.current-menu-item > a,
			.mobile-nav-side .site-header #site-navigation.main-navigation .woocommerce-menu-container, 
			.mobile-nav-side .site-header #site-navigation.main-navigation > div', 'background-color' ),

	// Text-color
	array( '.a8c-posts-list-item__featured span,
			.sticky-post,
			.wp-block-pullquote.is-style-solid-color,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative,
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:not(.has-text-color)', 'color' ),

	// Background-color Lightened
	array( '.wp-block-table.is-style-stripes tbody tr:nth-child(odd),
			table.is-style-stripes tbody tr:nth-child(odd)', 'background-color', '+1' ),
			
	// Text-color Darkened 
	array( 'hr.wp-block-separator.is-style-dots:before', 'color', '-1' ),
	// Background-color Darkened 
	array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept.has-focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept:focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept:hover', 'background-color', '-1' ),

	// Border-color darkened
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
			.site-header .main-navigation > div > ul > li > .sub-menu', 'border-color', '-1' ),
	// Border-top-color darkened
	array( '.comment-list .children > li,
			.comment-list > li,
			.wp-block-pullquote', 'border-top-color', '-1' ),
	// Border-bottom-color darkened
	array( '.comment-list,
			.wp-block-pullquote,
			hr,
			hr.wp-block-separator', 'border-bottom-color', '-1' ),

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-background-color,
			.wp-block-button .has-background-color[class]
			.has-background-dim,
			.has-foreground-background-color,
			.has-foreground-background-color.has-background-dim,
			.has-foreground-dark-background-color,
			.has-foreground-dark-background-color.has-background-dim,
			.has-foreground-light-background-color,
			.has-foreground-light-background-color.has-background-dim,
			.has-primary-background-color,
			.has-primary-background-color.has-background-dim,
			.has-secondary-background-color,
			.has-secondary-background-color.has-background-dim', 'color' ),
	// Background-color
	array( '.has-background-background-color[class],
			.has-background-background-color.has-background-dim[class]', 'background-color' ),

	// Text-color darkened
	array( '.has-background-dark-color[class],
			.wp-block-button .has-background-dark-color[class],
			.has-background-dark-color.has-background-dim[class]', 'color', '-1' ),
	// Background-color darkened
	array( '.has-background-dark-background-color[class],
			.has-background-dark-background-color.has-background-dim[class]', 'background-color', '-1' ),

	// Text-color lightened
	array( '.has-background-light-color[class],
			.wp-block-button .has-background-light-color[class],
			.has-background-light-color.has-background-dim[class]', 'color', '+1' ),
	// Background-color lightened
	array( '.has-background-light-background-color[class],
			.has-background-light-background-color.has-background-dim[class]', 'background-color', '+1' ),

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
			.wp-block-button__link.is-style-outline:not(.has-text-color),
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):active,
			.wp-block-button.is-style-outline.wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline.wp-block-button__link:not(.has-text-color):active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:focus,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:hover,
			a:not(.has-text-color),
			.a8c-posts-list__item .a8c-posts-list-item__meta,
			.entry-footer,
			.entry-meta,
			.footer-navigation .footer-menu,
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
			figcaption', 'color' ),

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
			.wp-block-button .has-primary-color[class]', 'color' ),
	// Background-color
	array( '.has-primary-background-color[class],
			.has-primary-background-color.has-background-dim[class]', 'background-color' ),

), __( 'Link Color' ) );

// Text Color
// $config-global--color-foreground-default
add_color_rule( 'txt', '#010101', array(

	// Text-color
	array( 'body,
			.screen-reader-text:focus,
			.wp-block-code,
			.wp-block-code pre,
			.wp-block-pullquote,
			.site-title,
			.main-navigation,
			.main-navigation a:link, 
			.main-navigation a:visited,
			.social-navigation a,
			.comment-meta .comment-metadata,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept,
			.wp-block-table.is-style-stripes tbody tr:nth-child(odd),
			table.is-style-stripes tbody tr:nth-child(odd)', 'color' ),

	// Background-color
	array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'background-color' ),

	// Text-color brightened
	array( '.a8c-posts-list__item .a8c-posts-list-item__meta,
			.a8c-posts-list__item .a8c-posts-list-item__meta a:active,
			.a8c-posts-list__item .a8c-posts-list-item__meta a:hover,
			.comment-meta .comment-metadata a:active,
			.comment-meta .comment-metadata a:hover,
			.comment-notes,
			.entry-footer,
			.entry-footer a:active,
			.entry-footer a:hover,
			.entry-meta,
			.entry-meta a:active,
			.entry-meta a:hover,
			.footer-navigation .footer-menu,
			.footer-navigation .footer-menu a:hover,
			.has-foreground-light-color,
			.main-navigation a:hover,
			.post-navigation .meta-nav,
			.site-branding,
			.site-info,
			.site-info a:hover,
			.site-title a:hover,
			.social-navigation a:hover,
			.widget_archive ul li,
			.widget_categories ul li,
			.widget_meta ul li,
			.widget_nav_menu ul li,
			.widget_pages ul li,
			.widget_recent_comments ul li,
			.widget_recent_entries ul li,
			.widget_rss ul li,
			.wp-block-button.is-style-outline .wp-block-button__link.has-focus,
			.wp-block-button.is-style-outline .wp-block-button__link:focus,
			.wp-block-button.is-style-outline .wp-block-button__link:hover,
			.wp-block-button.is-style-outline.wp-block-button__link.has-focus,
			.wp-block-button.is-style-outline.wp-block-button__link:focus,
			.wp-block-button.is-style-outline.wp-block-button__link:hover,
			.wp-block-image figcaption,
			.wp-block-latest-comments .wp-block-latest-comments__comment-date,
			.wp-block-latest-posts .wp-block-latest-posts__post-date,
			.wp-block-newspack-blocks-homepage-articles article .cat-links,
			.wp-block-newspack-blocks-homepage-articles article .cat-links a:active,
			.wp-block-newspack-blocks-homepage-articles article .cat-links a:hover,
			.wp-block-newspack-blocks-homepage-articles article .entry-meta,
			.wp-block-newspack-blocks-homepage-articles article .entry-meta a:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-meta a:hover,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:hover,
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
			a:hover,
			figcaption', 'color', '+2' ),

	// Background-color brightened
	array( '.a8c-posts-list__view-all:hover,
			.button:focus,
			.button:hover,
			.has-focus.a8c-posts-list__view-all,
			.has-focus.button,
			.has-focus.wp-block-button__link,
			.has-focus.wp-block-file__button,
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
			input:hover[type="submit"]', 'background-color', '+2' ),

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
			textarea:focus', 'border-color', '+2' ),
			
	// Border-color darkened
	array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'background-color', '-1' ),

	/**
	 * Utility Classes
	 */
	// Foreground
	array( '.has-foreground-color[class],
			.wp-block-button .has-foreground-color[class],
			.has-background-background-color[class],
			.has-background-background-color.has-background-dim[class],
			.has-background-dark-background-color[class],
			.has-background-dark-background-color.has-background-dim[class],
			.has-background-light-background-color[class],
			.has-background-light-background-color.has-background-dim[class]', 'color' ),
	// Background-color
	array( '.has-background-dim[class],
			.has-foreground-background-color[class],
			.has-foreground-background-color.has-background-dim[class]', 'background-color' ),

	// Text-color darkened
	array( '.has-foreground-dark-color[class],
			.wp-block-button .has-foreground-dark-color[class]', 'color', '-1' ),
	// Background-color darkened
	array( '.has-foreground-dark-background-color[class],
			.has-foreground-dark-background-color.has-background-dim[class]', 'background-color', '-1' ),

	// Text-color brightened
	array( '.has-foreground-light-color[class],
			.wp-block-button .has-foreground-light-color[class]', 'color', '+2' ),
	// Background-color brightened
	array( '.has-foreground-light-background-color[class],
			.has-foreground-light-background-color.has-background-dim[class]', 'background-color', '+2' ),


), __( 'Text Color' ) );

// Accent Color
// $config-global--color-secondary-default
add_color_rule( 'fg1', '#1a1a1a', array(

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-secondary-color[class],
			.wp-block-button .has-secondary-color[class]', 'color' ),

	// Background-color
	array( '.has-secondary-background-color[class],
			.has-secondary-background-color.has-background-dim[class],
			input:hover[type="submit"],
			.main-navigation .button:focus,
			.main-navigation .button:hover,
			.main-navigation #toggle:focus + #toggle-menu,
			.has-secondary-background-color', 'background-color' ),

), __( 'Secondary Color' ) );

/**
 * Custom CSS
 */
function mayland_custom_colors_extra_css() {
	$colors_array = get_theme_mod( 'colors_manager' );
	$bg           = $colors_array['colors']['bg'];
?>

	.wp-block-button.is-style-outline {
		color: inherit;
	}

	@media only screen and (min-width: 560px) {
		/* background-color */
		.main-navigation > div > ul > li > .sub-menu {
			background-color: <?php echo $bg; ?>;
		}
	}
<?php }
add_theme_support( 'custom_colors_extra_css', 'mayland_custom_colors_extra_css' );

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
