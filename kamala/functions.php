<?php
/**
 * Kamala functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kamala
 * @since Kamala 1.0
 */

if ( ! function_exists( 'kamala_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress functionalities.
	 *
	 * @since Kamala 1.0
	 *
	 * @return void
	 */
	function kamala_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'kamala' );
	}

endif;

add_action( 'after_setup_theme', 'kamala_support' );

if ( ! function_exists( 'kamala_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Kamala 1.0
	 *
	 * @return void
	 */
	function kamala_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'kamala-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'kamala-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'kamala_styles' );
