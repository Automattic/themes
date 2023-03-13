<?php
/**
 * Lois functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lois
 * @since Lois 1.0
 */


if ( ! function_exists( 'lois_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Lois 1.0
	 *
	 * @return void
	 */
	function lois_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'lois' );
	}

endif;

add_action( 'after_setup_theme', 'lois_support' );

if ( ! function_exists( 'lois_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Lois 1.0
	 *
	 * @return void
	 */
	function lois_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'lois-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'lois-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'lois_styles' );
