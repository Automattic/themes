<?php
/**
 * Bibimbap functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bibimbap
 * @since Bibimbap 1.0
 */


if ( ! function_exists( 'bibimbap_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Bibimbap 1.0
	 *
	 * @return void
	 */
	function bibimbap_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'bibimbap' );
	}

endif;

add_action( 'after_setup_theme', 'bibimbap_support' );

if ( ! function_exists( 'bibimbap_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Bibimbap 1.0
	 *
	 * @return void
	 */
	function bibimbap_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'bibimbap-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'bibimbap-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'bibimbap_styles' );
