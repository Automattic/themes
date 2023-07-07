<?php
/**
 * Common functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Common
 * @since Common 1.0
 */


if ( ! function_exists( 'common_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Common 1.0
	 *
	 * @return void
	 */
	function common_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'common' );
	}

endif;

add_action( 'after_setup_theme', 'common_support' );

if ( ! function_exists( 'common_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Common 1.0
	 *
	 * @return void
	 */
	function common_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'common-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'common-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'common_styles' );
