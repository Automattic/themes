<?php
/*
 * Custom Editor Colors
 */

// Background Color
// $config-global--color-background-default
add_editor_color_rule( 'bg', '#FFFFFF', array(

	// Background-color
	array( '#editor .editor-styles-wrapper .fse-template-part .main-navigation > div > ul > li > .sub-menu,
			#editor .editor-styles-wrapper', 'background-color' ),

	// Text-color
	array( '#editor .editor-styles-wrapper .wp-block-cover,
			#editor .editor-styles-wrapper .wp-block-cover-image,
			#editor .editor-styles-wrapper .wp-block-cover-image.has-background-dim,
			#editor .editor-styles-wrapper .wp-block-cover-image:not([class*="background-color"]) .block-editor-block-list__block,
			#editor .editor-styles-wrapper .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-image-text,
			#editor .editor-styles-wrapper .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-text,
			#editor .editor-styles-wrapper .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover__inner-container,
			#editor .editor-styles-wrapper .wp-block-cover.has-background-dim,
			#editor .editor-styles-wrapper .wp-block-cover:not([class*="background-color"]) .block-editor-block-list__block,
			#editor .editor-styles-wrapper .wp-block-cover:not([class*="background-color"]) .wp-block-cover-image-text,
			#editor .editor-styles-wrapper .wp-block-cover:not([class*="background-color"]) .wp-block-cover-text,
			#editor .editor-styles-wrapper .wp-block-cover:not([class*="background-color"]) .wp-block-cover__inner-container,
			#editor .editor-styles-wrapper .wp-block-pullquote.is-style-solid-color', 'color' ),

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '#editor .editor-styles-wrapper .has-primary-background-color[class],
			#editor .editor-styles-wrapper .has-secondary-background-color[class],
			#editor .editor-styles-wrapper .has-foreground-background-color[class],
			#editor .editor-styles-wrapper .has-foreground-dark-background-color[class],
			#editor .editor-styles-wrapper .has-foreground-light-background-color[class],
			#editor .editor-styles-wrapper .has-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-primary-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-secondary-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-foreground-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-foreground-dark-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-foreground-light-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-background-color[class]', 'color' ),
	// Background-color
	array( '#editor .editor-styles-wrapper .has-background-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-background-background-color[class]', 'background-color' ),

	// Text-color darkened
	array( '#editor .editor-styles-wrapper .has-background-dark-color[class],
			#editor .editor-styles-wrapper .wp-block .has-background-dark-color[class]', 'color', '-1'  ),
	// Background-color darkened
	array( '#editor .editor-styles-wrapper .has-background-dark-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-background-dark-background-color[class]', 'background-color', '-1' ),

	// Text-color lightened
	array( '#editor .editor-styles-wrapper .has-background-light-color[class],
			#editor .editor-styles-wrapper .wp-block .has-background-light-color[class]', 'color', '+1'  ),
	// Background-color lightened
	array( '#editor .editor-styles-wrapper .has-background-light-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-background-light-background-color[class]', 'background-color', '+1' ),

	/**
	 * Grays
	 * Uses a slightly darker color
	 */
	// Color
	array( '#editor .editor-styles-wrapper .wp-block-separator.is-style-dots', 'color', '-1' ),
	// Border-color
	array( '#editor .editor-styles-wrapper .wp-block-code', 'border-color', '-1' ),
	// Border-top-color
	array( '#editor .editor-styles-wrapper .wp-block-pullquote', 'border-top-color', '-1' ),
	// Border-bottom-color
	array( '#editor .editor-styles-wrapper .wp-block-pullquote,
			#editor .editor-styles-wrapper .wp-block-separator', 'border-bottom-color', '-1' ),

), __( 'Background Color' ) );

// Link Color
// $config-global--color-primary-default
add_editor_color_rule( 'link', '#23883D', array(

	// Background-color
	array( '#editor .editor-styles-wrapper .button,
			#editor .editor-styles-wrapper .wp-block-search .wp-block-search__button,
			#editor .editor-styles-wrapper .wp-block-search .wp-block-search__button:hover,
			#editor .editor-styles-wrapper .wp-block-search .wp-block-search__button:focus,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation .button,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button,
			#editor .editor-styles-wrapper .wp-block-button:not(.is-style-outline) .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-button .wp-block-button__link.is-style-outline,
			#editor .editor-styles-wrapper .wp-block-pullquote.is-style-solid-color', 'background-color' ),

	// Text-color
	array( '#editor .editor-styles-wrapper .fse-template-part .main-navigation a,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation a:link,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation a:visited,
			#editor .editor-styles-wrapper .is-style-outline .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-title a,
			#editor .editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-button__link.is-style-outline,
			#editor .editor-styles-wrapper a', 'color' ),

	// Border color left
	array( '#editor .editor-styles-wrapper .wp-block-quote', 'border-left-color' ),

	// Border color right
	array( '#editor .editor-styles-wrapper .wp-block-quote[style*="text-align: right"],
			#editor .editor-styles-wrapper .wp-block-quote[style*="text-align:right"]', 'border-right-color' ),

	/**
	 * Utility Classes
	 */
	// Background-color
	array( '#editor .editor-styles-wrapper .has-primary-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-primary-background-color[class]', 'background-color' ),
	// Text-color
	array( '#editor .editor-styles-wrapper .has-primary-color[class],
			#editor .editor-styles-wrapper .wp-block .has-primary-color[class]', 'color' ),

), __( 'Link Color' ) );

// Text Color
// $config-global--color-foreground-default
add_editor_color_rule( 'txt', '#111111', array(

	// Text-color
	array( '#editor .editor-styles-wrapper .editor-post-title__block .editor-post-title__input,
			#editor .editor-styles-wrapper .wp-block-search .wp-block-search__button,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation,
			#editor .editor-styles-wrapper .wp-block-pullquote,
			#editor .editor-styles-wrapper .wp-block-code,
			#editor .editor-styles-wrapper', 'color' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .wp-block-cover,
			#editor .editor-styles-wrapper .wp-block-cover-image', 'background-color' ),

	/**
	 * Utility Classes
	 */
	// Text-color
	array( '#editor .editor-styles-wrapper .has-background-background-color[class],
			#editor .editor-styles-wrapper .has-background-dark-background-color[class],
			#editor .editor-styles-wrapper .has-background-light-background-color[class],
			#editor .editor-styles-wrapper .has-foreground-color[class],
			#editor .editor-styles-wrapper .wp-block .has-background-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-background-dark-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-background-light-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-foreground-color[class]', 'color' ),
	// Background-color
	array( '#editor .editor-styles-wrapper .has-foreground-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-foreground-background-color[class]', 'background-color' ),
	// Text-color darkened
	array( '#editor .editor-styles-wrapper .has-foreground-dark-color[class],
			#editor .editor-styles-wrapper .wp-block .has-foreground-dark-color[class]', 'color', '-1' ),
	// Background-color darkened
	array( '#editor .editor-styles-wrapper .has-foreground-dark-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-foreground-dark-background-color[class]', 'background-color', '-1' ),
	// Text-color brightened
	array( '#editor .editor-styles-wrapper .has-foreground-light-color[class],
			#editor .editor-styles-wrapper .wp-block .has-foreground-light-color[class]', 'color', '+2' ),
	// Background-color brightened
	array( '#editor .editor-styles-wrapper .has-foreground-light-background-color[class],
			#editor .editor-styles-wrapper .wp-block .has-foreground-light-background-color[class]', 'background-color', '+2' ),

	/**
	 * Grays
	 * Same as text color
	 */
	// Text-color
	array( '#editor .editor-styles-wrapper .a8c-posts-list__item .a8c-posts-list-item__meta,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .cat-links,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-meta,
			#editor .editor-styles-wrapper .wp-block-image figcaption,
			#editor .editor-styles-wrapper .wp-block-latest-comments .wp-block-latest-comments__comment-date,
			#editor .editor-styles-wrapper .wp-block-latest-posts .wp-block-latest-posts__post-date,
			#editor .editor-styles-wrapper .wp-block-newspack-blocks-homepage-articles article .cat-links,
			#editor .editor-styles-wrapper .wp-block-newspack-blocks-homepage-articles article .entry-meta,
			#editor .editor-styles-wrapper .wp-block-pullquote .wp-block-pullquote__citation,
			#editor .editor-styles-wrapper .wp-block-pullquote cite,
			#editor .editor-styles-wrapper .wp-block-pullquote footer,
			#editor .editor-styles-wrapper .wp-block-quote .wp-block-quote__citation,
			#editor .editor-styles-wrapper .wp-block-quote cite,
			#editor .editor-styles-wrapper .wp-block-quote footer,
			#editor .editor-styles-wrapper .wp-block-quote.is-large .wp-block-quote__citation,
			#editor .editor-styles-wrapper .wp-block-quote.is-large cite,
			#editor .editor-styles-wrapper .wp-block-quote.is-large footer,
			#editor .editor-styles-wrapper .wp-block-quote.is-style-large .wp-block-quote__citation,
			#editor .editor-styles-wrapper .wp-block-quote.is-style-large cite,
			#editor .editor-styles-wrapper .wp-block-quote.is-style-large footer,
			#editor .editor-styles-wrapper .wp-block-video figcaption,
			#editor .editor-styles-wrapper figcaption', 'color' ),

), __( 'Text Color' ) );

// Accent Color (Red)
// $config-global--color-secondary-default
add_editor_color_rule( 'fg1', '#0963C4', array(

	/**
	 * Utility Classes
	 */

	// Text-color
	array( '#editor .editor-styles-wrapper .has-secondary-color[class]', 'color' ),
	// Background-color
	array( '#editor .editor-styles-wrapper .has-secondary-background-color[class]', 'background-color' ),

), __( 'Secondary Color' ) );


/**
 * Custom CSS
 */
function exford_editor_custom_colors_extra_css() { ?>
	#editor .editor-styles-wrapper .has-text-color a,
	#editor .editor-styles-wrapper .has-background a {
		color: currentColor;
	}
<?php }
add_theme_support( 'custom_colors_extra_css', 'exford_editor_custom_colors_extra_css' );
