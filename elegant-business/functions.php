<?php
/**
 * Elegant Business functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Elegant_Business
 */

if ( ! function_exists( 'elegant_business_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function elegant_business_setup() {
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 128,
				'width'       => 190,
				'flex-width'  => true,
				'flex-height' => false,
				'header-text' => array( 'site-title' ),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __( 'Primary', 'elegant-business' ),
					'slug'  => 'primary',
					'color' => '#c43d80', // $color__link
				),
				array(
					'name'  => __( 'Secondary', 'elegant-business' ),
					'slug'  => 'secondary',
					'color' => '#9e3067', // $color__border-link-hover
				),
				array(
					'name'  => __( 'Dark Gray', 'elegant-business' ),
					'slug'  => 'dark-gray',
					'color' => '#111111', // $color__text-main
				),
				array(
					'name'  => __( 'Light Gray', 'elegant-business' ),
					'slug'  => 'light-gray',
					'color' => '#767676', // $color__text-light
				),
				array(
					'name'  => __( 'White', 'elegant-business' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
			)
		);
	}
endif; // elegant_business_setup
add_action( 'after_setup_theme', 'elegant_business_setup', 30 );

// Our filter callback function
function elegant_business_primary_color_hue() {
	// Hue
	return 330;
}
add_filter( 'twentynineteen_default_hue', 'elegant_business_primary_color_hue' );

// Our filter callback function
function elegant_business_primary_color_saturation() {
	// Saturation
	return 53;
}
add_filter( 'twentynineteen_default_saturation', 'elegant_business_primary_color_saturation' );

// Our filter callback function
function elegant_business_primary_color_lightness() {
	// Lightness
	return 50;
}
add_filter( 'twentynineteen_default_lightness', 'elegant_business_primary_color_lightness' );

// Our filter callback function
function elegant_business_primary_color_lightness_hover() {
	// Lightness
	return 40;
}
add_filter( 'twentynineteen_default_lightness_hover', 'elegant_business_primary_color_lightness_hover' );

/**
 * Google font URLs.
 */
function elegant_business_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Open Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$source_serif_pro = esc_html_x( 'on', 'Source Serif Pro font: on or off', 'elegant-business' );

	if ( 'off' !== $source_serif_pro ) {
		$font_families = array();

		if ( 'off' !== $source_serif_pro ) {
			$font_families[] = 'Source Serif Pro:400,700,400italic';
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
function elegant_business_scripts() {

	/**
	 * Styles
	 */
	wp_enqueue_style( 'elegant-business-fonts', elegant_business_fonts_url(), array(), null );

	// Replace print styles
	wp_dequeue_style( 'twentynineteen-print-style' );
	wp_enqueue_style( 'elegant-business-print-style', get_stylesheet_directory_uri() . '/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

}
add_action( 'wp_enqueue_scripts', 'elegant_business_scripts', 99 );

/**
 * Enqueue supplemental block editor scripts.
 */
function elegant_business_block_editor_scripts() {

	/**
	 * Styles
	 */
	wp_enqueue_style( 'elegant-business-fonts', elegant_business_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'elegant_business_block_editor_scripts' );


/**
 * Load extras.php file (if necessary).
 */
require get_stylesheet_directory() . '/inc/extras.php';

/**
 * Load wpcom compatibility file (if necessary).
 */
require get_stylesheet_directory() . '/inc/wpcom.php';

/**
 * Load Jetpack compatibility file.
 */
require get_stylesheet_directory() . '/inc/jetpack.php';

/**
 * Customizer additions.
 */
require get_stylesheet_directory() . '/inc/customizer.php';
