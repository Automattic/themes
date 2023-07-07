<?php
/**
 * Grammer One functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Grammer One
 * @since Grammer One 1.0
 */


if ( ! function_exists( 'grammerone_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Grammer One 1.0
	 *
	 * @return void
	 */
	function grammerone_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'grammerone' );
	}

endif;

add_action( 'after_setup_theme', 'grammerone_support' );

if ( ! function_exists( 'grammerone_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Grammer One 1.0
	 *
	 * @return void
	 */
	function grammerone_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'grammerone-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'grammerone-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'grammerone_styles' );
