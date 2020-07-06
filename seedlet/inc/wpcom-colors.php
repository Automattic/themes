<?php 

/*
 * Custom Colors: Seedlet
 */

// Background Color 
// --global--color-background
add_color_rule( 'bg', '#FFFFFF', array(

	// Background-color
	array( '.primary-navigation > div,
			.screen-reader-text:focus,
			.woo-navigation > div,
			.wp-block-navigation > .wp-block-navigation__container > .has-child > .wp-block-navigation__container,
			body,
			.primary-navigation > div > ul > li > .sub-menu,
			.woo-navigation > div > ul > li > .sub-menu', 'background-color' ),

	// Text-color
	array( '.a8c-posts-list-item__featured span,
			.a8c-posts-list__view-all,
			.a8c-posts-list__view-all:active,
			.a8c-posts-list__view-all:focus,
			.a8c-posts-list__view-all:hover,
			.button,
			.button:active,
			.button:focus,
			.button:hover,
			.has-focus.a8c-posts-list__view-all,
			.has-focus.button,
			.has-focus.wp-block-button__link,
			.reply a,
			.reply a.has-focus,
			.reply a:focus,
			.reply a:hover,
			.sticky-post,
			.wp-block-button__link,
			.wp-block-button__link:active,
			.wp-block-button__link:focus,
			.wp-block-button__link:hover,
			.wp-block-file .has-focus.wp-block-file__button,
			.wp-block-file .wp-block-file__button,
			.wp-block-file .wp-block-file__button:active,
			.wp-block-file .wp-block-file__button:focus,
			.wp-block-file .wp-block-file__button:hover,
			.wp-block-file a.wp-block-file__button:active,
			.wp-block-file a.wp-block-file__button:focus,
			.wp-block-file a.wp-block-file__button:hover,
			.wp-block-file a.wp-block-file__button:visited,
			.wp-block-pullquote.is-style-solid-color,
			button,
			button.has-focus,
			button:active,
			button:focus,
			button:hover,
			button[data-load-more-btn],
			input.has-focus[type="submit"],
			input:active[type="submit"],
			input:focus[type="submit"],
			input:hover[type="submit"],
			input[type="submit"]', 'color' ),

	// Text-shadow
	array( '.site-title a', 'text-shadow' ),

	/**
	 * Utility Classes
	 */

	// Text-color
	array( '.has-primary-background-color[class],
			.has-secondary-background-color[class],
			.has-foreground-background-color[class],
			.has-foreground-dark-background-color[class],
			.has-foreground-light-background-color[class],
			.has-background-color[class]', 'color' ),

	// Background-color
	array( '.has-background-background-color[class]', 'background-color' ),

	// Text-color darkened
	array( '.has-background-dark-color[class]', 'color', '-1'  ),

	// Background-color darkened
	array( '.has-background-dark-background-color[class]', 'background-color', '-1' ),

), __( 'Background Color' ) );

// Foreground Color
// --global--color-background
add_color_rule( 'txt', '#444444', array(

	// Text-color
	array( '.comment-meta .comment-metadata,
			.entry-footer,
			.entry-meta,
			.has-background-background-color[class],
			.has-background-dark-background-color[class],
			.has-foreground-color[class],
			.has-tertiary-background-color[class],
			.navigation,
			.pagination .nav-links > *,
			.post-navigation .meta-nav,
			.primary-navigation,
			.screen-reader-text:focus,
			.site-branding,
			.site-footer > .footer-navigation .footer-menu,
			.site-footer > .site-info,
			.social-navigation a,
			.social-navigation a:active,
			.woo-navigation,
			.wp-block-code,
			.wp-block-code pre,
			.wp-block-pullquote,
			.wp-block-search .wp-block-search__input,
			.wp-block-search .wp-block-search__input:focus,
			body,
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
	array( '.has-foreground-background-color[class],
			.wp-block-pullquote.is-style-solid-color', 'background-color' ),

	// Border-bottom-color
	array( '.pagination .nav-links > *.current', 'border-bottom-color' ),

	/**
	 * Utility Classes
	 */

	// Foreground
	array( '.has-foreground-color[class],
			.has-background-background-color[class],
			.has-background-dark-background-color[class],
			.has-background-light-background-color[class]', 'color' ),

	// Background
	array( '.has-foreground-background-color[class]', 'background-color' ),

	// Text-color darkened
	array( '.has-foreground-dark-color[class]', 'color', '-1' ),

	// Background-color darkened
	array( '.has-foreground-dark-background-color[class]', 'background-color', '-1' ),

	// Text-color brightened
	array( '.has-foreground-light-color[class]', 'color', '+2' ),

	// Background-color brightened
	array( '.has-foreground-light-background-color[class]', 'background-color', '+2' ),

), __( 'Foreground Color' ) );

// Primary Color
// --global--color-primary
add_color_rule( 'link', '#000000', array(

	// Text-color
	array( '.entry-title,
			.navigation a,
			.navigation a:active,
			.primary-navigation .menu-item > a,
			.primary-navigation .menu-item > a:active,
			.primary-navigation > .button,
			.site-footer > .site-info a:focus,
			.site-footer > .site-info a:hover,
			.site-title,
			.woo-navigation .menu-item > a,
			.woo-navigation .menu-item > a:active,
			.woo-navigation > .button,
			.wp-block-a8c-blog-posts article .entry-title a,
			.wp-block-a8c-blog-posts article .entry-title a:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:active,
			a,
			a:active', 'color' ),

	// Background-color
	array( '.a8c-posts-list-item__featured span,
			.a8c-posts-list__view-all:active,
			.button:active,
			.wp-block-button__link:active,
			.wp-block-cover,
			.wp-block-cover-image,
			.wp-block-file .wp-block-file__button:active,
			button:active,
			input:active[type="submit"]', 'background-color' ),

	/**
	 * Utility Classes
	 */

	// Background-color
	array( '.has-primary-background-color[class],
			.has-foreground-dark-background-color[class]', 'background-color' ),

	// Text-color
	array( '.has-black-background-color[class],
			.has-foreground-dark-color[class],
			.has-primary-color[class]', 'color' ),

), __( 'Primary Color' ) );

// Secondary Color
// --global--color-secondary
add_color_rule( 'fg1', '#3C8067', array(

	// Text-color
	array( '.a8c-posts-list__item .a8c-posts-list-item__meta a:active,
			.a8c-posts-list__item .a8c-posts-list-item__meta a:hover,
			.comment-meta .comment-metadata a:focus,
			.comment-meta .comment-metadata a:hover,
			.entry-footer a:focus,
			.entry-footer a:hover,
			.entry-meta a:focus,
			.entry-meta a:hover,
			.entry-title a:focus,
			.entry-title a:hover,
			.navigation a:focus,
			.navigation a:hover,
			.pagination .nav-links > a:hover,
			.site-footer > .footer-navigation .footer-menu a:focus,
			.site-footer > .footer-navigation .footer-menu a:hover,
			.site-title a:focus,
			.site-title a:hover,
			.social-navigation a:focus,
			.social-navigation a:hover,
			.woo-navigation .menu-item > a:focus,
			.woo-navigation .menu-item > a:hover,
			.woo-navigation .primary-menu > .menu-item:hover > a,
			.woo-navigation > .button:hover,
			.wp-block-a8c-blog-posts article .cat-links a:active,
			.wp-block-a8c-blog-posts article .cat-links a:hover,
			.wp-block-a8c-blog-posts article .entry-meta a:active,
			.wp-block-a8c-blog-posts article .entry-meta a:hover,
			.wp-block-a8c-blog-posts article .entry-title a:focus,
			.wp-block-a8c-blog-posts article .entry-title a:hover,
			.wp-block-button.is-style-outline .wp-block-button__link,
			.wp-block-button.is-style-outline .wp-block-button__link:active,
			.wp-block-button.is-style-outline.wp-block-button__link,
			.wp-block-button.is-style-outline.wp-block-button__link:active,
			.wp-block-navigation:not(.has-text-color) .wp-block-navigation-link > a:focus,
			.wp-block-navigation:not(.has-text-color) .wp-block-navigation-link > a:hover,
			.wp-block-newspack-blocks-homepage-articles article .cat-links a:active,
			.wp-block-newspack-blocks-homepage-articles article .cat-links a:hover,
			.wp-block-newspack-blocks-homepage-articles article .entry-meta a:active,
			.wp-block-newspack-blocks-homepage-articles article .entry-meta a:hover,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:focus,
			.wp-block-newspack-blocks-homepage-articles article .entry-title a:hover,
			.primary-navigation .menu-item > a:focus,
			.primary-navigation .menu-item > a:hover,
			.primary-navigation .primary-menu > .menu-item:hover > a,
			.primary-navigation > .button:hover,
			a:focus,
			a:hover', 'color' ),

	// Background-color
	array( '.a8c-posts-list__view-all,
			.button,
			.has-secondary-background-color[class],
			.reply a,
			.sticky-post,
			.wp-block-button__link,
			.wp-block-file .wp-block-file__button,
			button,
			button[data-load-more-btn],
			input[type="submit"]', 'background-color' ),

	// Border-bottom-color
	array( 'a', 'border-bottom-color' ),

	// Border-left-color
	array( '.wp-block-pullquote.is-style-large,
			.wp-block-quote', 'border-left-color' ),

	// Border-right-color
	array( '.wp-block-quote.has-text-align-right', 'border-right-color' ),

	// Outline-color
	array( '*:focus', 'outline-color' ),
	
	// Background-image
	array( '.site-title a', 'Background-image' ),
	
	// Text-decoration-color
	array( '.site-title > a', 'text-decoration-color' ),

	/**
	 * Utility Classes
	 */

	// Background-color
	array( '.has-secondary-background-color[class]', 'background-color' ),

	// Text-color
	array( '.has-secondary-color[class],
			.has-white-background-color[class],', 'color' ),

	/**
	 * Button Hover Colors
	 */

	// Background Color
	array( '.a8c-posts-list__view-all:focus,
			.a8c-posts-list__view-all:hover,
			.button:focus,
			.button:hover,
			.has-focus.a8c-posts-list__view-all,
			.has-focus.button,
			.has-focus.wp-block-button__link,
			.reply a.has-focus,
			.reply a:focus,
			.reply a:hover,
			.wp-block-button__link:focus,
			.wp-block-button__link:hover,
			.wp-block-file .has-focus.wp-block-file__button,
			.wp-block-file .wp-block-file__button:focus,
			.wp-block-file .wp-block-file__button:hover,
			button.has-focus,
			button:focus,
			button:hover,
			input.has-focus[type="submit"],
			input:focus[type="submit"],
			input:hover[type="submit"]', 'background-color', '-1' ),

	// Text Color
	array( '.wp-block-button.is-style-outline .wp-block-button__link.has-focus,
			.wp-block-button.is-style-outline .wp-block-button__link:focus,
			.wp-block-button.is-style-outline .wp-block-button__link:hover,
			.wp-block-button.is-style-outline.wp-block-button__link.has-focus,
			.wp-block-button.is-style-outline.wp-block-button__link:focus,
			.wp-block-button.is-style-outline.wp-block-button__link:hover', 'color', '-1' ),

), __( 'Secondary Color' ) );

// Tertiary Color
// --global--color-tertiary
add_color_rule( 'fg2', '#FAFBF6', array(

	// Text-color
	array( '.wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-image-text,
			.wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-text,
			.wp-block-cover-image:not([class*="background-color"]) .wp-block-cover__inner-container,
			.wp-block-cover:not([class*="background-color"]) .wp-block-cover-image-text,
			.wp-block-cover:not([class*="background-color"]) .wp-block-cover-text,
			.wp-block-cover:not([class*="background-color"]) .wp-block-cover__inner-container', 'color' ),

	/**
	 * Utility Classes
	 */

	// Background-color
	array( '.has-tertiary-background-color[class],
			.has-background-light-background-color[class]', 'background-color' ),

	// Text-color
	array( '.has-tertiary-color[class],
			.has-background-light-color[class]', 'color' ),

), __( 'Tertiary Color' ) );

/**
 * Custom CSS
 */
function seedlet_custom_colors_extra_css() { ?>
	/* Revert back to a less custom treatment for the site title underline. */
	.site-title a {
		background-image: none;
		text-shadow: none;
		text-decoration: underline;
		text-decoration-thickness: 2px;
	}
<?php }
add_theme_support( 'custom_colors_extra_css', 'seedlet_custom_colors_extra_css' );

/**
 * Featured Varia/Seedlet Palettes
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
	'#364043',
), 'Dark' );