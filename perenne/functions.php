<?php
/**
 * Perenne functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Perenne
 * @since Perenne 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'perenne_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Perenne 1.0
	 *
	 * @return void
	 */
	function perenne_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'perenne' );
	}

endif;

add_action( 'after_setup_theme', 'perenne_support' );

if ( ! function_exists( 'perenne_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Perenne 1.0
	 *
	 * @return void
	 */
	function perenne_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'perenne-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'perenne-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'perenne_styles' );
