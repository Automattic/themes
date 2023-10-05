<?php
/**
 * Programme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Programme
 * @since Programme 1.0
 */


if ( ! function_exists( 'programme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Programme 1.0
	 *
	 * @return void
	 */
	function programme_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'programme' );
	}

endif;

add_action( 'after_setup_theme', 'programme_support' );

if ( ! function_exists( 'programme_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Programme 1.0
	 *
	 * @return void
	 */
	function programme_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'programme-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'programme-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'programme_styles' );
