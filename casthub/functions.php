<?php
/**
 * Casthub functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Casthub
 * @since Casthub 1.0
 */


if ( ! function_exists( 'casthub_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Casthub 1.0
	 *
	 * @return void
	 */
	function casthub_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'casthub' );
	}

endif;

add_action( 'after_setup_theme', 'casthub_support' );

if ( ! function_exists( 'casthub_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Casthub 1.0
	 *
	 * @return void
	 */
	function casthub_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'casthub-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'casthub-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'casthub_styles' );
