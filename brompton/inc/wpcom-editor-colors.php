<?php
/*
 * Custom Editor Colors: Brompton
 */

// Background Color (White)
// $config-global--color-background-default
add_editor_color_rule( 'bg', '#E8E4DD', array(

	// Text-color
	array( '#editor .editor-styles-wrapper .button,
			#editor .editor-styles-wrapper .button.has-focus,
			#editor .editor-styles-wrapper .button:focus,
			#editor .editor-styles-wrapper .button:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button:focus,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .has-focus.button,
			#editor .editor-styles-wrapper .wp-block-button:not(.is-style-button) .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-button:not(.is-style-button) .wp-block-button__link.has-focus,
			#editor .editor-styles-wrapper .wp-block-button:not(.is-style-button) .wp-block-button__link:focus,
			#editor .editor-styles-wrapper .wp-block-button:not(.is-style-button) .wp-block-button__link:hover,
			#editor .editor-styles-wrapper .wp-block-cover,
			#editor .editor-styles-wrapper .wp-block-cover.has-background-dim:not([class*="background-background-color"]),
			#editor .editor-styles-wrapper .wp-block-cover:not([class*="background-color"]) .block-editor-block-list__block,
			#editor .editor-styles-wrapper .wp-block-cover:not([class*="background-color"]) .wp-block-cover-image-text,
			#editor .editor-styles-wrapper .wp-block-cover:not([class*="background-color"]) .wp-block-cover-text,
			#editor .editor-styles-wrapper .wp-block-cover:not([class*="background-color"]) .wp-block-cover__inner-container,
			#editor .editor-styles-wrapper .wp-block-cover-image,
			#editor .editor-styles-wrapper .wp-block-cover-image.has-background-dim:not([class*="background-background-color"]),
			#editor .editor-styles-wrapper .wp-block-cover-image:not([class*="background-color"]) .block-editor-block-list__block,
			#editor .editor-styles-wrapper .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-image-text,
			#editor .editor-styles-wrapper .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-text,
			#editor .editor-styles-wrapper .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover__inner-container,
			#editor .editor-styles-wrapper .wp-block-pullquote.is-style-solid-color', 'color' ),

	// Color
	array( 'hr.wp-block-separator.is-style-dots:before', 'color', '-1' ),

	// Text-color
	array( '#editor .editor-styles-wrapper', 'background-color' ),

	/**
	 * Utility Classes
	 */

	// Text-color
	array( '#editor .editor-styles-wrapper .has-background-color,
			#editor .editor-styles-wrapper .has-foreground-background-color,
			#editor .editor-styles-wrapper .has-foreground-dark-background-color,
			#editor .editor-styles-wrapper .has-foreground-light-background-color,
			#editor .editor-styles-wrapper .has-primary-background-color,
			#editor .editor-styles-wrapper .has-secondary-background-color,
			#editor .editor-styles-wrapper .wp-block .has-background-color,
			#editor .editor-styles-wrapper .wp-block .has-foreground-background-color,
			#editor .editor-styles-wrapper .wp-block .has-foreground-dark-background-color,
			#editor .editor-styles-wrapper .wp-block .has-foreground-light-background-color,
			#editor .editor-styles-wrapper .wp-block .has-primary-background-color,
			#editor .editor-styles-wrapper .wp-block .has-secondary-background-color', 'color' ),

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
add_editor_color_rule( 'link', '#C04239', array(

	// Text-color
	array( '#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-title a,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-title a:hover,
			#editor .editor-styles-wrapper a', 'color' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .button.has-focus,
			#editor .editor-styles-wrapper .button:focus,
			#editor .editor-styles-wrapper .button:hover,
			#editor .editor-styles-wrapper .has-primary-background-color,
			#editor .editor-styles-wrapper .wp-block .has-primary-background-color,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button:focus,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .has-focus.button,
			#editor .editor-styles-wrapper .wp-block-button:not(.is-style-outline) .wp-block-button__link.has-focus,
			#editor .editor-styles-wrapper .wp-block-button:not(.is-style-outline) .wp-block-button__link:focus,
			#editor .editor-styles-wrapper .wp-block-button:not(.is-style-outline) .wp-block-button__link:hover,
			#editor .editor-styles-wrapper .wp-block-pullquote.is-style-solid-color', 'background-color' ),
			
	array( '#editor .editor-styles-wrapper .wp-block-quote', 'border-left-color' ),

	/**
	 * Utility Classes
	 */

	// Text-color
	array( '#editor .editor-styles-wrapper .has-primary-color,
			#editor .editor-styles-wrapper .wp-block .has-primary-color', 'color' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .has-primary-background-color,
			#editor .editor-styles-wrapper .wp-block .has-primary-background-color', 'background-color' ),

), __( 'Link Color' ) );

// Text Color (Gray)
// $config-global--color-foreground-default
add_editor_color_rule( 'txt', '#252E36', array(

	// Text-color
	array( '#editor .editor-styles-wrapper .editor-post-title__block .editor-post-title__input,
			#editor .editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link, 
			#editor .editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link.has-focus,
			#editor .editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link:focus,
			#editor .editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link:hover,
			#editor .editor-styles-wrapper .wp-block-button__link.is-style-outline,
			#editor .editor-styles-wrapper .wp-block-button__link.is-style-outline.has-focus,
			#editor .editor-styles-wrapper .wp-block-button__link.is-style-outline:focus,
			#editor .editor-styles-wrapper .wp-block-button__link.is-style-outline:hover,
			#editor .editor-styles-wrapper .wp-block-button:not(.is-style-outline) .wp-block-button__link:focus,
			#editor .editor-styles-wrapper .wp-block-button:not(.is-style-outline) .wp-block-button__link:hover,
			#editor .editor-styles-wrapper .wp-block-button__link.is-style-outline.has-focus,
			#editor .editor-styles-wrapper .wp-block-button__link.is-style-outline:focus,
			#editor .editor-styles-wrapper .wp-block-button__link.is-style-outline:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .cat-links a:active,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .cat-links a:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-meta a:active,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-meta a:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-title a:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .more-link:active,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .more-link:hover,
			#editor .editor-styles-wrapper .wp-block-pullquote,
			#editor .editor-styles-wrapper .wp-block-table.is-style-stripes tbody tr:nth-child(odd),
			#editor .editor-styles-wrapper table.is-style-stripes tbody tr:nth-child(odd),
			#editor .editor-styles-wrapper a:hover,
			#editor .editor-styles-wrapper', 'color' ),

	// Border-top-color
	array( '#editor .editor-styles-wrapper .wp-block-pullquote', 'border-top-color' ),

	// Border-bottom-color
	array( '#editor .editor-styles-wrapper .comment-list, 
			#editor .editor-styles-wrapper .wp-block-pullquote, 
			#editor .editor-styles-wrapper hr, 
			#editor .editor-styles-wrapper hr.wp-block-separator', 'border-bottom-color' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .button,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button,
			#editor .editor-styles-wrapper .wp-block-button:not(.is-style-outline) .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-cover-image,
			#editor .editor-styles-wrapper .wp-block-cover-image.has-background-dim,
			#editor .editor-styles-wrapper .wp-block-cover,
			#editor .editor-styles-wrapper .wp-block-cover.has-background-dim', 'background-color' ),

	/**
	 * Utility Classes
	 */

	// Text-color
	array( '#editor .editor-styles-wrapper .has-background-background-color,
			#editor .editor-styles-wrapper .has-background-dark-background-color,
			#editor .editor-styles-wrapper .has-background-light-background-color,
			#editor .editor-styles-wrapper .has-foreground-color,
			#editor .editor-styles-wrapper .wp-block .has-background-background-color,
			#editor .editor-styles-wrapper .wp-block .has-background-dark-background-color,
			#editor .editor-styles-wrapper .wp-block .has-background-light-background-color,
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
add_editor_color_rule( 'fg1', '#FFFFFF', array(

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
