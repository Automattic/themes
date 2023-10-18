<?php
/**
 * Hevor functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Hevor
 * @since Hevor 1.0
 */


if ( ! function_exists( 'hevor_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Hevor 1.0
	 *
	 * @return void
	 */
	function hevor_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'hevor' );
	}

endif;

add_action( 'after_setup_theme', 'hevor_support' );

if ( ! function_exists( 'hevor_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Hevor 1.0
	 *
	 * @return void
	 */
	function hevor_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'hevor-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'hevor-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'hevor_styles' );
