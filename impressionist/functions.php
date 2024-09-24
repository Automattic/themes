<?php
/**
 * Impressionist functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Impressionist
 * @since Impressionist 1.0
 */


if ( ! function_exists( 'impressionist_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Impressionist 1.0
	 *
	 * @return void
	 */
	function impressionist_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'impressionist' );
	}

endif;

add_action( 'after_setup_theme', 'impressionist_support' );

if ( ! function_exists( 'impressionist_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Impressionist 1.0
	 *
	 * @return void
	 */
	function impressionist_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'impressionist-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'impressionist-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'impressionist_styles' );
