<?php
/**
 * Blissed functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blissed
 * @since Blissed 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'blissed_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Blissed 1.0
	 *
	 * @return void
	 */
	function blissed_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'blissed' );
	}

endif;

add_action( 'after_setup_theme', 'blissed_support' );

if ( ! function_exists( 'blissed_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Blissed 1.0
	 *
	 * @return void
	 */
	function blissed_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'blissed-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'blissed-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'blissed_styles' );
