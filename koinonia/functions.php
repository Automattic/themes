<?php
/**
 * Koinonia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Koinonia
 * @since Koinonia 1.0
 */


if ( ! function_exists( 'koinonia_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Koinonia 1.0
	 *
	 * @return void
	 */
	function koinonia_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'koinonia' );
	}

endif;

add_action( 'after_setup_theme', 'koinonia_support' );

if ( ! function_exists( 'koinonia_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Koinonia 1.0
	 *
	 * @return void
	 */
	function koinonia_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'koinonia-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'koinonia-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'koinonia_styles' );
