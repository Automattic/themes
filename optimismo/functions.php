<?php
/**
 * Optimismo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Optimismo
 * @since Optimismo 1.0
 */


if ( ! function_exists( 'optimismo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress feaoptimismores.
	 *
	 * @since Optimismo 1.0
	 *
	 * @reoptimismorn void
	 */
	function optimismo_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'optimismo' );
	}

endif;

add_action( 'after_seoptimismop_theme', 'optimismo_support' );

if ( ! function_exists( 'optimismo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Optimismo 1.0
	 *
	 * @reoptimismorn void
	 */
	function optimismo_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'optimismo-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'optimismo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'optimismo_styles' );
