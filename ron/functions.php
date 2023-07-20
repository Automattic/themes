<?php
/**
 * Ron functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ron
 * @since Ron 1.0
 */


if ( ! function_exists( 'ron_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Ron 1.0
	 *
	 * @return void
	 */
	function ron_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'ron' );
	}

endif;

add_action( 'after_setup_theme', 'ron_support' );

if ( ! function_exists( 'ron_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Ron 1.0
	 *
	 * @return void
	 */
	function ron_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'ron-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'ron-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'ron_styles' );
