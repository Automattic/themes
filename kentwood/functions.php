<?php
/**
 * Kentwood functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kentwood
 * @since Kentwood 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'kentwood_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Kentwood 1.0
	 *
	 * @return void
	 */
	function Kentwood_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'kentwood' );
	}

endif;

add_action( 'after_setup_theme', 'kentwood_support' );

if ( ! function_exists( 'kentwood_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Kentwood 1.0
	 *
	 * @return void
	 */
	function Kentwood_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'kentwood-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'kentwood-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'kentwood_styles' );



