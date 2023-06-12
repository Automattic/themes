<?php
/**
 * Rothko functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rothko
 * @since Rothko 1.0
 */


if ( ! function_exists( 'rothko_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Rothko 1.0
	 *
	 * @return void
	 */
	function rothko_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'rothko' );
	}

endif;

add_action( 'after_setup_theme', 'rothko_support' );

if ( ! function_exists( 'rothko_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Rothko 1.0
	 *
	 * @return void
	 */
	function rothko_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'rothko-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'rothko-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'rothko_styles' );
