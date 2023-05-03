<?php
/**
 * Poema functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Poema
 * @since Poema 1.0
 */


if ( ! function_exists( 'poema_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Poema 1.0
	 *
	 * @return void
	 */
	function poema_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'poema' );
	}

endif;

add_action( 'after_setup_theme', 'poema_support' );

if ( ! function_exists( 'poema_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Poema 1.0
	 *
	 * @return void
	 */
	function poema_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'poema-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'poema-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'poema_styles' );
