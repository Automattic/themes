<?php
/**
 * Reverie functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Reverie
 * @since Reverie 1.0
 */


if ( ! function_exists( 'reverie_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Reverie 1.0
	 *
	 * @return void
	 */
	function reverie_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'reverie' );
	}

endif;

add_action( 'after_setup_theme', 'reverie_support' );

if ( ! function_exists( 'reverie_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Reverie 1.0
	 *
	 * @return void
	 */
	function reverie_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'reverie-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'reverie-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'reverie_styles' );
