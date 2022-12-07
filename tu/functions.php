<?php
/**
 * Tú functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tú
 * @since Tú 1.0
 */


if ( ! function_exists( 'tu_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Tú 1.0
	 *
	 * @return void
	 */
	function tu_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'tu' );
	}

endif;

add_action( 'after_setup_theme', 'tu_support' );

if ( ! function_exists( 'tu_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Tú 1.0
	 *
	 * @return void
	 */
	function tu_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'tu-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'tu-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'tu_styles' );
