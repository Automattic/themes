<?php
/**
 * Ibis functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage seedlet_blocks
 * @since 1.0.0
 */

if ( ! function_exists( 'ibis_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ibis_setup() {
		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( get_stylesheet_directory_uri() . '/style-editor.css' );
	}
endif;
add_action( 'after_setup_theme', 'ibis_setup', 999 );

/**
 * Add Google webfonts
 *
 * http://themeshaper.com/2014/08/13/how-to-add-google-fonts-to-wordpress-themes/
 */
function ibis_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Lora, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$lora = esc_html_x( 'on', 'Lora font: on or off', 'ibis' );

	if ( 'off' !== $lora ) {
		$font_families = array();

		$font_families[] = 'Lora:400,400i,600,600i,700,700i';

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
function ibis_enqueue() {
	wp_enqueue_style( 'ibis-styles', get_stylesheet_uri() );

	// enqueue Google fonts
	wp_enqueue_style( 'mayland-fonts', ibis_fonts_url(), array(), null );

}
add_action( 'wp_enqueue_scripts', 'ibis_enqueue' );