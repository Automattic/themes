<?php
/**
 * Azur functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Azur
 * @since Azur 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'azur_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Azur 1.0
	 *
	 * @return void
	 */
	function azur_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'azur' );
	}

endif;

add_action( 'after_setup_theme', 'azur_support' );

if ( ! function_exists( 'azur_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Azur 1.0
	 *
	 * @return void
	 */
	function azur_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'azur-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'azur-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'azur_styles' );
