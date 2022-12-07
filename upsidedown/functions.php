<?php
/**
 * Upsidedown functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Upsidedown
 * @since Upsidedown 1.0
 */


if ( ! function_exists( 'upsidedown_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Upsidedown 1.0
	 *
	 * @return void
	 */
	function upsidedown_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'upsidedown' );
	}

endif;

add_action( 'after_setup_theme', 'upsidedown_support' );

if ( ! function_exists( 'upsidedown_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Upsidedown 1.0
	 *
	 * @return void
	 */
	function upsidedown_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'upsidedown-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'upsidedown-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'upsidedown_styles' );
