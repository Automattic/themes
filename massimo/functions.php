<?php
/**
 * Massimo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Massimo
 * @since Massimo 1.0
 */


if ( ! function_exists( 'massimo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Massimo 1.0
	 *
	 * @return void
	 */
	function massimo_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'massimo' );
	}

endif;

add_action( 'after_setup_theme', 'massimo_support' );

if ( ! function_exists( 'massimo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Massimo 1.0
	 *
	 * @return void
	 */
	function massimo_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'massimo-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'massimo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'massimo_styles' );
