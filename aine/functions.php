<?php
/**
 * Aine functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Aine
 * @since Aine 1.0
 */


if ( ! function_exists( 'aine_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Aine 1.0
	 *
	 * @return void
	 */
	function aine_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'aine_support' );

if ( ! function_exists( 'aine_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Aine 1.0
	 *
	 * @return void
	 */
	function aine_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'aine-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'aine-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'aine_styles' );
