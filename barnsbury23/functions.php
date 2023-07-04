<?php
/**
 * Barnsbury23 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Barnsbury23
 * @since Barnsbury23 1.0
 */


if ( ! function_exists( 'barnsbury23_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Barnsbury23 1.0
	 *
	 * @return void
	 */
	function barnsbury23_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'barnsbury23' );
	}

endif;

add_action( 'after_setup_theme', 'barnsbury23_support' );

if ( ! function_exists( 'barnsbury23_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Barnsbury23 1.0
	 *
	 * @return void
	 */
	function barnsbury23_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'barnsbury23-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'barnsbury23-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'barnsbury23_styles' );


