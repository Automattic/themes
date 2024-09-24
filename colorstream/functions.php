<?php
/**
 * Colorstream functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Colorstream
 * @since Colorstream 1.0
 */


if ( ! function_exists( 'colorstream_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Colorstream 1.0
	 *
	 * @return void
	 */
	function colorstream_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'colorstream' );
	}

endif;

add_action( 'after_setup_theme', 'colorstream_support' );

if ( ! function_exists( 'colorstream_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Colorstream 1.0
	 *
	 * @return void
	 */
	function colorstream_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'colorstream-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'colorstream-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'colorstream_styles' );
