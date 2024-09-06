<?php
/**
 * Sprinkler functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sprinkler
 * @since Sprinkler 1.0
 */


if ( ! function_exists( 'sprinkler_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Sprinkler 1.0
	 *
	 * @return void
	 */
	function sprinkler_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'sprinkler' );
	}

endif;

add_action( 'after_setup_theme', 'sprinkler_support' );

if ( ! function_exists( 'sprinkler_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Sprinkler 1.0
	 *
	 * @return void
	 */
	function sprinkler_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'sprinkler-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'sprinkler-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'sprinkler_styles' );
