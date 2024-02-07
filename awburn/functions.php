<?php
/**
 * Awburn functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Awburn
 * @since Awburn 1.0
 */


if ( ! function_exists( 'awburn_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Awburn 1.0
	 *
	 * @return void
	 */
	function awburn_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'awburn' );
	}

endif;

add_action( 'after_setup_theme', 'awburn_support' );

if ( ! function_exists( 'awburn_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Awburn 1.0
	 *
	 * @return void
	 */
	function awburn_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'awburn-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'awburn-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'awburn_styles' );
