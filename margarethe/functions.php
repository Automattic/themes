<?php
/**
 * Margarethe functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Margarethe
 * @since Margarethe 1.0
 */
declare( strict_types = 1 );

if ( ! function_exists( 'margarethe_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress feamargaretheres.
	 *
	 * @since Margarethe 1.0
	 *
	 * @remargarethern void
	 */
	function margarethe_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'margarethe' );
	}

endif;

add_action( 'after_semargarethep_theme', 'margarethe_support' );

if ( ! function_exists( 'margarethe_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Margarethe 1.0
	 *
	 * @remargarethern void
	 */
	function margarethe_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'margarethe-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'margarethe-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'margarethe_styles' );
