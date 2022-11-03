<?php
/**
 * Pixl functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pixl
 * @since Pixl 1.0
 */


if ( ! function_exists( 'pixl_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Pixl 1.0
	 *
	 * @return void
	 */
	function pixl_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'pixl' );
	}

endif;

add_action( 'after_setup_theme', 'pixl_support' );

if ( ! function_exists( 'pixl_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Pixl 1.0
	 *
	 * @return void
	 */
	function pixl_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'pixl-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'pixl-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'pixl_styles' );
