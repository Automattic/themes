<?php
/**
 * Maverick functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Maverick
 * @since Maverick 1.0
 */


if ( ! function_exists( 'maverick_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Maverick 1.0
	 *
	 * @return void
	 */
	function maverick_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'maverick' );
	}

endif;

add_action( 'after_setup_theme', 'maverick_support' );

if ( ! function_exists( 'maverick_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Maverick 1.0
	 *
	 * @return void
	 */
	function maverick_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'maverick-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'maverick-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'maverick_styles' );