<?php
/**
 * Sophisticated Business (Twenty Nineteen) functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sophisticated_Business
 */

if ( ! function_exists( 'sophisticated_business_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sophisticated_business_setup() {
		// Switches Gutenberg controls to work against a dark background.
		add_theme_support( 'dark-editor-style' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 120,
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
					'name'  => __( 'Primary', 'sophisticated-business' ),
					'slug'  => 'primary',
					'color' => '#caab57', // $color__link
				),
				array(
					'name'  => __( 'Secondary', 'sophisticated-business' ),
					'slug'  => 'secondary',
					'color' => '#b59439', // $color__border-link-hover
				),
				array(
					'name'  => __( 'Dark Gray', 'sophisticated-business' ),
					'slug'  => 'dark-gray',
					'color' => '#1c1c1c', // $color__text-screen
				),
				array(
					'name'  => __( 'Light Gray', 'sophisticated-business' ),
					'slug'  => 'light-gray',
					'color' => '#cccccc', // $color__text-light
				),
				array(
					'name'  => __( 'White', 'sophisticated-business' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
			)
		);
	}
endif; // sophisticated_business_setup
add_action( 'after_setup_theme', 'sophisticated_business_setup', 30 );

function sophisticated_business_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Open Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$poppins = esc_html_x( 'on', 'Poppins font: on or off', 'sophisticated-business' );

	if ( 'off' !== $poppins ) {
		$font_families = array();

		if ( 'off' !== $poppins ) {
			$font_families[] = 'Poppins:400,600,700,400italic,600italic';
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
function sophisticated_business_scripts() {

	/**
	 * Styles
	 */
	wp_enqueue_style( 'sophisticated-business-fonts', sophisticated_business_fonts_url(), array(), null );

	wp_enqueue_script( 'sophisticated-business-script', get_stylesheet_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150302', true );

}
add_action( 'wp_enqueue_scripts', 'sophisticated_business_scripts' );

/**
 * Enqueue supplemental block editor scripts.
 */
function sophisticated_business_block_editor_scripts() {

	/**
	 * Block Editor Scripts
	 */
	//wp_enqueue_script( 'sophisticated-business-block-editor-filters', get_theme_file_uri( '/js/block-editor-filters.js' ), array(), '1.0', true );

	/**
	 * Fonts
	 */
	wp_enqueue_style( 'sophisticated-business-fonts', sophisticated_business_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'sophisticated_business_block_editor_scripts' );

/**
 * Filter default color from Twenty Nineteen.
 */

// Our filter callback function - HUE
function sophisticated_business_primary_color_hue() {
	return 44;
}
add_filter( 'twentynineteen_default_hue', 'sophisticated_business_primary_color_hue' );

// Our filter callback function - SATURATION
function sophisticated_business_primary_color_saturation() {
	return 52;
}
add_filter( 'twentynineteen_default_saturation', 'sophisticated_business_primary_color_saturation' );

// Our filter callback function - LIGHTNESS
function sophisticated_business_primary_color_lightness() {
	return 57;
}
add_filter( 'twentynineteen_default_lightness', 'sophisticated_business_primary_color_lightness' );

// Filter hover colour - lightness value
function sophisticated_business_primary_color_lightness_hover() {
	return 47;
}
add_filter( 'twentynineteen_default_lightness_hover', 'sophisticated_business_primary_color_lightness_hover' );

/**
 * Load Jetpack compatibility file.
 */
require get_stylesheet_directory() . '/inc/jetpack.php';

/**
 * Customizer additions.
 */
require get_stylesheet_directory() . '/inc/customizer.php';
