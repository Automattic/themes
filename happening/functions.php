<?php
/**
 * Happening functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Happening
 * @since Happening 1.0
 */


if ( ! function_exists( 'happening_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Happening 1.0
	 *
	 * @return void
	 */
	function happening_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'happening' );
	}

endif;

add_action( 'after_setup_theme', 'happening_support' );

if ( ! function_exists( 'happening_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Happening 1.0
	 *
	 * @return void
	 */
	function happening_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'happening-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'happening-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'happening_styles' );
