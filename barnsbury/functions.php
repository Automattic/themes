<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Barnsbury
 * @since 1.0.0
 */

if ( ! function_exists( 'barnsbury_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function barnsbury_setup() {

		// Add child theme editor styles, compiled from `style-child-theme-editor.scss`.
		add_editor_style( 'style-editor.css' );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'barnsbury' ),
					'shortName' => __( 'S', 'barnsbury' ),
					'size'      => 16,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'barnsbury' ),
					'shortName' => __( 'M', 'barnsbury' ),
					'size'      => 23,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'barnsbury' ),
					'shortName' => __( 'L', 'barnsbury' ),
					'size'      => 27,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'barnsbury' ),
					'shortName' => __( 'XL', 'barnsbury' ),
					'size'      => 32,
					'slug'      => 'huge',
				),
			)
		);

		/*
		 * Get customizer colors and add them to the editor color palettes
		 *
		 * - if the customizer color is empty, use the default
		 */
		$colors_array     = get_theme_mod( 'colors_manager' ); // color annotations array()
		$primary          = ! empty( $colors_array ) ? $colors_array['colors']['link'] : '#20603C'; // $config-global--color-primary-default;
		$secondary        = ! empty( $colors_array ) ? $colors_array['colors']['fg1'] : '#655441';  // $config-global--color-secondary-default;
		$background       = ! empty( $colors_array ) ? $colors_array['colors']['bg'] : '#FFFDF6';   // $config-global--color-background-default;
		$foreground       = ! empty( $colors_array ) ? $colors_array['colors']['txt'] : '#3C2323';  // $config-global--color-foreground-default;
		$foreground_light = ( ! empty( $colors_array ) && $colors_array['colors']['txt'] != '#3C2323' ) ? $colors_array['colors']['txt'] : '#844d4d';  // $config-global--color-foreground-light-default;
		$foreground_dark  = ( ! empty( $colors_array ) && $colors_array['colors']['txt'] != '#3C2323' ) ? $colors_array['colors']['txt'] : '#0D1B24';  // $config-global--color-foreground-dark-default;

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'barnsbury' ),
					'slug'  => 'primary',
					'color' => $primary,
				),
				array(
					'name'  => __( 'Secondary', 'barnsbury' ),
					'slug'  => 'secondary',
					'color' => $secondary,
				),
				array(
					'name'  => __( 'Background', 'barnsbury' ),
					'slug'  => 'background',
					'color' => $background,
				),
				array(
					'name'  => __( 'Foreground', 'barnsbury' ),
					'slug'  => 'foreground',
					'color' => $foreground,
				),
				array(
					'name'  => __( 'Foreground Light', 'balasana' ),
					'slug'  => 'foreground-light',
					'color' => $foreground_light,
				),
				array(
					'name'  => __( 'Foreground Dark', 'balasana' ),
					'slug'  => 'foreground-dark',
					'color' => $foreground_dark,
				),
			)
		);

		// Add .mobile-nav-side body class.
		add_filter( 'body_class', 'varia_mobile_nav_on_side' );
	}
endif;
add_action( 'after_setup_theme', 'barnsbury_setup', 12 );

/**
 * Filter the content_width in pixels, based on the child-theme's design and stylesheet.
 */
function barnsbury_content_width() {
	return 750;
}
add_filter( 'varia_content_width', 'barnsbury_content_width' );

/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function barnsbury_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Rubik, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$rubik = esc_html_x( 'on', 'Rubik font: on or off', 'barnsbury' );

	if ( 'off' !== $rubik ) {
		$font_families = array();

		if ( 'off' !== $rubik ) {
			$font_families[] = 'Rubik:400,700,400italic,700italic';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function barnsbury_scripts() {

	// enqueue Google fonts, if necessary
	wp_enqueue_style( 'barnsbury-fonts', barnsbury_fonts_url(), array(), null );

	// dequeue parent styles
	wp_dequeue_style( 'varia-style' );

	// enqueue child styles
	wp_enqueue_style('barnsbury-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));

	// enqueue child RTL styles
	wp_style_add_data( 'barnsbury-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'barnsbury_scripts', 99 );

/**
 * Enqueue theme styles for the block editor.
 */
function barnsbury_editor_styles() {

	// Enqueue Google fonts in the editor, if necessary
	wp_enqueue_style( 'barnsbury-editor-fonts', barnsbury_fonts_url(), array(), null );

	// Hide duplicate palette colors
	$colors_array = get_theme_mod('colors_manager', array( 'colors' => true )); // color annotations array()
	if ( ! empty( $colors_array ) && $colors_array['colors']['txt'] != '#3C2323' ) { // $config-global--color-foreground-light-default;
		$inline_palette_css = '.components-circular-option-picker__option-wrapper:nth-child(5),
			.components-circular-option-picker__option-wrapper:nth-child(6) {
				display: none;
			}';
		wp_add_inline_style( 'wp-edit-blocks', $inline_palette_css );
	}
}
add_action( 'enqueue_block_editor_assets', 'barnsbury_editor_styles' );

// This makes it possible to define the function in earlier to alter if the class should be applied or not.
if ( ! function_exists( 'varia_mobile_nav_on_side' ) ) {
	function varia_mobile_nav_on_side( $classes ) {
		return array_merge( $classes, array( 'mobile-nav-side' ) );
	}
}

