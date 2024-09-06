<?php
/**
 * Brute functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Brute
 * @since Brute 1.0
 */


if ( ! function_exists( 'brute_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Brute 1.0
	 *
	 * @return void
	 */
	function brute_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'brute' );
	}

endif;

add_action( 'after_setup_theme', 'brute_support' );

if ( ! function_exists( 'brute_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Brute 1.0
	 *
	 * @return void
	 */
	function brute_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'brute-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'brute-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'brute_styles' );
