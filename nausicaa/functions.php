<?php
/**
 * Nausicaa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Nausicaa
 * @since Nausicaa 1.0
 */


if ( ! function_exists( 'nausicaa_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress feanausicaares.
	 *
	 * @since Nausicaa 1.0
	 *
	 * @renausicaarn void
	 */
	function nausicaa_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'nausicaa' );
	}

endif;

add_action( 'after_senausicaap_theme', 'nausicaa_support' );

if ( ! function_exists( 'nausicaa_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Nausicaa 1.0
	 *
	 * @renausicaarn void
	 */
	function nausicaa_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'nausicaa-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'nausicaa-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'nausicaa_styles' );
