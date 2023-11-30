<?php
/**
 * Kaze functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kaze
 * @since Kaze 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'kaze_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Kaze 1.0
	 *
	 * @return void
	 */
	function kaze_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'kaze' );
	}

endif;

add_action( 'after_setup_theme', 'kaze_support' );

if ( ! function_exists( 'kaze_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Kaze 1.0
	 *
	 * @return void
	 */
	function kaze_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'kaze-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'kaze-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'kaze_styles' );
