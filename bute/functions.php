<?php
/**
 * Bute functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bute
 * @since Bute 1.0
 */
declare( strict_types = 1 );

if ( ! function_exists( 'bute_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Bute 1.0
	 *
	 * @return void
	 */
	function bute_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'bute' );
	}

endif;

add_action( 'after_setup_theme', 'bute_support' );

if ( ! function_exists( 'bute_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Bute 1.0
	 *
	 * @return void
	 */
	function bute_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'bute-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'bute-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'bute_styles' );
