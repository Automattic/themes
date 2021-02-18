<?php
/**
 * Professional Business (Twenty Nineteen) functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Professional_Business
 */

if ( ! function_exists( 'professional_business_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function professional_business_setup() {
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
					'name'  => __( 'Primary', 'professional-business' ),
					'slug'  => 'primary',
					'color' => '#0073aa', // $color__link
				),
				array(
					'name'  => __( 'Secondary', 'professional-business' ),
					'slug'  => 'secondary',
					'color' => '#005077', // $color__border-link-hover
				),
				array(
					'name'  => __( 'Dark Gray', 'professional-business' ),
					'slug'  => 'dark-gray',
					'color' => '#1e1e1e', // $color__text-main
				),
				array(
					'name'  => __( 'Light Gray', 'professional-business' ),
					'slug'  => 'light-gray',
					'color' => '#767676', // $color__text-light
				),
				array(
					'name'  => __( 'White', 'professional-business' ),
					'slug'  => 'white',
					'color' => '#ffffff',
				),
			)
		);
	}
endif; // professional_business_setup
add_action( 'after_setup_theme', 'professional_business_setup', 30 );

function professional_business_fonts_url() {

	$fonts_url = '';

	/* Translators: If there are characters in your language that are not
	* supported by Open Sans, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$crimson_text = esc_html_x( 'on', 'Crimson Text font: on or off', 'professional-business' );

	if ( 'off' !== $crimson_text ) {
		$font_families = array();

		if ( 'off' !== $crimson_text ) {
			$font_families[] = 'Crimson Text:400,600,700,400italic,600italic';
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
function professional_business_scripts() {

	/**
	 * Styles
	 */
	wp_enqueue_style( 'professional-business-fonts', professional_business_fonts_url(), array(), null );

}
add_action( 'wp_enqueue_scripts', 'professional_business_scripts' );

/**
 * Enqueue supplemental block editor scripts.
 */
function professional_business_block_editor_scripts() {

	/**
	 * Styles
	 */
	wp_enqueue_style( 'professional-business-fonts', professional_business_fonts_url(), array(), null );

	/**
	 * Block Editor Scripts
	 */
	wp_enqueue_script( 'professional-business-block-editor-filters', get_theme_file_uri( 'js/block-editor-filters.js' ), array(), '1.0', true );
}
add_action( 'enqueue_block_editor_assets', 'professional_business_block_editor_scripts' );

/**
 * Load Jetpack compatibility file.
 */
require get_stylesheet_directory() . '/inc/jetpack.php';

/**
 * Customizer additions.
 */
require get_stylesheet_directory() . '/inc/customizer.php';
