<?php
/**
 * boxedbio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package boxedbio
 * @since boxedbio 1.0
 */


if ( ! function_exists( 'boxedbio_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since boxedbio 1.0
	 *
	 * @return void
	 */
	function boxedbio_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'boxedbio' );
	}

endif;

add_action( 'after_setup_theme', 'boxedbio_support' );

if ( ! function_exists( 'boxedbio_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since boxedbio 1.0
	 *
	 * @return void
	 */
	function boxedbio_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'boxedbio-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'boxedbio-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'boxedbio_styles' );
