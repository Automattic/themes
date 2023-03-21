<?php
/**
 * Aalto functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Aalto
 * @since Aalto 1.0
 */


if ( ! function_exists( 'aalto_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Aalto 1.0
	 *
	 * @return void
	 */
	function aalto_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'aalto' );
	}

endif;

add_action( 'after_setup_theme', 'aalto_support' );

if ( ! function_exists( 'aalto_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Aalto 1.0
	 *
	 * @return void
	 */
	function aalto_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'aalto-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'aalto-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'aalto_styles' );
