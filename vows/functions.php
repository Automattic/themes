<?php
/**
 * Vows functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Vows
 * @since Vows 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'vows_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Vows 1.0
	 *
	 * @return void
	 */
	function vows_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'vows' );
	}

endif;

add_action( 'after_setup_theme', 'vows_support' );

if ( ! function_exists( 'vows_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Vows 1.0
	 *
	 * @return void
	 */
	function vows_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'vows-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'vows-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'vows_styles' );
