<?php
/**
 * Fewer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fewer
 * @since Fewer 1.0
 */


if ( ! function_exists( 'fewer_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Fewer 1.0
	 *
	 * @return void
	 */
	function fewer_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'fewer' );
	}

endif;

add_action( 'after_setup_theme', 'fewer_support' );

if ( ! function_exists( 'fewer_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Fewer 1.0
	 *
	 * @return void
	 */
	function fewer_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'fewer-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'fewer-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'fewer_styles' );
