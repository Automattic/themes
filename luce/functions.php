<?php
/**
 * Luce functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Luce
 * @since Luce 1.0
 */


if ( ! function_exists( 'luce_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Luce 1.0
	 *
	 * @return void
	 */
	function luce_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'luce' );
	}

endif;

add_action( 'after_setup_theme', 'luce_support' );

if ( ! function_exists( 'luce_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Luce 1.0
	 *
	 * @return void
	 */
	function luce_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'luce-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'luce-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'luce_styles' );
