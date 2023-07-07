<?php
/**
 * Covr functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Covr
 * @since Covr 1.0
 */


if ( ! function_exists( 'covr_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Covr 1.0
	 *
	 * @return void
	 */
	function covr_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'covr' );
	}

endif;

add_action( 'after_setup_theme', 'covr_support' );

if ( ! function_exists( 'covr_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Covr 1.0
	 *
	 * @return void
	 */
	function covr_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'covr-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'covr-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'covr_styles' );
