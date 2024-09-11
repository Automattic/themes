<?php
/**
 * Greenseed functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Greenseed
 * @since Greenseed 1.0
 */


if ( ! function_exists( 'greenseed_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Greenseed 1.0
	 *
	 * @return void
	 */
	function greenseed_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'greenseed' );
	}

endif;

add_action( 'after_setup_theme', 'greenseed_support' );

if ( ! function_exists( 'greenseed_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Greenseed 1.0
	 *
	 * @return void
	 */
	function greenseed_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'greenseed-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'greenseed-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'greenseed_styles' );
