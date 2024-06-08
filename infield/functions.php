<?php
/**
 * Infield functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Infield
 * @since Infield 1.0
 */
declare( strict_types = 1 );

if ( ! function_exists( 'creatio2_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Infield 1.0
	 *
	 * @return void
	 */
	function creatio2_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'creatio2' );
	}

endif;

add_action( 'after_setup_theme', 'creatio2_support' );

if ( ! function_exists( 'creatio2_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Infield 1.0
	 *
	 * @return void
	 */
	function creatio2_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'creatio2-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'creatio2-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'creatio2_styles' );
