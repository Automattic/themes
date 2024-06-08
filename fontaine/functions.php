<?php
/**
 * Fontaine functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fontaine
 * @since Fontaine 1.0
 */
declare( strict_types = 1 );

if ( ! function_exists( 'fontaine_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress functionalities.
	 *
	 * @since Fontaine 1.0
	 *
	 * @return void
	 */
	function fontaine_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'fontaine' );
	}

endif;

add_action( 'after_setup_theme', 'fontaine_support' );

if ( ! function_exists( 'fontaine_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Fontaine 1.0
	 *
	 * @return void
	 */
	function fontaine_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'fontaine-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'fontaine-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'fontaine_styles' );
