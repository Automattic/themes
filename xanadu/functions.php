<?php
/**
 * Xanadu functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Xanadu
 * @since Xanadu 1.0
 */
declare( strict_types = 1 );

if ( ! function_exists( 'xanadu_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Xanadu 1.0
	 *
	 * @return void
	 */
	function xanadu_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'xanadu' );
	}

endif;

add_action( 'after_setup_theme', 'xanadu_support' );

if ( ! function_exists( 'xanadu_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Xanadu 1.0
	 *
	 * @return void
	 */
	function xanadu_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'xanadu-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'xanadu-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'xanadu_styles' );
