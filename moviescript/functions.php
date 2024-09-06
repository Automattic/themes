<?php
/**
 * Moviescript functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Moviescript
 * @since Moviescript 1.0
 */


if ( ! function_exists( 'moviescript_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Moviescript 1.0
	 *
	 * @return void
	 */
	function moviescript_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'moviescript' );
	}

endif;

add_action( 'after_setup_theme', 'moviescript_support' );

if ( ! function_exists( 'moviescript_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Moviescript 1.0
	 *
	 * @return void
	 */
	function moviescript_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'moviescript-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'moviescript-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'moviescript_styles' );