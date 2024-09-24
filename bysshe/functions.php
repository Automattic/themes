<?php
/**
 * Bysshe functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bysshe
 * @since Bysshe 1.0
 */


if ( ! function_exists( 'bysshe_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Bysshe 1.0
	 *
	 * @return void
	 */
	function bysshe_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'bysshe' );
	}

endif;

add_action( 'after_setup_theme', 'bysshe_support' );

if ( ! function_exists( 'bysshe_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Bysshe 1.0
	 *
	 * @return void
	 */
	function bysshe_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'bysshe-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'bysshe-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'bysshe_styles' );
