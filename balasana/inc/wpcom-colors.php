<?php
/* Custom Colors: Balasana */

// Background Color (White)
// $config-global--color-background-default
add_color_rule( 'bg', '#FFFFFF', array(

	// Background-color
	array( '.has-background-background-color,
			.has-background-background-color.has-background-dim,
			.main-navigation > div,
			.screen-reader-text:focus,
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept', 'background-color' ),

	// Background-image
	array( '#site-navigation #toggle-menu::before,
			#site-navigation #toggle:checked + #toggle-menu::before', 'background-image' ),

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
			.wp-block-cover.has-background-dim,
			.wp-block-cover.has-background-dim .block-editor-block-list__block,
			.wp-block-cover.has-background-dim .wp-block-cover-image-text,
			.wp-block-cover.has-background-dim .wp-block-cover-text,
			.wp-block-cover.has-background-dim .wp-block-cover__inner-container,
			.wp-block-cover-image.has-background-dim,
			.wp-block-cover-image.has-background-dim .block-editor-block-list__block,
			.wp-block-cover-image.has-background-dim .wp-block-cover-image-text,
			.wp-block-cover-image.has-background-dim .wp-block-cover-text,
			.wp-block-cover-image.has-background-dim .wp-block-cover__inner-container,
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
	array( '.has-background-color,
			.has-foreground-dark-background-color,
			.has-foreground-light-background-color,
			.has-primary-background-color,
			.has-primary-background-color.has-background-dim,
			.has-secondary-background-color,
			.has-secondary-background-color.has-background-dim,
			.has-foreground-background-color,
			.has-foreground-background-color.has-background-dim', 'color' ),
	// Background-color
	array( '.has-background-background-color', 'background-color' ),
	// Text-color darkened
	array( '.has-background-dark-color', 'color', '-1' ),
	// Background-color darkened
	array( '.has-background-dark-background-color', 'background-color', '-1' ),
	// Text-color lightened
	array( '.has-background-light-color', 'color', '+1' ),
	// Background-color lightened
	array( '.has-background-light-background-color', 'background-color', '+1' ),

	/**
	 * Grays
	 * Uses a slightly darker color
	 */
	// Border-color
	array( '.main-navigation > div,
			.wp-block-code,
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
			.wp-block-pullquote', 'border-top-color', '-1' ),
	// Border-bottom-color
	array( '.comment-list,
			.wp-block-pullquote,
			hr,
			hr.wp-block-separator', 'border-bottom-color', '-1' ),
	// Color
	array( 'hr.wp-block-separator.is-style-dots:before', 'color', '-1' ),
	// Background-color
	array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept.has-focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept:focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept:hover', '-1' ),


), __( 'Background Color' ) );

// Link Color (Blue)
// $config-global--color-primary-default
add_color_rule( 'link', '#19744C', array(

	// Background-color
	array( '.a8c-posts-list-item__featured span,
			.a8c-posts-list__view-all,
			.button,
			.main-navigation #toggle:focus + #toggle-menu,
			.sticky-post,
			.wp-block-file__button:focus,
			.wp-block-file__button:hover,
			.wp-block-button__link:focus,
			.wp-block-button__link:hover,
			.wp-block-button__link:not([class*="background-color"]),
			.wp-block-button__link:not([class*="background-color"]):focus,
			.wp-block-button__link:not([class*="background-color"]):hover,
			.wp-block-file .wp-block-file__button,
			.wp-block-file__button,
			.wp-block-pullquote.is-style-solid-color,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept,
			button,
			button[data-load-more-btn],
			input[type="submit"],
			.a8c-posts-list__view-all:focus,
			.a8c-posts-list__view-all:hover,
			.button:focus,
			.button:hover,
			.has-focus.a8c-posts-list__view-all,
			.has-focus.button,
			.has-focus.wp-block-button__link,
			.has-focus.wp-block-file__button,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept:focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.accept:hover,
			body .widget_eu_cookie_law_widget #eu-cookie-law input.has-focus.accept,
			button.has-focus,
			button:focus,
			button:hover,
			input.has-focus[type="submit"],
			input:focus[type="submit"],
			input:hover[type="submit"]', 'background-color' ),

	// Text-color
	array( '.a8c-posts-list .a8c-posts-list-item__title a:active,
			.a8c-posts-list .a8c-posts-list-item__title a:focus,
			.a8c-posts-list .a8c-posts-list-item__title a:hover,
			.comment-meta .comment-author .fn a:active,
			.comment-meta .comment-author .fn a:focus,
			.comment-meta .comment-author .fn a:hover,
			.entry-title a:active,
			.entry-title a:focus,
			.entry-title a:hover,
			.footer-navigation .footer-menu a:hover,
			.has-primary-color,
			.main-navigation a:hover,
			.page-title a:active,
			.page-title a:focus,
			.page-title a:hover,
			.post-navigation a:active .post-title,
			.post-navigation a:focus .post-title,
			.post-navigation a:hover .post-title,
			.site-info a:hover,
			.site-title a:hover,
			.social-navigation a:hover,
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color):active,
			.wp-block-button.is-style-outline.wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline.wp-block-button__link:not(.has-text-color):active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:focus,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:hover,
			a,
			a:hover,
			.a8c-posts-list__item .a8c-posts-list-item__meta a:active,
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
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:hover', 'color' ),

	// Border color right
	array( '.wp-block-quote[style*="text-align: right"],
			.wp-block-quote[style*="text-align:right"]', 'border-right-color' ),

	// Border color left
	array( '.wp-block-quote', 'border-left-color' ),
	
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
	// Background-color
	array( '.has-primary-background-color,
			.has-primary-background-color.has-background-dim', 'background-color' ),
	// Text-color
	array( '.has-primary-color', 'color' ),

), __( 'Link Color' ) );

// Text Color (Gray)
// $config-global--color-foreground-default
add_color_rule( 'txt', '#303030', array(

	// Text-color
	array( '.a8c-posts-list .a8c-posts-list-item__featured span,
			.comment-meta .comment-metadata,
			.footer-navigation .footer-menu,
			.main-navigation,
			.main-navigation a,
			.main-navigation a:link,
			.main-navigation a:visited,
			.post-navigation .meta-nav,
			.post-navigation a .post-title,
			.screen-reader-text:focus,
			.site-info,
			.site-title,
			.social-navigation a,
			.wp-block-code,
			.wp-block-code pre,
			.wp-block-pullquote,
			.wp-block-table.is-style-stripes tbody tr:nth-child(odd),
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
			textarea:focus', 'color' ),

	// Background-color
	array( '.wp-block-cover-image.has-background-dim:not([class*="background-color"]),
			.wp-block-cover.has-background-dim:not([class*="background-color"]),
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'background-color' ),

	/**
	 * Utility Classes
	 */
	// Foreground
	array( '.has-foreground-color,
			.has-background-background-color,
			.has-background-dark-background-color,
			.has-background-light-background-color', 'color' ),

	// Background
	array( '.has-background-dim:not([class*="background-color"]),
			.has-foreground-background-color,
			.has-foreground-background-color.has-background-dim', 'background-color' ),

	// Text-color darkened
	array( '.has-foreground-dark-color', 'color', '-1' ),
	// Background-color darkened
	array( '.has-foreground-dark-background-color,
			.has-foreground-dark-background-color.has-background-dim', 'background-color', '-1' ),

	// Text-color brightened
	array( '.has-foreground-light-color', 'color', '+2' ),
	// Background-color brightened
	array( '.has-foreground-light-background-color,
			.has-foreground-light-background-color.has-background-dim', 'background-color', '+2' ),

	/**
	 * Gray (Same as text color)
	 */
	// Text-color
	array( '.a8c-posts-list__item .a8c-posts-list-item__meta,
			.entry-footer,
			.entry-meta,
			.has-foreground-light-color,
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
			figcaption', 'color' ),

), __( 'Text Color' ) );

// Accent Color (Red)
// $config-global--color-secondary-default
add_color_rule( 'fg1', '#BC2213', array(

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-secondary-color', 'color' ),

	// Background-color
	array( '.has-secondary-background-color,
			.has-secondary-background-color.has-background-dim', 'background-color' ),

), __( 'Secondary Color' ) );

/**
  * Custom CSS
  */
function balasana_custom_colors_extra_css() {
	$colors_array = get_theme_mod( 'colors_manager' );
	$bg           = $colors_array['colors']['bg'];
	$link         = $colors_array['colors']['link'];
?>
	@media screen and (min-width: 560px) {
		.main-navigation > div > ul > li > .sub-menu {
			background-color: <?php echo $bg; ?>;
		}
		.main-navigation > div > ul > .menu-item-has-children > a::after {
			border-top-color: currentColor;
		}
	}
<?php }
add_theme_support( 'custom_colors_extra_css', 'balasana_custom_colors_extra_css' );

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
