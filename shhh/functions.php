<?php
/**
 * Shhh functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Shhh
 * @since Shhh 1.0
 */

 declare( strict_types = 1 );

if ( ! function_exists( 'shhh_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Shhh 1.0
	 *
	 * @return void
	 */
	function shhh_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'shhh' );
	}

endif;

add_action( 'after_setup_theme', 'shhh_support' );

if ( ! function_exists( 'shhh_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Shhh 1.0
	 *
	 * @return void
	 */
	function shhh_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'shhh-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'shhh-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'shhh_styles' );
