<?php
/**
 * Tenaz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tenaz
 * @since Tenaz 1.0
 */


if ( ! function_exists( 'tenaz_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Tenaz 1.0
	 *
	 * @return void
	 */
	function tenaz_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'tenaz' );
	}

endif;

add_action( 'after_setup_theme', 'tenaz_support' );

if ( ! function_exists( 'tenaz_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Tenaz 1.0
	 *
	 * @return void
	 */
	function tenaz_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'tenaz-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'tenaz-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'tenaz_styles' );
