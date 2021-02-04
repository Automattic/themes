<?php

// Custom Colors: Seedlet
function seedlet_define_color_annotations( $colors ) {
	// Background Color
	// --global--color-background
	add_color_rule(
		'bg',
		$colors['background'],
		array(

			// This placeholder is needed to make the color annotations work
			array( '.global--color-background', 'background-color' ),

		),
		__( 'Background Color' )
	);

	// Foreground Color
	// --global--color-foreground
	add_color_rule(
		'txt',
		$colors['foreground'],
		array(

			// This placeholder is needed to make the color annotations work
			array( '.global--color-foreground', 'color' ),

		),
		__( 'Foreground Color' )
	);

	// Primary Color
	// --global--color-primary
	add_color_rule(
		'link',
		$colors['primary'],
		array(

			// This placeholder is needed to make the color annotations work
			array( '.global--color-primary', 'color' ),

		),
		__( 'Primary Color' )
	);

	// Secondary Color
	// --global--color-secondary
	add_color_rule(
		'fg1',
		$colors['secondary'],
		array(

			// Text-color
			array( '.global--color-secondary', 'color' ),

		),
		__( 'Secondary Color' )
	);

	// Tertiary Color
	// --global--color-tertiary
	add_color_rule(
		'fg2',
		$colors['tertiary'],
		array(

			// Text-color
			array( '.global--color-tertiary', 'color' ),

		),
		__( 'Tertiary Color' )
	);
}

// These functions are borrowed from the colorline lib
function hex_to_rgb( $hex ) {
	return sscanf( $hex, '%02X%02X%02X' );
}

// RGB values: 0-255
// LUM values: 0-1
function rgb_to_lum( $rgb ) {
	list( $r, $g, $b ) = $rgb;
	return sqrt( 0.241 * $r * $r + 0.691 * $g * $g + 0.068 * $b * $b ) / 255;
}

// RGB values:    0-255, 0-255, 0-255
// HSV values:    0-360, 0-100, 0-100, 0-100
function rgb_to_hsvl( $rgb ) {
	$l                 = rgb_to_lum( $rgb );
	list( $r, $g, $b ) = $rgb;
	$r                 = $r / 255;
	$g                 = $g / 255;
	$b                 = $b / 255;
	$max_rgb           = max( $r, $g, $b );
	$min_rgb           = min( $r, $g, $b );
	$chroma            = $max_rgb - $min_rgb;
	$v                 = 100 * $max_rgb;
	if ( 0 === (int) $chroma ) {
		return array( 0, 0, $v, $l );
	}
	$s = 100 * ( $chroma / $max_rgb );
	if ( $r === $min_rgb ) {
		$h = 3 - ( ( $g - $b ) / $chroma );
	} elseif ( $b === $min_rgb ) {
		$h = 1 - ( ( $r - $g ) / $chroma );
	} else { // $g === $min_rgb
		$h = 5 - ( ( $b - $r ) / $chroma );
	}
	$h = 60 * $h;
	return array( $h, $s, $v, $l );
}

if ( ! function_exists( 'change_color_luminescence' ) ) {
	function change_color_luminescence( $hex, $amount ) {
		$hex_without_hash = substr( $hex, 1, strlen( $hex ) );
		$rgb              = hex_to_rgb( $hex_without_hash );
		$hsvl             = rgb_to_hsvl( $rgb );
		return 'hsl( ' . $hsvl[0] . ',' . $hsvl[1] . '%,' . ( $hsvl[2] + $amount ) . '%)';
	}
}

/**
 * Custom CSS.
 * The plugin takes the body of this function and applies it in a style tag in the document head.
 */
function seedlet_custom_colors_extra_css() {
	$colors_array = get_theme_mod( 'colors_manager' );
	$background   = $colors_array['colors']['bg'];
	$foreground   = $colors_array['colors']['txt'];
	$primary      = $colors_array['colors']['link'];
	$secondary    = $colors_array['colors']['fg1'];
	$tertiary     = $colors_array['colors']['fg2'];

	$foreground_low_contrast  = change_color_luminescence( $foreground, 10 );
	$foreground_high_contrast = change_color_luminescence( $foreground, -10 );
	$primary_hover            = change_color_luminescence( $primary, 10 );
	$secondary_hover          = change_color_luminescence( $secondary, 10 );
	?>

	:root,
	#editor .editor-styles-wrapper {
		--global--color-background: <?php echo $background; ?>;
		--global--color-foreground: <?php echo $foreground; ?>;
		--global--color-foreground-low-contrast: <?php echo $foreground_low_contrast; ?>;
		--global--color-foreground-high-contrast: <?php echo $foreground_high_contrast; ?>;
		--global--color-primary: <?php echo $primary; ?>;
		--global--color-primary-hover: <?php echo $primary_hover; ?>;
		--global--color-secondary: <?php echo $secondary; ?>;
		--global--color-secondary-hover: <?php echo $secondary_hover; ?>;
		--global--color-tertiary: <?php echo $tertiary; ?>;
	}

	<?php
}
add_theme_support( 'custom_colors_extra_css', 'seedlet_custom_colors_extra_css' );

/**
 * Featured Varia/Seedlet Palettes
 */
// Light
add_color_palette(
	array(
		'#FFFFFF',
		'#1D1E1E',
		'#C8133E',
		'#4E2F4B',
		'#F9F9F9',
	), /* translators: This is the name for a color scheme */
	'Light'
);
// Medium
add_color_palette(
	array(
		'#EEF4F7',
		'#242527',
		'#35845D',
		'#233252',
		'#F9F9F9',
	), /* translators: This is the name for a color scheme */
	'Medium'
);
// Dark
add_color_palette(
	array(
		'#1F2527',
		'#FFFFFF',
		'#9FD3E8',
		'#FBE6AA',
		'#364043',
	), /* translators: This is the name for a color scheme */
	'Dark'
);
