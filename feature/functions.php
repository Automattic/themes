<?php
/**
 * feature functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package feature
 * @since feature 1.0
 */


if ( ! function_exists( 'feature_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since feature 1.0
	 *
	 * @return void
	 */
	function feature_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'feature' );
	}

endif;

add_action( 'after_setup_theme', 'feature_support' );

if ( ! function_exists( 'feature_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since feature 1.0
	 *
	 * @return void
	 */
	function feature_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'feature-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'feature-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'feature_styles' );