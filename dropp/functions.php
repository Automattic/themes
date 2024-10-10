<?php
/**
 * Dropp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dropp
 * @since Dropp 1.0
 */


if ( ! function_exists( 'dropp_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Dropp 1.0
	 *
	 * @return void
	 */
	function dropp_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'dropp' );
	}

endif;

add_action( 'after_setup_theme', 'dropp_support' );

if ( ! function_exists( 'dropp_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Dropp 1.0
	 *
	 * @return void
	 */
	function dropp_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'dropp-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'dropp-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'dropp_styles' );
