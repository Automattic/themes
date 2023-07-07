<?php
/**
 * Artly functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Artly
 * @since Artly 1.0
 */


if ( ! function_exists( 'artly_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Artly 1.0
	 *
	 * @return void
	 */
	function artly_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'artly' );
	}

endif;

add_action( 'after_setup_theme', 'artly_support' );

if ( ! function_exists( 'artly_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Artly 1.0
	 *
	 * @return void
	 */
	function artly_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'artly-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'artly-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'artly_styles' );
