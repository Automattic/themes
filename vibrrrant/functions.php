<?php
/**
 * vibrrrant functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vibrrrant
 * @since vibrrrant 1.0
 */


if ( ! function_exists( 'vibrrrant_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since vibrrrant 1.0
	 *
	 * @return void
	 */
	function vibrrrant_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'vibrrrant' );
	}

endif;

add_action( 'after_setup_theme', 'vibrrrant_support' );

if ( ! function_exists( 'vibrrrant_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since vibrrrant 1.0
	 *
	 * @return void
	 */
	function vibrrrant_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'vibrrrant-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'vibrrrant-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'vibrrrant_styles' );
