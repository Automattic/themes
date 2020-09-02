<?php
/* Custom Colors: Rockfield */

// Background Color
// $config-global--color-background-default
add_color_rule( 'bg', '#FFFFFF', array(

	// Background-color
	array( '.screen-reader-text:focus,
			body,
			body .widget_eu_cookie_law_widget #eu-cookie-law,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept,
			.main-navigation > div > ul > li > .sub-menu', 'background-color' ),

	// Background-image
	array( '#site-navigation #toggle-menu:after,
			#site-navigation #toggle:checked + #toggle-menu:after', 'background-image' ),

	// Text-color
	array( '.a8c-posts-list .a8c-posts-list-item__featured span,
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
			.main-navigation a,
			.main-navigation a:link,
			.main-navigation a:visited,
			.site-branding,
			.site-title,
			.social-navigation a,
			.sticky-post,
			.wp-block-button__link,
			.wp-block-button__link:focus,
			.wp-block-button__link:hover,
			.wp-block-cover-image.has-background-dim,
			.wp-block-cover.has-background-dim,
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
			input[type="submit"]', 'color'),

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '.has-foreground-background-color[class],
			.has-foreground-background-color.has-background-dim[class],
			.has-foreground-dark-background-color[class],
			.has-foreground-dark-background-color.has-background-dim[class],
			.has-foreground-light-background-color[class],
			.has-foreground-light-background-color.has-background-dim[class],
			.has-primary-background-color[class],
			.has-primary-background-color.has-background-dim[class],
			.has-secondary-background-color[class],
			.has-secondary-background-color.has-background-dim[class]', 'color', 'bg', 12 ),	
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
	 */
	// Text Color (Slightly less opaque color)
	array( '.main-navigation a:hover,
			.site-title a:hover,
			.social-navigation a:hover,
			.site-title:not(:empty) + .site-description:not(:empty):before,
			#site-navigation > div > ul > li:not(:first-child):before', 'color', 0.8 ),
	// Border Color (Darker)
	array( '.author-bio,
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
	// Border Top Color (Darker)
	array( '.comment-list .children > li,
			.comment-list > li,
			.post-navigation,
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
	// Border Bottom Color (Darker)
	array( '.comment-list,
			.post-navigation,
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
	// Border Right Color (Darker)
	array( '.comment-meta', 'border-right-color', '-1' ),
	// Backgroud Color (Darker)
	array( '.widget-area:before,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept.has-focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept:focus,
			body .widget_eu_cookie_law_widget #eu-cookie-law.negative input.accept:hover', 'background-color', '-1' ),
	// Text Color (Darker)
	array( 'hr.wp-block-separator.is-style-dots:before', 'border-right-color', '-1' ),

), __( 'Background Color' ) );

// Link Color
// $config-global--color-primary-default
add_color_rule( 'link', '#222222', array(

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
			input[type="submit"],
			#masthead,
			#site-navigation > div,
			.social-navigation,
			#site-navigation > div > ul > li > .sub-menu', 'background-color' ),

	// Text-color
	array( '.wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline .wp-block-button__link:active,
			.wp-block-button.is-style-outline.wp-block-button__link:not(.has-text-color),
			.wp-block-button.is-style-outline.wp-block-button__link:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a,
			a,
			.footer-navigation .footer-menu a:hover,
			.site-info a:hover', 'color' ),

	// Border color
	array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'border-color' ),

	// Border color top
	array( '#site-navigation > div', 'border-top-color' ),

	// Border color left
	array( '.wp-block-quote', 'border-left-color' ),

	// Border color right
	array( '.wp-block-quote[style*="text-align: right"],
			.wp-block-quote[style*="text-align:right"]', 'border-right-color' ),

	// Box shadow
	array( '#site-navigation > div', 'box-shadow', 'bg' ),

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
	array( '.a8c-posts-list__item .a8c-posts-list-item__meta a:active,
			.a8c-posts-list__item .a8c-posts-list-item__meta a:hover,
			.comment-meta .comment-metadata,
			.comment-meta .comment-metadata a:active,
			.comment-meta .comment-metadata a:hover,
			.entry-footer a:active,
			.entry-footer a:hover,
			.entry-meta a:active,
			.entry-meta a:hover,
			.screen-reader-text:focus,
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
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:focus,
			.wp-block-button:not(.is-style-outline) .wp-block-button__link:hover,
			.wp-block-cover,
			.wp-block-cover-image,
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
	array( '.has-background-background-color[class],
			.has-background-background-color.has-background-dim[class],
			.has-background-dark-background-color[class],
			.has-background-dark-background-color.has-background-dim[class],
			.has-background-light-background-color[class],
			.has-background-light-background-color.has-background-dim[class],
			.has-foreground-color[class],
			.has-foreground-color.has-background-dim[class]', 'color' ),

	array( '.has-background-dim[class],
			.has-foreground-background-color[class],
			.has-foreground-background-color.has-background-dim[class]', 'background-color' ),

	// Text-color darkened
	array( '.has-foreground-dark-color[class],
			.has-foreground-dark-color[class]', 'color', '-1' ),
	// Background-color darkened
	array( '.has-foreground-dark-background-color[class],
			.has-foreground-dark-background-color.has-background-dim[class]', 'background-color', '-1' ),

	// Text-color brightened
	array( '.has-foreground-light-color[class]', 'color', '+2' ),
	// Background-color brightened
	array( '.has-foreground-light-background-color[class],
			.has-foreground-light-background-color.has-background-dim[class]', 'background-color', '+2' ),

	/**
	 * Grays
	 * Uses a slightly lighter color
	 */
	// Text-color lightened
	array( '.a8c-posts-list__item .a8c-posts-list-item__meta,
			.entry-footer,
			.entry-meta,
			.footer-navigation .footer-menu,
			.has-foreground-light-color[class],
			.post-navigation .meta-nav,
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
			.wp-block-table figcaption,
			.wp-block-video figcaption,
			figcaption', 'color', '+1' ),

	// Background-color lightened
	array( '.main-navigation #toggle:focus + #toggle-menu', 'background-color', '+1' )

	// Text-color darkened
	array( '.footer-navigation .footer-menu a:hover,
			.site-info a:hover', 'color', '-1' ),

	// Background-color darkened
	array( '#masthead,
			#site-navigation > div,
			.social-navigation', 'color', '-1' ),
			
	// Border-color darkened
	array( 'body .widget_eu_cookie_law_widget #eu-cookie-law.negative', 'border-color', '-1' ),
			
	// Border-top-color darkened
	array( '#site-navigation > div', 'border-top-color', '-1' ),

), __( 'Text Color' ) );

// Accent Color
// $config-global--color-secondary-default
add_color_rule( 'fg1', '#116821', array(

	// Background-color
	array( '.a8c-posts-list .a8c-posts-list-item__featured span,
			.sticky-post', 'background-color' ),

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
function rockfield_custom_colors_extra_css() { ?>

	.wp-block-button.is-style-outline .wp-block-button__link.has-text-color {
		color: currentColor;
	}

	@media screen and (max-width: 560px) {
		/* Prevent background color hovers on mobile */
		.main-navigation > div > ul > li > .sub-menu {
			background: transparent;
		}
	}
<?php }
add_theme_support( 'custom_colors_extra_css', 'rockfield_custom_colors_extra_css' );



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
