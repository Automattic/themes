<?php
/**
 * Colorloops functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Colorloops
 * @since Colorloops 1.0
 */


if ( ! function_exists( 'colorloops_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Colorloops 1.0
	 *
	 * @return void
	 */
	function colorloops_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'colorloops' );
	}

endif;

add_action( 'after_setup_theme', 'colorloops_support' );

if ( ! function_exists( 'colorloops_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Colorloops 1.0
	 *
	 * @return void
	 */
	function colorloops_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'colorloops-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'colorloops-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'colorloops_styles' );
