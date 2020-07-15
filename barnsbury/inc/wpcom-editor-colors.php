<?php
/*
 * Custom Editor Colors: Barnsbury
 */

// Background Color (White)
// $config-global--color-background-default
add_editor_color_rule( 'bg', '#FFFDF6', array(

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
add_editor_color_rule( 'link', '#20603C', array(

	// Text-color
	array( '#editor .editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-button__link.is-style-outline,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-title a,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-title a:active,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-title a:focus,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-title a:hover,
			#editor .editor-styles-wrapper .wp-block-latest-posts > li > a:active,
			#editor .editor-styles-wrapper .wp-block-latest-posts > li > a:focus,
			#editor .editor-styles-wrapper .wp-block-latest-posts > li > a:hover', 'color' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .button,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button,
			#editor .editor-styles-wrapper .wp-block-button:not(.is-style-outline) .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-button__link.is-style-outline,
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
	array( '#editor .editor-styles-wrapper .has-primary-color,
			#editor .editor-styles-wrapper .wp-block .has-primary-color', 'color' ),

), __( 'Link Color' ) );

// Text Color
// $config-global--color-foreground-default
add_editor_color_rule( 'txt', '#3C2323', array(

	// Text-color
	array( '#editor .editor-styles-wrapper .editor-post-title__block .editor-post-title__input,
		#editor .editor-styles-wrapper .wp-block-latest-posts > li > a,
		#editor .editor-styles-wrapper .wp-block-pullquote,
		#editor .editor-styles-wrapper .wp-block-separator.is-style-dots:before,
		#editor .editor-styles-wrapper hr.is-style-dots:before,
		#editor .editor-styles-wrapper table.is-style-stripes tbody tr:nth-child(odd),
		#editor .editor-styles-wrapper', 'color' ),

	// Border-top-color
	array( '#editor .editor-styles-wrapper .wp-block-pullquote', 'border-top-color' ),

	// Border-bottom-color
	array( '#editor .editor-styles-wrapper .wp-block-pullquote,
			#editor .editor-styles-wrapper .wp-block-separator,
			#editor .editor-styles-wrapper hr', 'border-bottom-color' ),

	// Border-right-color
	array( '#editor .editor-styles-wrapper .wp-block-separator[style*="text-align: right"],
			#editor .editor-styles-wrapper .wp-block-separator[style*="text-align:right"],
			#editor .editor-styles-wrapper hr[style*="text-align: right"],
			#editor .editor-styles-wrapper hr[style*="text-align:right"]', 'border-right-color' ),

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
			#editor .editor-styles-wrapper .wp-block .has-foreground-color,', 'color' ),

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

// Accent Color
// $config-global--color-secondary-default
add_editor_color_rule( 'fg1', '#655441', array(

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
