<?php
/**
 * Decibel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Decibel
 * @since Decibel 1.0
 */


if ( ! function_exists( 'decibel_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Decibel 1.0
	 *
	 * @return void
	 */
	function decibel_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'decibel_support' );

if ( ! function_exists( 'decibel_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Decibel 1.0
	 *
	 * @return void
	 */
	function decibel_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'decibel-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'decibel-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'decibel_styles' );
