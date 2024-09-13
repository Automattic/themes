<?php
/**
 * Kawaii-Chan functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kawaii-Chan
 * @since Kawaii-Chan 1.0
 */


if ( ! function_exists( 'kawaiichan_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Kawaii-Chan 1.0
	 *
	 * @return void
	 */
	function kawaiichan_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'kawaiichan' );
	}

endif;

add_action( 'after_setup_theme', 'kawaiichan_support' );

if ( ! function_exists( 'kawaiichan_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Kawaii-Chan 1.0
	 *
	 * @return void
	 */
	function kawaiichan_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'kawaiichan-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'kawaiichan-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'kawaiichan_styles' );
