<?php
/**
 * Pixel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pixel
 * @since Pixel 1.0
 */


if ( ! function_exists( 'pixel_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Pixel 1.0
	 *
	 * @return void
	 */
	function pixel_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'pixel_support' );

if ( ! function_exists( 'pixel_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Pixel 1.0
	 *
	 * @return void
	 */
	function pixel_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'pixel-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'pixel-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'pixel_styles' );
