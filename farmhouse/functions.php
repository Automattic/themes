<?php
/**
 * Farmhouse functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Farmhouse
 * @since Farmhouse 1.0
 */


if ( ! function_exists( 'farmhouse_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Farmhouse 1.0
	 *
	 * @return void
	 */
	function farmhouse_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'farmhouse' );
	}

endif;

add_action( 'after_setup_theme', 'farmhouse_support' );

if ( ! function_exists( 'farmhouse_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Farmhouse 1.0
	 *
	 * @return void
	 */
	function farmhouse_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'farmhouse-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'farmhouse-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'farmhouse_styles' );
