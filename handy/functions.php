<?php
/**
 * Handy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Handy
 * @since Handy 1.0
 */


if ( ! function_exists( 'handy_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Handy 1.0
	 *
	 * @return void
	 */
	function handy_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'handy' );
	}

endif;

add_action( 'after_setup_theme', 'handy_support' );

if ( ! function_exists( 'handy_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Handy 1.0
	 *
	 * @return void
	 */
	function handy_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'handy-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'handy-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'handy_styles' );
