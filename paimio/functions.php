<?php
/**
 * Paimio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Paimio
 * @since Paimio 1.0
 */


if ( ! function_exists( 'paimio_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Paimio 1.0
	 *
	 * @return void
	 */
	function paimio_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'paimio' );
	}

endif;

add_action( 'after_setup_theme', 'paimio_support' );

if ( ! function_exists( 'paimio_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Paimio 1.0
	 *
	 * @return void
	 */
	function paimio_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'paimio-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'paimio-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'paimio_styles' );
