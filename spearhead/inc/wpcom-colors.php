<?php

/*
 * Custom Colors: Seedlet
 */

// Background Color
// --global--color-background
add_color_rule( 'bg', '#FFFFFF', array(

	// This placeholder is needed to make the color annotations work
	array( '.global--color-background', 'background-color' ),

), __( 'Background Color' ) );

// Foreground Color
// --global--color-foreground-light
add_color_rule( 'txt', '#444444', array(

	// This placeholder is needed to make the color annotations work
	array( '.global--color-foreground-light', 'color' ),

), __( 'Foreground Color' ) );

// Primary Color
// --global--color-primary
add_color_rule( 'link', '#000000', array(

	// This placeholder is needed to make the color annotations work
	array( '.global--color-primary', 'color' ),

), __( 'Primary Color' ) );

// Secondary Color
// --global--color-secondary
add_color_rule( 'fg1', '#3C8067', array(

	// Text-color
	array( '.global--color-secondary', 'color' ),

), __( 'Secondary Color' ) );

// Tertiary Color
// --global--color-tertiary
add_color_rule( 'fg2', '#FAFBF6', array(

	// Text-color
	array( '.global--color-tertiary', 'color' ),

), __( 'Tertiary Color' ) );

function change_color_luminescence( $hex, $amount ) {
	require_lib( 'colorline' );
	$colorline = new colorline();
	$hex_without_hash = substr( $hex, 1, strlen( $hex ) );
	$rgb = $colorline::hex_to_rgb( $hex_without_hash );
	$hsvl = $colorline::rgb_to_hsvl( $rgb );
	return 'hsl( ' . $hsvl[ 0 ] . ',' . $hsvl[ 1 ] . '%,' . ( $hsvl[ 2 ] + $amount ) . '%)';
}

/**
 * Custom CSS.
 * The plugin takes the body of this function and applies it in a style tag in the document head.
 */
function seedlet_custom_colors_extra_css() {
	$colors_array = get_theme_mod( 'colors_manager' );
	$background = $colors_array['colors']['bg'];
	$foreground = $colors_array['colors']['txt'];
	$primary = $colors_array['colors']['link'];
	$secondary = $colors_array['colors']['fg1'];
	$tertiary  = $colors_array['colors']['fg2'];

	$foreground_light = change_color_luminescence( $foreground, 10 );
	$foreground_dark = change_color_luminescence( $foreground, -10 );
	$primary_hover = change_color_luminescence( $primary, 10 );
	$secondary_hover = change_color_luminescence( $secondary, 10 );
?>

	:root,
	#editor .editor-styles-wrapper {
		--global--color-background: <?php echo $background; ?>;
		--global--color-foreground: <?php echo $foreground; ?>;
		--global--color-foreground-light: <?php echo $foreground_light; ?>;
		--global--color-foreground-dark: <?php echo $foreground_dark; ?>;
		--global--color-primary: <?php echo $primary; ?>;
		--global--color-primary-hover: <?php echo $primary_hover; ?>;
		--global--color-secondary: <?php echo $secondary; ?>;
		--global--color-secondary-hover: <?php echo $secondary_hover; ?>;
		--global--color-tertiary: <?php echo $tertiary; ?>;
	}

<?php }
add_theme_support( 'custom_colors_extra_css', 'seedlet_custom_colors_extra_css' );

// Light
add_color_palette( array(
	'#EFFCED',
	'#DCEEE2',
	'#297B27',
	'#639182',
	'#333333',
), /* translators: This is the name for a color scheme */ 'Light' );
// Medium
add_color_palette( array(
	'#EEF4F7',
	'#0F2751',
	'#0F6D89',
	'#37374C',
	'#E7E7F3',
), /* translators: This is the name for a color scheme */ 'Medium' );
// Dark
add_color_palette( array(
	'#2d0f2d',
	'#bfadc1',
	'#d2cad2',
	'#887890',
	'#3a1c3a',
), /* translators: This is the name for a color scheme */ 'Dark' );
