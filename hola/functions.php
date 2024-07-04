<?php
/**
 * hola functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hola
 * @since hola 1.0
 */


if ( ! function_exists( 'hola_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since hola 1.0
	 *
	 * @return void
	 */
	function hola_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'hola' );
	}

endif;

add_action( 'after_setup_theme', 'hola_support' );

if ( ! function_exists( 'hola_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since hola 1.0
	 *
	 * @return void
	 */
	function hola_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'hola-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'hola-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'hola_styles' );
