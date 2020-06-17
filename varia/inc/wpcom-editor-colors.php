<?php
/*
 * Custom Editor Colors: Varia
 */

// Background Color (White)
// $config-global--color-background-default
add_editor_color_rule( 'bg', '#ffffff', array(

	// Background-color
	array( '#editor .editor-styles-wrapper,
			#editor .editor-styles-wrapper .is-style-outline .wp-block-button__link,
			#editor .editor-styles-wrapper .is-style-outline .wp-block-button__link.has-focus,
			#editor .editor-styles-wrapper .is-style-outline .wp-block-button__link:focus,
			#editor .editor-styles-wrapper .is-style-outline .wp-block-button__link:hover', 'background-color' ),

	// Text-color
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
			#editor .editor-styles-wrapper table.is-style-stripes tbody tr:nth-child(odd),
			#editor .editor-styles-wrapper .wp-block-table.is-style-stripes tbody tr:nth-child(odd),
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
			#editor .editor-styles-wrapper .wp-block-cover.has-background-dim,
			#editor .editor-styles-wrapper .wp-block-cover-image.has-background-dim,
			#editor .editor-styles-wrapper .wp-block-pullquote.is-style-solid-color', 'color' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .wp-block-button__link.has-focus,
			#editor .editor-styles-wrapper .wp-block-button__link:focus,
			#editor .editor-styles-wrapper .wp-block-button__link:hover', 'color', 0.8 ),

	/**
	 * Utility Classes
	 */

	// Text-color
	array( '#editor .editor-styles-wrapper .has-primary-background-color[class],
			#editor .editor-styles-wrapper .has-secondary-background-color[class],
			#editor .editor-styles-wrapper .has-foreground-background-color[class],
			#editor .editor-styles-wrapper .has-foreground-dark-background-color[class],
			#editor .editor-styles-wrapper .has-foreground-light-background-color[class],
			#editor .editor-styles-wrapper .has-background-color[class]', 'color' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .has-background-background-color[class]', 'background-color' ),

	// Text-color darkened
	array( '#editor .editor-styles-wrapper .has-background-dark-color[class]', 'color', '-1'  ),

	// Background-color darkened
	array( '#editor .editor-styles-wrapper .has-background-dark-background-color[class]', 'background-color', '-1' ),

	// Text-color lightened
	array( '#editor .editor-styles-wrapper .has-background-light-color[class]', 'color', '+1'  ),

	// Background-color lightened
	array( '#editor .editor-styles-wrapper .has-background-light-background-color[class]', 'background-color', '+1' ),

), __( 'Background Color' ) );

// Link Color (Blue)
// $config-global--color-primary-default
add_editor_color_rule( 'link', '#0000ff', array(

	// Background-color
	array( '#editor .editor-styles-wrapper .button,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation .button,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button,
			#editor .editor-styles-wrapper .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-pullquote.is-style-solid-color', 'background-color' ),

	// Text-color
	array( '#editor .editor-styles-wrapper .fse-template-part .main-navigation a,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation a:link,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation a:visited,
			#editor .editor-styles-wrapper .is-style-outline .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-title a,
			#editor .editor-styles-wrapper .wp-block-button__link.is-style-outline,
			#editor .editor-styles-wrapper a', 'color' ),

	// Border color left
	array( '#editor .editor-styles-wrapper .wp-block-quote', 'border-left-color' ),

	// Border color right
	array( '#editor .editor-styles-wrapper .wp-block-quote[style*="text-align: right"],
			#editor .editor-styles-wrapper .wp-block-quote[style*="text-align:right"]', 'border-right-color' ),

	// Background-color
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
			#editor .editor-styles-wrapper .wp-block-button__link:hover', 'background-color', 0.8 ),

	// Text-color
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
			#editor .editor-styles-wrapper a:hover', 'color', 0.8 ),

	/**
	 * Utility Classes
	 */

	// Background-color
	array( '#editor .editor-styles-wrapper .has-primary-background-color[class]', 'background-color' ),

	// Text-color
	array( '#editor .editor-styles-wrapper .has-primary-color[class]', 'color' ),

), __( 'Link Color' ) );

// Text Color (Gray)
// $config-global--color-foreground-default
add_editor_color_rule( 'txt', '#444444', array(

	// Text-color
	array( '#editor .editor-post-title__block .editor-post-title__input,
			#editor .editor-styles-wrapper .fse-template-part .main-navigation,
			#editor .editor-styles-wrapper,
			#editor .editor-styles-wrapper .wp-block-pullquote,
			#editor .editor-styles-wrapper hr.wp-block-separator.is-style-dots:before', 'color' ),

	// Text-color with less opacity (dim)
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
			#editor .editor-styles-wrapper figcaption', 'color', 0.8 ),

	// Border-color with less opacity (dim)
	array( '#editor .editor-styles-wrapper .wp-block-code', 'border-color', 0.8 ),

	// Border-top-color with less opacity (dim)
	array( '#editor .editor-styles-wrapper .wp-block-pullquote', 'border-top-color', 0.8 ),

	// Border-bottom-color with less opacity (dim)
	array( '#editor .editor-styles-wrapper .wp-block-pullquote,
			#editor .editor-styles-wrapper .wp-block-separator', 'border-bottom-color', 0.8 ),

	// Background-color
	array( '#editor .editor-styles-wrapper .wp-block-cover.has-background-dim,
			#editor .editor-styles-wrapper .wp-block-cover-image.has-background-dim,
			#editor .editor-styles-wrapper table.is-style-stripes tbody tr:nth-child(odd),
			#editor .editor-styles-wrapper .wp-block-table.is-style-stripes tbody tr:nth-child(odd)', 'background-color' ),

	/**
	 * Utility Classes
	 */

	// Text-color
	array( '#editor .editor-styles-wrapper .has-background-background-color[class],
			#editor .editor-styles-wrapper .has-background-dark-background-color[class],
			#editor .editor-styles-wrapper .has-background-light-background-color[class],
			#editor .editor-styles-wrapper .has-foreground-color[class]', 'color' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .has-foreground-background-color[class]', 'background-color' ),

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
add_editor_color_rule( 'fg1', '#ff0000', array(

	/**
	 * Utility Classes
	 */

	// Text-color
	array( '#editor .editor-styles-wrapper .has-secondary-color[class]', 'color' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .has-secondary-background-color[class]', 'background-color' ),

), __( 'Secondary Color' ) );
