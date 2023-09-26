<?php
/**
 * Peirao functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Peirao
 * @since Peirao 1.0
 */


if ( ! function_exists( 'peirao_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Peirao 1.0
	 *
	 * @return void
	 */
	function Peirao_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'peirao' );
	}

endif;

add_action( 'after_setup_theme', 'peirao_support' );

if ( ! function_exists( 'peirao_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Peirao 1.0
	 *
	 * @return void
	 */
	function Peirao_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'peirao-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'peirao-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'peirao_styles' );
