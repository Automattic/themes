<?php

/*
 * Custom Editor Colors: Seedlet
 */

// Background Color
// --global--color-background
add_color_rule( 'bg', '#FFFFFF', array(

	// Background-color
	array( '#editor .editor-styles-wrapper .wp-block-navigation .wp-block-navigation__container,
			#editor .editor-styles-wrapper', 'background-color' ),

	// Text-color
	array( '#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button:active,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button:focus,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .has-focus.button,
			#editor .editor-styles-wrapper .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-button__link.has-focus,
			#editor .editor-styles-wrapper .wp-block-button__link:focus,
			#editor .editor-styles-wrapper .wp-block-button__link:hover,
			#editor .editor-styles-wrapper .wp-block-file .wp-block-file__button,
			#editor .editor-styles-wrapper .wp-block-file .wp-block-file__button.has-focus,
			#editor .editor-styles-wrapper .wp-block-file .wp-block-file__button:focus,
			#editor .editor-styles-wrapper .wp-block-file .wp-block-file__button:hover,
			#editor .editor-styles-wrapper .wp-block-pullquote.is-style-solid-color,
			#editor .editor-styles-wrapper .wp-block-search .has-focus.wp-block-search__button,
			#editor .editor-styles-wrapper .wp-block-search .wp-block-search__button,
			#editor .editor-styles-wrapper .wp-block-search .wp-block-search__button:active,
			#editor .editor-styles-wrapper .wp-block-search .wp-block-search__button:focus,
			#editor .editor-styles-wrapper .wp-block-search .wp-block-search__button:hover', 'color' ),

	/**
	 * Utility Classes
	 */

	// Text-color
	array( '#editor .editor-styles-wrapper .has-primary-background-color,
			#editor .editor-styles-wrapper .has-secondary-background-color,
			#editor .editor-styles-wrapper .has-foreground-background-color,
			#editor .editor-styles-wrapper .has-foreground-dark-background-color,
			#editor .editor-styles-wrapper .has-foreground-light-background-color,
			#editor .editor-styles-wrapper .has-background-color,
			#editor .editor-styles-wrapper .has-background:not(.has-background-background-color) a', 'color' ),

	// Border-bottom-color
	array( '#editor .editor-styles-wrapper .has-secondary-background-color[class] a', 'border-bottom-color' ),

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

// Foreground Color
// --global--color-foreground-light
add_color_rule( 'txt', '#444444', array(

	// Text-color
	array( '#editor .editor-styles-wrapper,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .cat-links,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-meta,
			#editor .editor-styles-wrapper .wp-block-latest-posts .wp-block-latest-posts__post-date,
			#editor .editor-styles-wrapper .wp-block-pullquote .wp-block-pullquote__citation,
			#editor .editor-styles-wrapper .wp-block-pullquote cite,
			#editor .editor-styles-wrapper .wp-block-pullquote footer,
			#editor .editor-styles-wrapper .wp-block-quote .wp-block-quote__citation,
			#editor .editor-styles-wrapper .wp-caption,
			#editor .editor-styles-wrapper .wp-caption-text,
			#editor .editor-styles-wrapper blockquote cite,
			#editor .editor-styles-wrapper blockquote footer,
			#editor .editor-styles-wrapper figcaption,
			#editor .editor-styles-wrapper .editor-post-title .editor-post-title__input,
			#editor .editor-styles-wrapper .editor-post-title .editor-post-title__input::placeholder
			#editor .editor-styles-wrapper .has-tertiary-background-color[class],
			#editor .editor-styles-wrapper .has-tertiary-background-color[class] a,
			#editor .editor-styles-wrapper .has-tertiary-background-color[class]:not(.has-text-color)
			#editor .editor-styles-wrapper .has-tertiary-background-color[class]:not(.has-text-color) a', 'color' ),

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
			#editor .editor-styles-wrapper .has-background-background-color[class] a', 'color' ),

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

// Primary Color
// --global--color-primary
add_color_rule( 'link', '#000000', array(

	// Background-color
	array( '#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button:active,
			#editor .editor-styles-wrapper .wp-block-search .wp-block-search__button:active', 'background-color' ),

	// Text-color
	array( '#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-title a,
			#editor .editor-styles-wrapper .wp-block-file .wp-block-file__textlink,
			#editor .editor-styles-wrapper a,
			#editor .editor-styles-wrapper a:active', 'color' ),

	/**
	 * Utility Classes
	 */

	// Background-color
	array( '#editor .editor-styles-wrapper .has-primary-background-color[class]', 'background-color' ),

	// Text-color
	array( '#editor .editor-styles-wrapper .has-primary-color[class],
			#editor .editor-styles-wrapper .has-black-background-color[class],
			#editor .editor-styles-wrapper .has-foreground-dark-color[class]', 'color' ),

), __( 'Primary Color' ) );

// Secondary Color
// --global--color-secondary
add_color_rule( 'fg1', '#3C8067', array(

	// Text-color
	array( '#editor .editor-styles-wrapper .is-style-outline .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .cat-links a:active,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .cat-links a:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-meta a:active,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-meta a:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .entry-title a:hover,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .more-link:active,
			#editor .editor-styles-wrapper .wp-block-a8c-blog-posts .more-link:hover,
			#editor .editor-styles-wrapper .wp-block-button__link.is-style-outline,
			#editor .editor-styles-wrapper .wp-block-navigation:not(.has-text-color) .wp-block-navigation-link > a:focus,
			#editor .editor-styles-wrapper .wp-block-navigation:not(.has-text-color) .wp-block-navigation-link > a:hover,
			#editor .editor-styles-wrapper a:focus,
			#editor .editor-styles-wrapper a:hover', 'color' ),

	// Background-color
	array( '#editor .editor-styles-wrapper .wp-block-a8c-blog-posts + .button,
			#editor .editor-styles-wrapper .wp-block-button:not(.is-style-outline) .wp-block-button__link,
			#editor .editor-styles-wrapper .wp-block-file .wp-block-file__button,
			#editor .editor-styles-wrapper .wp-block-search .wp-block-search__button', 'background-color' ),

	// border-bottom-color
	array( '#editor .editor-styles-wrapper .wp-block-file .wp-block-file__textlink,
			#editor .editor-styles-wrapper a', 'border-bottom-color' ),

	// border-left-color
	array( '#editor .editor-styles-wrapper .wp-block-quote,
			#editor .editor-styles-wrapper .wp-block-quote.is-large,
			#editor .editor-styles-wrapper .wp-block-quote.is-style-large', 'border-left-color' ),

	// border-right-color
	array( '#editor .editor-styles-wrapper .wp-block-quote.has-text-align-right,
			#editor .editor-styles-wrapper .wp-block-quote.is-large.has-text-align-right,
			#editor .editor-styles-wrapper .wp-block-quote.is-style-large.has-text-align-right', 'border-right-color' ),

	/**
	 * Utility Classes
	 */

	// Background-color
	array( '#editor .editor-styles-wrapper .has-secondary-background-color[class]', 'background-color' ),

	// Text-color
	array( '#editor .editor-styles-wrapper .has-secondary-color[class],
			#editor .editor-styles-wrapper .has-white-background-color[class]', 'color' ),

), __( 'Secondary Color' ) );

// Tertiary Color
// --global--color-tertiary
add_color_rule( 'fg2', '#FAFBF6', array(

	// Background-color
	array( '#editor .editor-styles-wrapper .has-tertiary-background-color[class]', 'background-color' ),

	// Text-color
	array( '#editor .editor-styles-wrapper .has-tertiary-color[class],
			#editor .editor-styles-wrapper .wp-block-cover-image:not([class*="background-color"]) .block-editor-block-list__block,
			#editor .editor-styles-wrapper .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-image-text,
			#editor .editor-styles-wrapper .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-text,
			#editor .editor-styles-wrapper .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover__inner-container,
			#editor .editor-styles-wrapper .wp-block-cover:not([class*="background-color"]) .block-editor-block-list__block,
			#editor .editor-styles-wrapper .wp-block-cover:not([class*="background-color"]) .wp-block-cover-image-text,
			#editor .editor-styles-wrapper .wp-block-cover:not([class*="background-color"]) .wp-block-cover-text,
			#editor .editor-styles-wrapper .wp-block-cover:not([class*="background-color"]) .wp-block-cover__inner-container', 'color' ),

), __( 'Tertiary Color' ) );

/**
 * Custom CSS
 * The plugin takes the body of this function and applies it in a style tag in the document head.
 */
function seedlet_custom_colors_extra_css() {
	$colors_array = get_theme_mod( 'colors_manager' );
	$color_bg = $colors_array['colors']['bg'];
	$color_fg1 = $colors_array['colors']['fg1'];
	$color_fg2 = $colors_array['colors']['fg2']; ?>

	/*
	 * Custom gradients.
	*/
	#editor .editor-styles-wrapper .has-hard-diagonal-gradient-background {
		background: linear-gradient(to bottom right, <?php echo $color_fg1; ?> 49.9%, <?php echo $color_fg2; ?> 50%);
	}

	#editor .editor-styles-wrapper .has-hard-diagonal-inverted-gradient-background {
		background: linear-gradient(to top left, <?php echo $color_fg1; ?> 49.9%, <?php echo $color_fg2; ?> 50%);
	}

	#editor .editor-styles-wrapper .has-diagonal-gradient-background {
		background: linear-gradient(to bottom right, <?php echo $color_fg1; ?>, <?php echo $color_fg2; ?>);
	}

	#editor .editor-styles-wrapper .has-diagonal-inverted-gradient-background {
		background: linear-gradient(to top left, <?php echo $color_fg1; ?>, <?php echo $color_fg2; ?>);
	}

	#editor .editor-styles-wrapper .has-hard-horizontal-gradient-background {
		background: linear-gradient(to bottom, <?php echo $color_fg1; ?> 50%, <?php echo $color_fg2; ?> 50%);
	}

	#editor .editor-styles-wrapper .has-hard-horizontal-inverted-gradient-background {
		background: linear-gradient(to top, <?php echo $color_fg1; ?> 50%, <?php echo $color_fg2; ?> 50%);
	}

	#editor .editor-styles-wrapper .has-horizontal-gradient-background {
		background: linear-gradient(to bottom, <?php echo $color_fg1; ?>, <?php echo $color_fg2; ?>);
	}

	#editor .editor-styles-wrapper .has-horizontal-inverted-gradient-background {
		background: linear-gradient(to top, <?php echo $color_fg1; ?>, <?php echo $color_fg2; ?>);
	}

	#editor .editor-styles-wrapper .has-stripe-gradient-background {
		background: linear-gradient(to bottom, transparent 20%, <?php echo $color_fg1; ?> 20%, <?php echo $color_fg1; ?> 80%, transparent 80%);
	}
<?php }
add_theme_support( 'custom_colors_extra_css', 'seedlet_custom_colors_extra_css' );
