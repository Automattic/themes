<?php
/**
 * Overlaid functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Overlaid
 * @since Overlaid 1.0
 */


if ( ! function_exists( 'overlaid_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Overlaid 1.0
	 *
	 * @return void
	 */
	function overlaid_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'overlaid' );
	}

endif;

add_action( 'after_setup_theme', 'overlaid_support' );

if ( ! function_exists( 'overlaid_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Overlaid 1.0
	 *
	 * @return void
	 */
	function overlaid_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'overlaid-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'overlaid-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'overlaid_styles' );
