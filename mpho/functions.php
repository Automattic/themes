<?php
/**
 * Mpho functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Mpho
 * @since Mpho 1.0
 */


if ( ! function_exists( 'mpho_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Mpho 1.0
	 *
	 * @return void
	 */
	function mpho_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'mpho' );
	}

endif;

add_action( 'after_setup_theme', 'mpho_support' );

if ( ! function_exists( 'mpho_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Mpho 1.0
	 *
	 * @return void
	 */
	function mpho_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'mpho-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'mpho-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'mpho_styles' );
