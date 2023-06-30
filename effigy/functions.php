<?php
/**
 * Effigy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Effigy
 * @since Effigy 1.0
 */


if ( ! function_exists( 'effigy_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Effigy 1.0
	 *
	 * @return void
	 */
	function effigy_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'effigy' );
	}

endif;

add_action( 'after_setup_theme', 'effigy_support' );

if ( ! function_exists( 'effigy_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Effigy 1.0
	 *
	 * @return void
	 */
	function effigy_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'effigy-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'effigy-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'effigy_styles' );
