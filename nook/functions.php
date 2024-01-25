<?php
/**
 * Nook functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nook
 * @since Nook 1.0
 */

declare( strict_types = 1 );


if ( ! function_exists( 'nook_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Nook 1.0
	 *
	 * @return void
	 */
	function nook_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'nook' );
	}

endif;

add_action( 'after_setup_theme', 'nook_support' );

if ( ! function_exists( 'nook_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Nook 1.0
	 *
	 * @return void
	 */
	function nook_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'nook-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'nook-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'nook_styles' );
