<?php
/**
 * Kansei functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kansei
 * @since Kansei 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'kansei_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Kansei 1.0
	 *
	 * @return void
	 */
	function kansei_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'kansei' );
	}

endif;

add_action( 'after_setup_theme', 'kansei_support' );

if ( ! function_exists( 'kansei_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Kansei 1.0
	 *
	 * @return void
	 */
	function kansei_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'kansei-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'kansei-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'kansei_styles' );
