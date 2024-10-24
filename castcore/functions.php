<?php
/**
 * CastCore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CastCore
 * @since CastCore 1.0
 */


if ( ! function_exists( 'castcore_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since CastCore 1.0
	 *
	 * @return void
	 */
	function castcore_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'castcore' );
	}

endif;

add_action( 'after_setup_theme', 'castcore_support' );

if ( ! function_exists( 'castcore_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since CastCore 1.0
	 *
	 * @return void
	 */
	function castcore_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'castcore-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'castcore-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'castcore_styles' );
