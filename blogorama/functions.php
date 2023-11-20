<?php
/**
 * blogorama functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package blogorama
 * @since blogorama 1.0
 */


if ( ! function_exists( 'blogorama_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since blogorama 1.0
	 *
	 * @return void
	 */
	function blogorama_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'blogorama' );
	}

endif;

add_action( 'after_setup_theme', 'blogorama_support' );

if ( ! function_exists( 'blogorama_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since blogorama 1.0
	 *
	 * @return void
	 */
	function blogorama_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'blogorama-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'blogorama-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'blogorama_styles' );
