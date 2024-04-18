<?php
/**
 * Luminance functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Luminance
 * @since Luminance 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'luminance_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Luminance 1.0
	 *
	 * @return void
	 */
	function luminance_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'luminance' );
	}

endif;

add_action( 'after_setup_theme', 'luminance_support' );

if ( ! function_exists( 'luminance_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Luminance 1.0
	 *
	 * @return void
	 */
	function luminance_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'luminance-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'luminance-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'luminance_styles' );
