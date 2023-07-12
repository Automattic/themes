<?php
/**
 * Nested functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nested
 * @since Nested 1.0
 */


if ( ! function_exists( 'nested_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Nested 1.0
	 *
	 * @return void
	 */
	function nested_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'nested' );
	}

endif;

add_action( 'after_setup_theme', 'nested_support' );

if ( ! function_exists( 'nested_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Nested 1.0
	 *
	 * @return void
	 */
	function nested_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'nested-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'nested-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'nested_styles' );
