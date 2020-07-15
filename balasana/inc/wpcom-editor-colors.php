<?php
/*
 * Custom Editor Colors: Balasana
 */

// Background Color (White)
// $config-global--color-background-default
add_editor_color_rule( 'bg', '#FFFFFF', array(

	// Text-color
	array( '#editor .editor-styles-wrapper .button,
			#editor .editor-styles-wrapper .button.has-focus,
			#editor .editor-styles-wrapper .button:focus,
			#editor .editor-styles-wrapper .button:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button:focus,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .has-focus.button,
			#editor .editor-styles-wrapper .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-button__link.has-focus,
			#editor .editor-styles-wrapper .wp-block-button__link:focus,
			#editor .editor-styles-wrapper .wp-block-button__link:hover,
			#editor .editor-styles-wrapper .wp-block-cover.has-background-dim,
			#editor .editor-styles-wrapper .wp-block-cover.has-background-dim .block-editor-block-list__block,
			#editor .editor-styles-wrapper .wp-block-cover.has-background-dim .wp-block-cover-image-text,
			#editor .editor-styles-wrapper .wp-block-cover.has-background-dim .wp-block-cover-text,
			#editor .editor-styles-wrapper .wp-block-cover.has-background-dim .wp-block-cover__inner-container,
			#editor .editor-styles-wrapper .wp-block-cover-image.has-background-dim,
			#editor .editor-styles-wrapper .wp-block-cover-image.has-background-dim .block-editor-block-list__block,
			#editor .editor-styles-wrapper .wp-block-cover-image.has-background-dim .wp-block-cover-image-text,
			#editor .editor-styles-wrapper .wp-block-cover-image.has-background-dim .wp-block-cover-text,
			#editor .editor-styles-wrapper .wp-block-cover-image.has-background-dim .wp-block-cover__inner-container,
			#editor .editor-styles-wrapper .wp-block-pullquote.is-style-solid-color', 'color' ),

	// Background-color
	array( '#editor .editor-styles-wrapper', 'background-color' ),

	/**
	 * Utility Classes
	 */

	// Text-color
	array( '#editor .editor-styles-wrapper .has-primary-background-color,
			#editor .editor-styles-wrapper .wp-block .has-primary-background-color,
			#editor .editor-styles-wrapper .has-secondary-background-color,
			#editor .editor-styles-wrapper .wp-block .has-secondary-background-color,
			#editor .editor-styles-wrapper .has-foreground-background-color,
			#editor .editor-styles-wrapper .wp-block .has-foreground-background-color,
			#editor .editor-styles-wrapper .has-foreground-dark-background-color,
			#editor .editor-styles-wrapper .wp-block .has-foreground-dark-background-color,
			#editor .editor-styles-wrapper .has-foreground-light-background-color,
			#editor .editor-styles-wrapper .wp-block .has-foreground-light-background-color,
			#editor .editor-styles-wrapper .has-background-color,
			#editor .editor-styles-wrapper .wp-block .has-background-color', 'color' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .has-background-background-color,
			#editor .editor-styles-wrapper .wp-block .has-background-background-color', 'background-color' ),

	// Text-color darkened
	array( '#editor .editor-styles-wrapper .has-background-dark-color,
			#editor .editor-styles-wrapper .wp-block .has-background-dark-color', 'color', '-1'  ),

	// Background-color darkened
	array( '#editor .editor-styles-wrapper .has-background-dark-background-color,
			#editor .editor-styles-wrapper .wp-block .has-background-dark-background-color', 'background-color', '-1' ),

	// Text-color lightened
	array( '#editor .editor-styles-wrapper .has-background-light-color,
			#editor .editor-styles-wrapper .wp-block .has-background-light-color', 'color', '+1'  ),

	// Background-color lightened
	array( '#editor .editor-styles-wrapper .has-background-light-background-color,
			#editor .editor-styles-wrapper .wp-block .has-background-light-background-color', 'background-color', '+1' ),

), __( 'Background Color' ) );

// Link Color (Blue)
// $config-global--color-primary-default
add_editor_color_rule( 'link', '#19744C', array(

	// Text-color
	array( '#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-title a,
			#editor .editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link:not(.has-text-color),
			.editor-styles-wrapper a', 'color' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .button,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button,
			#editor .editor-styles-wrapper .wp-block-button:not(.is-style-outline) .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-pullquote.is-style-solid-color', 'background-color' ),

	// Border-left-color
	array( '#editor .editor-styles-wrapper .wp-block-quote', 'border-left-color' ),

	/**
	 * Utility Classes
	 */

	// Background-color
	array( '#editor .editor-styles-wrapper .has-primary-background-color,
			#editor .editor-styles-wrapper .wp-block .has-primary-background-color', 'background-color' ),

	// Text-color
	array( '#editor .editor-styles-wrapper .has-primary-color', 'color' ),

), __( 'Link Color' ) );

// Text Color (Gray)
// $config-global--color-foreground-default
add_editor_color_rule( 'txt', '#303030', array(

	// Text-color
	array( '#editor .editor-styles-wrapper .editor-post-title__block .editor-post-title__input,
			#editor .editor-styles-wrapper .wp-block-pullquote,
			#editor .editor-styles-wrapper ', 'color' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .wp-block-cover-image.has-background-dim,
			#editor .editor-styles-wrapper .wp-block-cover.has-background-dim', 'background-color' ),

	/**
	 * Utility Classes
	 */

	// Text-color
	array( '#editor .editor-styles-wrapper .has-background-background-color,
			#editor .editor-styles-wrapper .wp-block .has-background-background-color,
			#editor .editor-styles-wrapper .has-background-dark-background-color,
			#editor .editor-styles-wrapper .wp-block .has-background-dark-background-color,
			#editor .editor-styles-wrapper .has-background-light-background-color,
			#editor .editor-styles-wrapper .wp-block .has-background-light-background-color,
			#editor .editor-styles-wrapper .has-foreground-color,
			#editor .editor-styles-wrapper .wp-block .has-foreground-color', 'color' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .has-foreground-background-color,
			#editor .editor-styles-wrapper .wp-block .has-foreground-background-color', 'background-color' ),

	// Text-color darkened
	array( '#editor .editor-styles-wrapper .has-foreground-dark-color,
			#editor .editor-styles-wrapper .wp-block .has-foreground-dark-color', 'color', '-1' ),

	// Background-color darkened
	array( '#editor .editor-styles-wrapper .has-foreground-dark-background-color,
			#editor .editor-styles-wrapper .wp-block .has-foreground-dark-background-color', 'background-color', '-1' ),

	// Text-color brightened
	array( '#editor .editor-styles-wrapper .has-foreground-light-color,
			#editor .editor-styles-wrapper .wp-block .has-foreground-light-color', 'color', '+2' ),

	// Background-color brightened
	array( '#editor .editor-styles-wrapper .has-foreground-light-background-color,
			#editor .editor-styles-wrapper .wp-block .has-foreground-light-background-color', 'background-color', '+2' ),

), __( 'Text Color' ) );

// Accent Color (Red)
// $config-global--color-secondary-default
add_editor_color_rule( 'fg1', '#BC2213', array(

	/**
	 * Utility Classes
	 */

	// Text-color
	array( '#editor .editor-styles-wrapper .has-secondary-color,
			#editor .editor-styles-wrapper .wp-block .has-secondary-color', 'color' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .has-secondary-background-color,
			#editor .editor-styles-wrapper .wp-block .has-secondary-background-color', 'background-color' ),

), __( 'Secondary Color' ) );
