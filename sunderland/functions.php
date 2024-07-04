<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Sunderland functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sunderland
 * @since Sunderland 1.0
 */


if ( ! function_exists( 'sunderland_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Sunderland 1.0
	 *
	 * @return void
	 */
	function sunderland_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'sunderland' );
	}

endif;

add_action( 'after_setup_theme', 'sunderland_support' );

if ( ! function_exists( 'sunderland_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Sunderland 1.0
	 *
	 * @return void
	 */
	function sunderland_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'sunderland-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'sunderland-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'sunderland_styles' );
