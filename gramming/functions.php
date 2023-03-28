<?php
/**
 * Gramming functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Gramming
 * @since Gramming 1.0
 */


if ( ! function_exists( 'gramming_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Gramming 1.0
	 *
	 * @return void
	 */
	function gramming_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'gramming' );
	}

endif;

add_action( 'after_setup_theme', 'gramming_support' );

if ( ! function_exists( 'gramming_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Gramming 1.0
	 *
	 * @return void
	 */
	function gramming_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'gramming-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'gramming-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'gramming_styles' );
