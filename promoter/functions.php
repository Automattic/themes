<?php
/**
 * Promoter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Promoter
 * @since Promoter 1.0
 */


if ( ! function_exists( 'promoter_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Promoter 1.0
	 *
	 * @return void
	 */
	function promoter_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'promoter' );
	}

endif;

add_action( 'after_setup_theme', 'promoter_support' );

if ( ! function_exists( 'promoter_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Promoter 1.0
	 *
	 * @return void
	 */
	function promoter_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'promoter-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'promoter-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'promoter_styles' );
