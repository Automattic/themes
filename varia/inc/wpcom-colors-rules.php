<?php 
// Custom Colors: 
function varia_define_color_annotations( $colors ) {
	// Background Color
	if( isset( $colors['background'] ) ){
		// --wp--preset--color--background
		add_color_rule(
			'bg',
			$colors['background'],
			array(

				// This placeholder is needed to make the color annotations work
				array( '.wp--preset--color--background', 'background-color' ),

			),
			__( 'Background Color' )
		);
	}

	// Foreground Color
	if( isset( $colors['foreground'] ) ){
		// --wp--preset--color--foreground
		add_color_rule(
			'txt',
			$colors['foreground'],
			array(

				// This placeholder is needed to make the color annotations work
				array( '.wp--preset--color--foreground', 'color' ),

			),
			__( 'Foreground Color' )
		);
	}

	// Primary Color
	if( isset( $colors['primary'] ) ){
		// --wp--preset--color--primary
		add_color_rule(
			'link',
			$colors['primary'],
			array(

				// This placeholder is needed to make the color annotations work
				array( '.wp--preset--color--primary', 'color' ),

			),
			__( 'Primary Color' )
		);
	}

	// Secondary Color
	if( isset( $colors['secondary'] ) ){
		// --wp--preset--color--secondary
		add_color_rule(
			'fg1',
			$colors['secondary'],
			array(

				// Text-color
				array( '.wp--preset--color--secondary', 'color' ),

			),
			__( 'Secondary Color' )
		);
	}

	// Tertiary Color
	if( isset( $colors['tertiary'] ) ){
		// --wp--preset--color--tertiary
		add_color_rule(
			'fg2',
			$colors['tertiary'],
			array(

				// Text-color
				array( '.wp--preset--color--tertiary', 'color' ),

			),
			__( 'Tertiary Color' )
		);
	}
}

/**
 * Custom CSS.
 * The plugin takes the body of this function and applies it in a style tag in the document head.
 */
function varia_custom_colors_extra_css() {
	$colors_array = get_theme_mod( 'colors_manager' );

	if( isset( $colors['colors']['bg'] ) ){
		$background   = $colors_array['colors']['bg'];
		$background_low_contrast  = change_color_luminescence( $background, -10 );
		$background_high_contrast = change_color_luminescence( $background, 10 );
	}

	if( isset( $colors['colors']['txt'] ) ){
		$foreground   = $colors_array['colors']['txt'];
		$foreground_low_contrast  = change_color_luminescence( $foreground, 10 );
		$foreground_high_contrast = change_color_luminescence( $foreground, -10 );
	}

	if( isset( $colors['colors']['link'] ) ){
		$primary       = $colors_array['colors']['link'];	
		$primary_hover = change_color_luminescence( $primary, 10 );	
	}

	if( isset( $colors['colors']['fg1'] ) ){
		$secondary    = $colors_array['colors']['fg1'];
		$secondary_hover          = change_color_luminescence( $secondary, 10 );
	}

	if( isset( $colors['colors']['fg2'] ) ){
		$border       = $colors_array['colors']['fg2'];
		$border_low_contrast  	  = change_color_luminescence( $border, 10 );
		$border_high_contrast 	  = change_color_luminescence( $border, -10 );
	}

	?>

	:root,
	#editor .editor-styles-wrapper {
		<?php if( isset( $colors['colors']['bg'] ) ){ ?>
			--wp--preset--color--background: <?php echo $background; ?>;
			--wp--preset--color--background-low-contrast: <?php echo $background_low_contrast; ?>;
			--wp--preset--color--background-high-contrast: <?php echo $background_high_contrast; ?>;
		<?php }
		if( isset( $colors['colors']['txt'] ) ){ ?>
			--wp--preset--color--foreground: <?php echo $foreground; ?>;
			--wp--preset--color--foreground-low-contrast: <?php echo $foreground_low_contrast; ?>;
			--wp--preset--color--foreground-high-contrast: <?php echo $foreground_high_contrast; ?>;
		<?php }
		if( isset( $colors['colors']['link'] ) ){ ?>
			--wp--preset--color--primary: <?php echo $primary; ?>;
			--wp--preset--color--primary-hover: <?php echo $primary_hover; ?>;
			
		<?php }
		if( isset( $colors['colors']['fg1'] ) ){ ?>
			--wp--preset--color--secondary: <?php echo $secondary; ?>;
			--wp--preset--color--secondary-hover: <?php echo $secondary_hover; ?>;
		<?php }
		if( isset( $colors['colors']['fg2'] ) ){ ?>
			--wp--preset--color--border: <?php echo $border; ?>;
			--wp--preset--color--border-low-contrast: <?php echo $border_low_contrast; ?>;
			--wp--preset--color--border-high-contrast: <?php echo $border_high_contrast; ?>;
		<?php } ?>
	}

	<?php
}
add_theme_support( 'custom_colors_extra_css', 'varia_custom_colors_extra_css' );

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