<?php
/**
 * Rainfall functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Rainfall
 * @since Rainfall 1.0
 */


if ( ! function_exists( 'rainfall_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Rainfall 1.0
	 *
	 * @return void
	 */
	function rainfall_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'rainfall' );
	}

endif;

add_action( 'after_setup_theme', 'rainfall_support' );

if ( ! function_exists( 'rainfall_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Rainfall 1.0
	 *
	 * @return void
	 */
	function rainfall_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'rainfall-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'rainfall-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'rainfall_styles' );
