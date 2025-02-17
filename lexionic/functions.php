<?php
/**
 * Lexionic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lexionic
 * @since Lexionic 1.0
 */


if ( ! function_exists( 'lexionic_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Lexionic 1.0
	 *
	 * @return void
	 */
	function lexionic_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'lexionic' );
	}

endif;

add_action( 'after_setup_theme', 'lexionic_support' );

if ( ! function_exists( 'lexionic_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Lexionic 1.0
	 *
	 * @return void
	 */
	function lexionic_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'lexionic-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'lexionic-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'lexionic_styles' );
