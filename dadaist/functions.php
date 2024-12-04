<?php
/**
 * Dadaist functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dadaist
 * @since Dadaist 1.0
 */


if ( ! function_exists( 'dadaist_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Dadaist 1.0
	 *
	 * @return void
	 */
	function dadaist_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'dadaist' );
	}

endif;

add_action( 'after_setup_theme', 'dadaist_support' );

if ( ! function_exists( 'dadaist_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Dadaist 1.0
	 *
	 * @return void
	 */
	function dadaist_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'dadaist-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'dadaist-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'dadaist_styles' );
