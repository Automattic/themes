<?php
/**
 * Verso functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Verso
 * @since Verso 1.0
 */


if ( ! function_exists( 'verso_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Verso 1.0
	 *
	 * @return void
	 */
	function verso_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'verso' );
	}

endif;

add_action( 'after_setup_theme', 'verso_support' );

if ( ! function_exists( 'verso_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Verso 1.0
	 *
	 * @return void
	 */
	function verso_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'verso-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'verso-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'verso_styles' );
