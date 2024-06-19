<?php
/**
 * jazzygrid functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jazzygrid
 * @since jazzygrid 1.0
 */


if ( ! function_exists( 'jazzygrid_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since jazzygrid 1.0
	 *
	 * @return void
	 */
	function jazzygrid_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'jazzygrid' );
	}

endif;

add_action( 'after_setup_theme', 'jazzygrid_support' );

if ( ! function_exists( 'jazzygrid_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since jazzygrid 1.0
	 *
	 * @return void
	 */
	function jazzygrid_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'jazzygrid-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'jazzygrid-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'jazzygrid_styles' );
