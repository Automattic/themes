<?php
/**
 * Cubico functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Cubico
 * @since Cubico 1.0
 */


if ( ! function_exists( 'cubico_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Cubico 1.0
	 *
	 * @return void
	 */
	function cubico_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'cubico' );
	}

endif;

add_action( 'after_setup_theme', 'cubico_support' );

if ( ! function_exists( 'cubico_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Cubico 1.0
	 *
	 * @return void
	 */
	function cubico_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'cubico-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'cubico-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'cubico_styles' );
