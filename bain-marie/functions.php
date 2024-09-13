<?php
/**
 * Bain Marie functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bain Marie
 * @since Bain Marie 1.0
 */


if ( ! function_exists( 'bain_marie_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Bain Marie 1.0
	 *
	 * @return void
	 */
	function bain_marie_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'bain-marie' );
	}

endif;

add_action( 'after_setup_theme', 'bain_marie_support' );

if ( ! function_exists( 'bain_marie_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Bain Marie 1.0
	 *
	 * @return void
	 */
	function bain_marie_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'bain_marie-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'bain_marie-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'bain_marie_styles' );
