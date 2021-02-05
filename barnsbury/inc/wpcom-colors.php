<?php
/* Custom Colors: Barnsbury */

// Background Color
// $config-global--color-background-default
add_color_rule( 'bg', '#FFFDF6', array(

	// Background-color
	array( '.has-background-background-color,
			.has-background-background-color.has-background-dim,
			.screen-reader-text:focus,
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept,
			.main-navigation > div > ul > li > .sub-menu,
			.main-navigation > div > ul > li.current-menu-item li > a,
			.main-navigation > div > ul > li.focus li > a,
			.main-navigation > div > ul > li:hover li > a,
			.main-navigation > div > ul > li:hover li:hover > a, 
			.main-navigation > div > ul > li:hover li.focus > a, 
			.main-navigation > div > ul > li:hover li.current-menu-item > a,
			.main-navigation > div > ul > li.focus li:hover > a, 
			.main-navigation > div > ul > li.focus li.focus > a, 
			.main-navigation > div > ul > li.focus li.current-menu-item > a,
			.main-navigation > div > ul > li.current-menu-item li:hover > a,
			.main-navigation > div > ul > li.current-menu-item li.focus > a,
			.main-navigation > div > ul > li.current-menu-item li.current-menu-item > a,
			.mobile-nav-side .site-header #site-navigation.main-navigation .woocommerce-menu-container, 
			.mobile-nav-side .site-header #site-navigation.main-navigation > div', 
			'background-color' ),

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
			input[type="submit"]', 'color' ),

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-primary-background-color,
			.has-secondary-background-color,
			.has-foreground-background-color,
			.has-foreground-dark-background-color,
			.has-foreground-light-background-color,
			.has-background-color', 'color' ),
	// Background-color
	array( '.has-background-background-color', 'background-color' ),
	// Color darkened
	array( '.has-background-dark-color', 'color', '-1' ),
	// Background-color darkened
	array( '.has-background-dark-background-color', 'background-color', '-1' ),
	// Color lightened
	array( '.has-background-light-color', 'color', '+1' ),
	// Background-color lightened
	array( '.has-background-light-background-color', 'background-color', '+1' ),

	/**
	 * Grays
	 * Uses a slightly darker color
	 */
	// Border-color
	array( '.main-navigation > div > ul > li > .sub-menu', 'border-color', '-1' ),

), __( 'Background Color' ) );

// Link Color
// $config-global--color-primary-default
add_color_rule( 'link', '#20603C', array(

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
			.entry-footer a:active,
			.entry-footer a:hover,
			.entry-meta a:active,
			.entry-meta a:hover,
			.entry-title a:active,
			.entry-title a:focus,
			.entry-title a:hover,
			.footer-navigation .footer-menu,
			.page-title a:active,
			.page-title a:focus,
			.page-title a:hover,
			.site-info,
			.social-navigation a:hover,
			.wp-block-button.is-style-outline .wp-block-button__link,
			.wp-block-button.is-style-outline .wp-block-button__link:active,
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline .wp-block-button__link:hover, 
			.wp-block-button.is-style-outline .wp-block-button__link:focus, 
			.wp-block-button.is-style-outline .wp-block-button__link.has-focus,
			.wp-block-button.is-style-outline.wp-block-button__link,
			.wp-block-button.is-style-outline.wp-block-button__link:active,
			.wp-block-button.is-style-outline.wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline.wp-block-button__link:hover, 
			.wp-block-button.is-style-outline.wp-block-button__link:focus, 
			.wp-block-button.is-style-outline.wp-block-button__link.has-focus, 			
			.wp-block-latest-posts > li > a:active,
			.wp-block-latest-posts > li > a:focus,
			.wp-block-latest-posts > li > a:hover,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:focus,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:hover,
			a,
			.main-navigation > div > ul > li.current-menu-item > a,
			.main-navigation > div > ul > li.focus > a,
			.main-navigation > div > ul > li:hover > a,
			.main-navigation > div > ul > li:hover li:hover > a, 
			.main-navigation > div > ul > li:hover li.focus > a, 
			.main-navigation > div > ul > li:hover li.current-menu-item > a,
			.main-navigation > div > ul > li.focus li:hover > a, 
			.main-navigation > div > ul > li.focus li.focus > a, 
			.main-navigation > div > ul > li.focus li.current-menu-item > a,
			.main-navigation > div > ul > li.current-menu-item li:hover > a,
			.main-navigation > div > ul > li.current-menu-item li.focus > a,
			.main-navigation > div > ul > li.current-menu-item li.current-menu-item > a', 'color' ),
	
	// Text-color with less opacity (dim)
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
			.site-title a:hover,
			.social-navigation a:hover,
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
			a:hover', 'color', 0.8 ),

	// Border color left
	array( '.wp-block-quote', 'border-left-color' ),

	// Border color right
	array( '.wp-block-quote[style*="text-align: right"],
			.wp-block-quote[style*="text-align:right"]', 'border-right-color' ),

	// Border color bottom
	array( '.main-navigation > div > ul > li.current-menu-item > ul:before,
			.main-navigation > div > ul > li.focus > ul:before,
			.main-navigation > div > ul > li:hover > ul:before', 'border-bottom-color' ),

	/**
	 * Utility Classes
	 */
	// Background-color
	array( '.has-primary-background-color', 'background-color' ),
	// Text-color
	array( '.has-primary-color', 'color' ),

), __( 'Link Color' ) );

// Text Color
// $config-global--color-foreground-default
add_color_rule( 'txt', '#3C2323', array(

	// Text-color
	array( '.comment-meta .comment-metadata,
			.entry-footer,
			.entry-meta,
			.main-navigation,
			.main-navigation a,
			.main-navigation a:link,
			.main-navigation a:visited,
			.screen-reader-text:focus,
			.social-navigation a,
			.wp-block-code,
			.wp-block-code pre,
			.wp-block-latest-posts > li > a,
			.wp-block-pullquote,
			.wp-block-table.is-style-stripes tbody tr:nth-child(odd),
			table.is-style-stripes tbody tr:nth-child(odd),
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept,
			hr.wp-block-separator.is-style-dots:before,
			.site-title,
			.main-navigation > div > ul > li.current-menu-item li > a,
			.main-navigation > div > ul > li.focus li > a,
			.main-navigation > div > ul > li:hover li > a', 'color' ),

	// Background-color
	array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative,
			.wp-block-cover,
			.wp-block-cover-image', 'background-color' ),

	// Border-color
	array( '.wp-block-code,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'border-color' ),

	// Border-top-color
	array( '.comment-list .children > li,
			.comment-list > li,
			.wp-block-pullquote', 'border-top-color' ),

	// Border-bottom-color
	array( '.comment-list,
			.wp-block-pullquote,
			hr,
			hr.wp-block-separator', 'border-bottom-color' ),

	/**
	 * Utility Classes
	 */
	// Text color
	array( '.has-foreground-color,
			.has-background-background-color[class],
			.has-background-background-color.has-background-dim,
			.has-background-dark-background-color[class],
			.has-background-dark-background-color.has-background-dim,
			.has-background-light-background-color[class],
			.has-background-light-background-color.has-background-dim', 'color' ),

	// Background-color
	array( '.has-background-dim,
			.has-foreground-background-color[class],
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
	array( '', 'color' ),

), __( 'Text Color' ) );

// Accent Color
// $config-global--color-secondary-default
add_color_rule( 'fg1', '#655441', array(

	// Text-color
	array( '.wp-block-button.is-style-outline .wp-block-button__link:focus,
			.wp-block-button.is-style-outline .wp-block-button__link:hover', 'color' ),

	// Background-color
	array( '.wp-block-button:not(.is-style-outline) .wp-block-button__link:focus,
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:hover', 'background-color' ),

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-secondary-color', 'color' ),

	// Background-color
	array( '	
			.main-navigation .button:focus,
			.main-navigation .button:hover,
			.main-navigation #toggle:focus + #toggle-menu,
			.has-secondary-background-color,
			.has-secondary-background-color.has-background-dim', 'background-color' ),

), __( 'Secondary Color' ) );

/**
 * Custom CSS
 */

function barnsbury_custom_colors_extra_css() { 
	$colors_array = get_theme_mod( 'colors_manager' );
	$bg           = $colors_array['colors']['bg'];
?>
	@media screen and (min-width: 560px) {
		
		.main-navigation > div > ul > li > .sub-menu {
			background-color: <?php echo $bg; ?>;
			border: 1px solid;
		}
		.main-navigation > div > ul > li.current-menu-item li > a,
		.main-navigation > div > ul > li.focus li > a,
		.main-navigation > div > ul > li:hover li > a {
			color: <?php echo $bg; ?>;
		}
		.site-header .main-navigation > div > ul > li.current-menu-item > ul::before,
		.site-header .main-navigation > div > ul > li.focus > ul::before,
		.site-header .main-navigation > div > ul > li:hover > ul::before {
			border: none;
		}
	}
<?php }
add_theme_support( 'custom_colors_extra_css', 'barnsbury_custom_colors_extra_css' ); 

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
