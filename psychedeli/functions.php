<?php
/**
 * PsycheDeli functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PsycheDeli
 * @since PsycheDeli 1.0
 */


if ( ! function_exists( 'psychedeli_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since PsycheDeli 1.0
	 *
	 * @return void
	 */
	function psychedeli_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'psychedeli' );
	}

endif;

add_action( 'after_setup_theme', 'psychedeli_support' );

if ( ! function_exists( 'psychedeli_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since PsycheDeli 1.0
	 *
	 * @return void
	 */
	function psychedeli_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'psychedeli-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'psychedeli-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'psychedeli_styles' );
