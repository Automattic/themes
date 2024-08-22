<?php
/**
 * Layover functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Layover
 * @since Layover 1.0
 */


if ( ! function_exists( 'layover_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Layover 1.0
	 *
	 * @return void
	 */
	function layover_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'layover' );
	}

endif;

add_action( 'after_setup_theme', 'layover_support' );

if ( ! function_exists( 'layover_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Layover 1.0
	 *
	 * @return void
	 */
	function layover_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'layover-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'layover-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'layover_styles' );
