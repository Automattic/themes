<?php
/**
 * Startup functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Startup
 * @since Startup 1.0
 */


if ( ! function_exists( 'startup_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Startup 1.0
	 *
	 * @return void
	 */
	function startup_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'startup_support' );

if ( ! function_exists( 'startup_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Startup 1.0
	 *
	 * @return void
	 */
	function startup_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'startup-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'startup-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'startup_styles' );
