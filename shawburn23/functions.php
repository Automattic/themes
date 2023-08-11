<?php
/**
 * Shawburn23 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Shawburn23
 * @since Shawburn23 1.0
 */


if ( ! function_exists( 'shawburn23_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Shawburn23 1.0
	 *
	 * @return void
	 */
	function shawburn23_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'shawburn23' );
	}

endif;

add_action( 'after_setup_theme', 'shawburn23_support' );

if ( ! function_exists( 'shawburn23_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Shawburn23 1.0
	 *
	 * @return void
	 */
	function shawburn23_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'shawburn23-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'shawburn23-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'shawburn23_styles' );
