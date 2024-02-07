<?php
/**
 * Epi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Epi
 * @since Epi 1.0
 */

 declare( strict_types = 1 );

if ( ! function_exists( 'epi_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Epi 1.0
	 *
	 * @return void
	 */
	function epi_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'epi' );
	}

endif;

add_action( 'after_setup_theme', 'epi_support' );

if ( ! function_exists( 'epi_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Epi 1.0
	 *
	 * @return void
	 */
	function epi_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'epi-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'epi-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'epi_styles' );
