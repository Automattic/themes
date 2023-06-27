<?php
/**
 * Bibliophile functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bibliophile
 * @since Bibliophile 1.0
 */


if ( ! function_exists( 'bibliophile_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Bibliophile 1.0
	 *
	 * @return void
	 */
	function bibliophile_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'bibliophile' );
	}

endif;

add_action( 'after_setup_theme', 'bibliophile_support' );

if ( ! function_exists( 'bibliophile_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Bibliophile 1.0
	 *
	 * @return void
	 */
	function bibliophile_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'bibliophile-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'bibliophile-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'bibliophile_styles' );
