<?php
/**
 * Masu functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Masu
 * @since Masu 1.0
 */


if ( ! function_exists( 'masu_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Masu 1.0
	 *
	 * @return void
	 */
	function masu_support() {
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}

endif;

add_action( 'after_setup_theme', 'masu_support' );

if ( ! function_exists( 'masu_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Masu 1.0
	 *
	 * @return void
	 */
	function masu_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'masu-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'masu-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'masu_styles' );
