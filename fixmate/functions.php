<?php
/**
 * Fixmate functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fixmate
 * @since Fixmate 1.0
 */


if ( ! function_exists( 'fixmate_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Fixmate 1.0
	 *
	 * @return void
	 */
	function fixmate_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'fixmate' );
	}

endif;

add_action( 'after_setup_theme', 'fixmate_support' );

if ( ! function_exists( 'fixmate_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Fixmate 1.0
	 *
	 * @return void
	 */
	function fixmate_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'fixmate-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'fixmate-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'fixmate_styles' );
