<?php
/**
 * Screenplay functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Screenplay
 * @since Screenplay 1.0
 */


if ( ! function_exists( 'screenplay_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Screenplay 1.0
	 *
	 * @return void
	 */
	function screenplay_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'screenplay' );
	}

endif;

add_action( 'after_setup_theme', 'screenplay_support' );

if ( ! function_exists( 'screenplay_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Screenplay 1.0
	 *
	 * @return void
	 */
	function screenplay_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'screenplay-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'screenplay-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'screenplay_styles' );
