<?php
/**
 * Barnsbury23 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Barnsbury23
 * @since Barnsbury23 1.0
 */


if ( ! function_exists( 'barnsbury2323_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Barnsbury23 1.0
	 *
	 * @return void
	 */
	function barnsbury2323_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'barnsbury2323' );
	}

endif;

add_action( 'after_setup_theme', 'barnsbury2323_support' );

if ( ! function_exists( 'barnsbury2323_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Barnsbury23 1.0
	 *
	 * @return void
	 */
	function barnsbury2323_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'barnsbury2323-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'barnsbury2323-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'barnsbury2323_styles' );


