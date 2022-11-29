<?php
/**
 * Muscat functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Muscat
 * @since Muscat 1.0
 */


if ( ! function_exists( 'muscat_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Muscat 1.0
	 *
	 * @return void
	 */
	function muscat_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'muscat_support' );

if ( ! function_exists( 'muscat_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Muscat 1.0
	 *
	 * @return void
	 */
	function muscat_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'muscat-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'muscat-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'muscat_styles' );
