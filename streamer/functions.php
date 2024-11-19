<?php
/**
 * Streamer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Streamer
 * @since Streamer 1.0
 */


if ( ! function_exists( 'streamer_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Streamer 1.0
	 *
	 * @return void
	 */
	function streamer_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'streamer' );
	}

endif;

add_action( 'after_setup_theme', 'streamer_support' );

if ( ! function_exists( 'streamer_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Streamer 1.0
	 *
	 * @return void
	 */
	function streamer_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'streamer-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'streamer-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'streamer_styles' );


