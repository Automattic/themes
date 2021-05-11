<?php
/**
 * Child Theme Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage mayland
 * @since 1.0.0
 */

if ( ! function_exists( 'mayland_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mayland_setup() {
		// Add child theme editor styles, compiled from `style-child-theme-editor.scss`.
		add_editor_style( 'style-editor.css' );

		// Add child theme editor font sizes to match Sass-map variables in `_config-child-theme-deep.scss`.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'mayland' ),
					'shortName' => __( 'S', 'mayland' ),
					'size'      => 16.6,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Normal', 'mayland' ),
					'shortName' => __( 'M', 'mayland' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => __( 'Large', 'mayland' ),
					'shortName' => __( 'L', 'mayland' ),
					'size'      => 28.8,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Huge', 'mayland' ),
					'shortName' => __( 'XL', 'mayland' ),
					'size'      => 34.56,
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
		$primary          = is_array( $colors_array ) && array_key_exists( 'colors', $colors_array ) ? $colors_array['colors']['link'] : '#000000'; // $config-global--color-primary-default;
		$secondary        = is_array( $colors_array ) && array_key_exists( 'colors', $colors_array ) ? $colors_array['colors']['fg1'] : '#1a1a1a';  // $config-global--color-secondary-default;
		$background       = is_array( $colors_array ) && array_key_exists( 'colors', $colors_array ) ? $colors_array['colors']['bg'] : '#FFFFFF';   // $config-global--color-background-default;
		$foreground       = is_array( $colors_array ) && array_key_exists( 'colors', $colors_array ) ? $colors_array['colors']['txt'] : '#010101';  // $config-global--color-foreground-default;
		$foreground_light = ( is_array( $colors_array ) && array_key_exists( 'colors', $colors_array ) && $colors_array['colors']['txt'] != '#010101' ) ? $colors_array['colors']['txt'] : '#666666';  // $config-global--color-foreground-light-default;
		$foreground_dark  = ( is_array( $colors_array ) && array_key_exists( 'colors', $colors_array ) && $colors_array['colors']['txt'] != '#010101' ) ? $colors_array['colors']['txt'] : '#333333';  // $config-global--color-foreground-dark-default;

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'mayland' ),
					'slug'  => 'primary',
					'color' => $primary,
				),
				array(
					'name'  => __( 'Secondary', 'mayland' ),
					'slug'  => 'secondary',
					'color' => $secondary,
				),
				array(
					'name'  => __( 'Background', 'mayland' ),
					'slug'  => 'background',
					'color' => $background,
				),
				array(
					'name'  => __( 'Foreground', 'mayland' ),
					'slug'  => 'foreground',
					'color' => $foreground,
				),
				array(
					'name'  => __( 'Foreground Light', 'mayland' ),
					'slug'  => 'foreground-light',
					'color' => $foreground_light,
				),
				array(
					'name'  => __( 'Foreground Dark', 'mayland' ),
					'slug'  => 'foreground-dark',
					'color' => $foreground_dark,
				),
			)
		);

		// Setup nav on side toggle support.
		if ( function_exists( 'varia_mobile_nav_on_side_setup' ) ) {
			varia_mobile_nav_on_side_setup();
		}
	}
endif;
add_action( 'after_setup_theme', 'mayland_setup', 12 );

/**
 * Filter the content_width in pixels, based on the child-theme's design and stylesheet.
 */
function mayland_content_width() {
	return 750;
}
add_filter( 'varia_content_width', 'mayland_content_width' );

/**
 * Add Google webfonts, if necessary
 *
 * - See: http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function mayland_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Poppins, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$poppins = esc_html_x( 'on', 'Poppins font: on or off', 'mayland' );

	if ( 'off' !== $poppins ) {
		$font_families = array();

		$font_families[] = 'Poppins:400,400i,600,600i';

		/**
		 * A filter to enable child themes to add/change/omit font families.
		 * 
		 * @param array $font_families An array of font families to be imploded for the Google Font API
		 */
		$font_families = apply_filters( 'included_google_font_families', $font_families );

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
function mayland_scripts() {

	// enqueue Google fonts, if necessary
	wp_enqueue_style( 'mayland-fonts', mayland_fonts_url(), array(), null );

	// dequeue parent styles
	wp_dequeue_style( 'varia-style' );

	// enqueue child styles
	wp_enqueue_style( 'mayland-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	// enqueue child RTL styles
	wp_style_add_data( 'mayland-style', 'rtl', 'replace' );

}
add_action( 'wp_enqueue_scripts', 'mayland_scripts', 99 );

/**
 * Enqueue theme styles for the block editor.
 */
function mayland_editor_styles() {

	// Enqueue Google fonts in the editor, if necessary
	wp_enqueue_style( 'mayland-editor-fonts', mayland_fonts_url(), array(), null );

	// Hide duplicate palette colors
	$colors_array = get_theme_mod( 'colors_manager' );
	if ( ! empty( $colors_array ) && $colors_array['colors']['txt'] != '#666666' ) { // $config-global--color-foreground-light-default;
		$inline_palette_css = '.components-circular-option-picker__option-wrapper:nth-child(5),
			.components-circular-option-picker__option-wrapper:nth-child(6) {
				display: none;
			}';
		wp_add_inline_style( 'wp-edit-blocks', $inline_palette_css );
	}
}
add_action( 'enqueue_block_editor_assets', 'mayland_editor_styles' );
