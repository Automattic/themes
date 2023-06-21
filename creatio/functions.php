<?php
/**
 * Creatio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Creatio
 * @since Creatio 1.0
 */


if ( ! function_exists( 'creatio_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Creatio 1.0
	 *
	 * @return void
	 */
	function creatio_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'creatio' );
	}

endif;

add_action( 'after_setup_theme', 'creatio_support' );

if ( ! function_exists( 'creatio_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Creatio 1.0
	 *
	 * @return void
	 */
	function creatio_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'creatio-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'creatio-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'creatio_styles' );
