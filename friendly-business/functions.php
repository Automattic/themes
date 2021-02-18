<?php
/**
 * Friendly Business functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Friendly_Business
 */

if ( ! function_exists( 'friendly_business_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function friendly_business_setup() {
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 180,
				'width'       => 180,
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
					'name'  => __( 'Primary', 'friendly-business' ),
					'slug'  => 'primary',
					'color' => '#20603c', // $color__link
				),
				array(
					'name'  => __( 'Secondary', 'friendly-business' ),
					'slug'  => 'secondary',
					'color' => '#133a24', // $color__border-link-hover
				),
				array(
					'name'  => __( 'Dark Gray', 'friendly-business' ),
					'slug'  => 'dark-gray',
					'color' => '#3c2323', // $color__text-main
				),
				array(
					'name'  => __( 'Light Gray', 'friendly-business' ),
					'slug'  => 'light-gray',
					'color' => '#0d1b24', // $color__text-dark
				),

				array(
					'name'  => __( 'White', 'friendly-business' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
			)
		);
	}
endif; // friendly_business_setup
add_action( 'after_setup_theme', 'friendly_business_setup', 30 );

function friendly_business_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Rubik, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$rubik = esc_html_x( 'on', 'Rubik font: on or off', 'friendly-business' );

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
function friendly_business_scripts() {

	/**
	 * Styles
	 */
	wp_enqueue_style( 'friendly-business-fonts', friendly_business_fonts_url(), array(), null );

}
add_action( 'wp_enqueue_scripts', 'friendly_business_scripts' );

/**
 * Enqueue supplemental block editor scripts.
 */
function friendly_business_block_editor_scripts() {

	/**
	 * Block Editor Scripts
	 */
	wp_enqueue_style( 'friendly-business-fonts', friendly_business_fonts_url(), array(), null );
	wp_enqueue_script( 'friendly-business-block-editor-filters', get_theme_file_uri( '/js/block-editor-filters.js' ), array(), '1.0', true );
}
add_action( 'enqueue_block_editor_assets', 'friendly_business_block_editor_scripts' );

/**
 * Filter default color from Twenty Nineteen.
 */
function friendly_business_primary_color_hue() {
	return 146;
}
add_filter( 'twentynineteen_default_hue', 'friendly_business_primary_color_hue' );

function friendly_business_primary_color_saturation() {
	return 50;
}
add_filter( 'twentynineteen_default_saturation', 'friendly_business_primary_color_saturation' );

function friendly_business_primary_color_lightness() {
	return 25;
}
add_filter( 'twentynineteen_default_lightness', 'friendly_business_primary_color_lightness' );

/**
 * Load Jetpack compatibility file.
 */
require get_stylesheet_directory() . '/inc/jetpack.php';

/**
 * Customizer additions.
 */
require get_stylesheet_directory() . '/inc/customizer.php';
