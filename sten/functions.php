<?php
/**
 * Sten functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sten
 * @since Sten 1.0
 */


if ( ! function_exists( 'sten_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Sten 1.0
	 *
	 * @return void
	 */
	function sten_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'sten' );
	}

endif;

add_action( 'after_setup_theme', 'sten_support' );

if ( ! function_exists( 'sten_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Sten 1.0
	 *
	 * @return void
	 */
	function sten_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'sten-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'sten-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'sten_styles' );
