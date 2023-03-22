<?php
/**
 * Archivo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Archivo
 * @since Archivo 1.0
 */


if ( ! function_exists( 'archivo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Archivo 1.0
	 *
	 * @return void
	 */
	function archivo_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'archivo' );
	}

endif;

add_action( 'after_setup_theme', 'archivo_support' );

if ( ! function_exists( 'archivo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Archivo 1.0
	 *
	 * @return void
	 */
	function archivo_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'archivo-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'archivo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'archivo_styles' );
