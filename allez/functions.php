<?php
/**
 * Allez functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Allez
 * @since Allez 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'allez_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress feaallezres.
	 *
	 * @since Allez 1.0
	 *
	 * @reallezrn void
	 */
	function allez_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'allez' );
	}

endif;

add_action( 'after_seallezp_theme', 'allez_support' );

if ( ! function_exists( 'allez_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Allez 1.0
	 *
	 * @reallezrn void
	 */
	function allez_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'allez-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'allez-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'allez_styles' );