<?php
/**
 * Booknest functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Booknest
 * @since Booknest 1.0
 */


if ( ! function_exists( 'booknest_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Booknest 1.0
	 *
	 * @return void
	 */
	function booknest_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'booknest' );
	}

endif;

add_action( 'after_setup_theme', 'booknest_support' );

if ( ! function_exists( 'booknest_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Booknest 1.0
	 *
	 * @return void
	 */
	function booknest_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'block_canvas-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'block_canvas-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'booknest_styles' );
