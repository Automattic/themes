<?php
/**
 * Modern Business functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Modern_Business
 */

if ( ! function_exists( 'modern_business_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function modern_business_setup() {
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 128,
				'width'       => 128,
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
					'name'  => __( 'Primary', 'modern-business' ),
					'slug'  => 'primary',
					'color' => '#c43d80', // $color__link
				),
				array(
					'name'  => __( 'Secondary', 'modern-business' ),
					'slug'  => 'secondary',
					'color' => '#9e3067', // $color__border-link-hover
				),
				array(
					'name'  => __( 'Dark Gray', 'modern-business' ),
					'slug'  => 'dark-gray',
					'color' => '#181818', // $color__text-main
				),
				array(
					'name'  => __( 'Light Gray', 'modern-business' ),
					'slug'  => 'light-gray',
					'color' => '#686868', // $color__text-light
				),
				array(
					'name'  => __( 'White', 'modern-business' ),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);
	}
endif; // modern_business_setup
add_action( 'after_setup_theme', 'modern_business_setup', 30 );

function modern_business_fonts_url() {
	$fonts_url = '';
	/* Translators: If there are characters in your language that are not
	* supported by IBM Plex Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$font = esc_html_x( 'on', 'IBM Plex Sans font: on or off', 'modern-business' );
	if ( 'off' !== $font ) {
		$font_families = array();
		if ( 'off' !== $font ) {
			$font_families[] = 'IBM Plex Sans:300,300i,500,700';
		}
		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
		$fonts_url  = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}
	return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
 */
function modern_business_scripts() {
	/**
	 * Styles
	 */
	wp_enqueue_style( 'modern-business-fonts', modern_business_fonts_url(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'modern_business_scripts' );
add_action( 'enqueue_block_editor_assets', 'modern_business_scripts' );

/**
 * Customizer additions
 */
require get_stylesheet_directory() . '/inc/customizer.php';

/**
 * Jetpack compatibility file.
 */
require get_stylesheet_directory() . '/inc/jetpack.php';

/**
 * WP.com compatibility file.
 */
require get_stylesheet_directory() . '/inc/wpcom.php';
