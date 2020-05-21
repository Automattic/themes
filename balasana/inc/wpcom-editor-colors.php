<?php
/*
 * Custom Editor Colors: Balasana
 */

// Background Color (White)
// $config-global--color-background-default
add_editor_color_rule( 'bg', 'white', array(

	// Text-color
	array( '.button,
			.button.has-focus,
			.button:focus,
			.button:hover,
			.has-background-color[class],
			.has-foreground-background-color[class],
			.has-foreground-dark-background-color[class],
			.has-foreground-light-background-color[class],
			.has-primary-background-color[class],
			.has-secondary-background-color[class],
			.wp-block-a8c-blog-posts + .button,
			.wp-block-a8c-blog-posts + .button:focus,
			.wp-block-a8c-blog-posts + .button:hover,
			.wp-block-a8c-blog-posts + .has-focus.button,
			.wp-block-button__link,
			.wp-block-button__link.has-focus,
			.wp-block-button__link:focus,
			.wp-block-button__link:hover,
			.wp-block-cover,
			.wp-block-cover-image,
			.wp-block-cover-image:not([class*='background-color']) .block-editor-block-list__block,
			.wp-block-cover-image:not([class*='background-color']) .wp-block-cover-image-text,
			.wp-block-cover-image:not([class*='background-color']) .wp-block-cover-text,
			.wp-block-cover-image:not([class*='background-color']) .wp-block-cover__inner-container,
			.wp-block-cover:not([class*='background-color']) .block-editor-block-list__block,
			.wp-block-cover:not([class*='background-color']) .wp-block-cover-image-text,
			.wp-block-cover:not([class*='background-color']) .wp-block-cover-text,
			.wp-block-cover:not([class*='background-color']) .wp-block-cover__inner-container,
			.wp-block-pullquote.is-style-solid-color', 'color' ),

	// Background-color
	array( '.has-background-background-color[class],
			body', 'background-color' ),

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
add_editor_color_rule( 'link', '#19744C', array(

	// Text-color
	array( '.has-primary-color[class],
			.is-style-outline .wp-block-button__link,
			.wp-block-a8c-blog-posts .entry-title a,
			.wp-block-button__link.is-style-outline,
			a', 'color' ),

	// Background-color
	array( '.button,
			.has-primary-background-color[class],
			.wp-block-a8c-blog-posts + .button,
			.wp-block-button__link,
			.wp-block-pullquote.is-style-solid-color', 'background-color' ),

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
add_editor_color_rule( 'txt', '#303030', array(

	// Text-color
	array( '.editor-post-title__block .editor-post-title__input,
			.has-background-background-color[class],
			.has-background-dark-background-color[class],
			.has-background-light-background-color[class],
			.has-foreground-color[class],
			.wp-block-pullquote,
			body', 'color' ),

	// Background-color
	array( '.has-foreground-background-color[class]', 'background-color' ),

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
add_editor_color_rule( 'fg1', '#BC2213', array(

	/**
	 * Utility Classes
	 */

	// Text-color
	array( '#editor .editor-styles-wrapper .has-secondary-color[class]', 'color' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .has-secondary-background-color[class]', 'background-color' ),

), __( 'Secondary Color' ) );
