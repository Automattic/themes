<?php
/* Custom Colors: Varia */

// Background Color (White)
// $config-global--color-background-default
add_color_rule( 'bg', '#ffffff', array(

	// Background-color
	array( '#editor .editor-styles-wrapper,
			#editor .editor-styles-wrapper .is-style-outline .wp-block-button__link,
			#editor .editor-styles-wrapper .is-style-outline .wp-block-button__link.has-focus,
			#editor .editor-styles-wrapper .is-style-outline .wp-block-button__link:focus,
			#editor .editor-styles-wrapper .is-style-outline .wp-block-button__link:hover', 'background-color' ),

	// Text-color
	// Needs contrast against `link` (primary)
	array( '#editor .editor-styles-wrapper .button,
			#editor .editor-styles-wrapper .button.has-focus,
			#editor .editor-styles-wrapper .button:focus,
			#editor .editor-styles-wrapper .button:hover,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation .button,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation .button:focus,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation .button:hover,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation .has-focus.button,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button:focus,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .has-focus.button,
			#editor .editor-styles-wrapper .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-button__link.has-focus,
			#editor .editor-styles-wrapper .wp-block-button__link:focus,
			#editor .editor-styles-wrapper .wp-block-button__link:hover,
			#editor .editor-styles-wrapper .wp-block-cover,
			#editor .editor-styles-wrapper .wp-block-cover-image,
			#editor .editor-styles-wrapper .wp-block-cover-image:not([class*="background-color"]) .block-editor-block-list__block,
			#editor .editor-styles-wrapper .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-image-text,
			#editor .editor-styles-wrapper .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-text,
			#editor .editor-styles-wrapper .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover__inner-container,
			#editor .editor-styles-wrapper .wp-block-cover:not([class*="background-color"]) .block-editor-block-list__block,
			#editor .editor-styles-wrapper .wp-block-cover:not([class*="background-color"]) .wp-block-cover-image-text,
			#editor .editor-styles-wrapper .wp-block-cover:not([class*="background-color"]) .wp-block-cover-text,
			#editor .editor-styles-wrapper .wp-block-cover:not([class*="background-color"]) .wp-block-cover__inner-container,
			#editor .editor-styles-wrapper .wp-block-pullquote.is-style-solid-color', 'color', 'link' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .wp-block-button__link.has-focus,
			#editor .editor-styles-wrapper .wp-block-button__link:focus,
			#editor .editor-styles-wrapper .wp-block-button__link:hover', 'color', 'link', 16 ),

	/**
	 * Utility Classes
	 */
	// Text-color
	// Needs contrast against `link` (primary)
	array( '#editor .editor-styles-wrapper .has-primary-background-color[class]', 'color', 'link' ),
	// Text-color
	// Needs contrast against `fg1` (secondary)
	array( '#editor .editor-styles-wrapper .has-secondary-background-color[class]', 'color', 'fg1' ),

	// Text-color
	// Needs contrast against `txt` (foreground)
	array( '#editor .editor-styles-wrapper .has-foreground-background-color[class],
			#editor .editor-styles-wrapper .has-foreground-dark-background-color[class],
			#editor .editor-styles-wrapper .has-foreground-light-background-color[class]', 'color', 'txt', 12 ),
	// Text-color
	// Needs contrast against `txt` (background)
	array( '#editor .editor-styles-wrapper .has-background-color[class],
			#editor .editor-styles-wrapper .has-background-dark-color[class],
			#editor .editor-styles-wrapper .has-background-light-color[class],
			#editor .editor-styles-wrapper .has-background-background-color[class],
			#editor .editor-styles-wrapper .has-background-dark-background-color[class],
			#editor .editor-styles-wrapper .has-background-light-background-color[class]', 'color', 'bg', 12 ),
	// Background-color
	array( '#editor .editor-styles-wrapper .has-background-background-color[class]', 'background-color' ),
	// Background-color darkened
	array( '#editor .editor-styles-wrapper .has-background-dark-background-color[class]', 'background-color', '-1' ),
	// Background-color lightened
	array( '#editor .editor-styles-wrapper .has-background-light-background-color[class]', 'background-color', '+1' ),

), __( 'Background Color' ) );

// Link Color (Blue)
// $config-global--color-primary-default
add_color_rule( 'link', '#0000ff', array(

	// Background-color
	array( '#editor .editor-styles-wrapper .button,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation .button,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button,
			#editor .editor-styles-wrapper .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-pullquote.is-style-solid-color', 'background-color' ),

	// Text-color
	// Needs contrast against `bg`
	array( '#editor .editor-styles-wrapper .fse-template-part .main-navigation a,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation a:link,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation a:visited,
			#editor .editor-styles-wrapper .is-style-outline .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-title a,
			#editor .editor-styles-wrapper .wp-block-button__link.is-style-outline,
			#editor .editor-styles-wrapper a', 'color', 'bg' ),

	// Border color left
	// Needs contrast against `bg`
	array( '#editor .editor-styles-wrapper .wp-block-quote', 'border-left-color', 'bg' ),

	// Border color right
	// Needs contrast against `bg`
	array( '#editor .editor-styles-wrapper .wp-block-quote[style*="text-align: right"],
			#editor .editor-styles-wrapper .wp-block-quote[style*="text-align:right"]', 'border-right-color', 'bg' ),

	// Background-color
	// Needs contrast against `bg` with less contrast
	array( '#editor .editor-styles-wrapper .button.has-focus,
			#editor .editor-styles-wrapper .button:focus,
			#editor .editor-styles-wrapper .button:hover,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation #toggle:focus + #toggle-menu,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation .button:focus,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation .button:hover,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation .has-focus.button,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button:focus,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .has-focus.button,
			#editor .editor-styles-wrapper .wp-block-button__link.has-focus,
			#editor .editor-styles-wrapper .wp-block-button__link:focus,
			#editor .editor-styles-wrapper .wp-block-button__link:hover', 'background-color', 'bg', 3 ),

	// Text-color
	// Needs contrast against `bg` with less contrast
	array( '#editor .editor-styles-wrapper .fse-template-part .main-navigation a:hover,
			#editor .editor-styles-wrapper .is-style-outline .wp-block-button__link.has-focus,
			#editor .editor-styles-wrapper .is-style-outline .wp-block-button__link:focus,
			#editor .editor-styles-wrapper .is-style-outline .wp-block-button__link:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .cat-links a:active,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .cat-links a:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-meta a:active,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-meta a:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-title a:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .more-link:active,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .more-link:hover,
			#editor .editor-styles-wrapper .wp-block-button__link.is-style-outline.has-focus,
			#editor .editor-styles-wrapper .wp-block-button__link.is-style-outline:focus,
			#editor .editor-styles-wrapper .wp-block-button__link.is-style-outline:hover,
			#editor .editor-styles-wrapper a:hover', 'color', 'bg', 3 ),

	/**
	 * Utility Classes
	 */
	// Background-color
	array( '#editor .editor-styles-wrapper .has-primary-background-color[class]', 'background-color' ),
	// Text-color
	// Needs contrast against `bg`
	array( '#editor .editor-styles-wrapper .has-primary-color[class]', 'color', 'bg' ),

), __( 'Link Color' ) );

// Text Color (Gray)
// $config-global--color-foreground-default
add_color_rule( 'txt', '#444444', array(

	// Background-color
	// array( '', 'background-color' ),

	// Text-color
	// Needs contrast against `bg` with more contrast
	array( '#editor .editor-post-title__block .editor-post-title__input,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation,
			#editor .editor-styles-wrapper .wp-block-pullquote,
			#editor .editor-styles-wrapper', 'color', 'bg', 7 ),

	// Text-color
	// Needs contrast against `bg` with less contrast (dim)
	array( '#editor .editor-styles-wrapper .a8c-posts-list__item .a8c-posts-list-item__meta,
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
			#editor .editor-styles-wrapper figcaption', 'color', 'bg', 4 ),

	// Border-color
	// Needs contrast against `bg` with more contrast
	array( '#editor .editor-styles-wrapper .wp-block-code', 'border-color', 'bg', 7 ),

	// Border-top-color
	// Needs contrast against `bg` with more contrast
	array( '#editor .editor-styles-wrapper .wp-block-pullquote', 'border-top-color', 'bg', 7 ),

	// Border-bottom-color
	// Needs contrast against `bg` with more contrast
	array( '#editor .editor-styles-wrapper .wp-block-pullquote,
			#editor .editor-styles-wrapper .wp-block-separator', 'border-bottom-color', 'bg', 7 ),

	// Text-color
	// Needs contrast against `bg` with more contrast
	array( '#editor .editor-styles-wrapper hr.wp-block-separator.is-style-dots:before', 'color', 'bg', 7 ),

	// Background-color
	// Needs contrast against `bg` with more contrast
	// array( '', 'background-color', 'bg', 7 ),

	/**
	 * Utility Classes
	 */
	// Foreground
	// Needs contrast against `bg`
	array( '#editor .editor-styles-wrapper .has-foreground-color[class]', 'color', 'bg' ),

	array( '#editor .editor-styles-wrapper .has-background-background-color[class],
			#editor .editor-styles-wrapper .has-background-dark-background-color[class],
			#editor .editor-styles-wrapper .has-background-light-background-color[class],
			#editor .editor-styles-wrapper .has-foreground-background-color[class]', 'background-color' ),

	// Text-color darkened
	array( '#editor .editor-styles-wrapper .has-foreground-dark-color[class]', 'color', '-1' ),
	// Background-color darkened
	array( '#editor .editor-styles-wrapper .has-foreground-dark-background-color[class]', 'background-color', '-1' ),

	// Text-color brightened
	array( '#editor .editor-styles-wrapper .has-foreground-light-color[class]', 'color', '+2' ),
	// Background-color brightened
	array( '#editor .editor-styles-wrapper .has-foreground-light-background-color[class]', 'background-color', '+2' ),

), __( 'Text Color' ) );

// Accent Color (Red)
// $config-global--color-secondary-default
add_color_rule( 'fg1', '#ff0000', array(

	/**
	 * Utility Classes
	 */
	// Text-color
	// Needs contrast against `bg`
	array( '#editor .editor-styles-wrapper .has-secondary-color[class]', 'color', 'bg' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .has-secondary-background-color[class]', 'background-color' ),

), __( 'Secondary Color' ) );
