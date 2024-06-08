<?php
/**
 * Bedrock functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bedrock
 * @since Bedrock 1.0
 */
declare( strict_types = 1 );

if ( ! function_exists( 'lowfi_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress functionalities.
	 *
	 * @since Bedrock 1.0
	 *
	 * @return void
	 */
	function lowfi_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'lowfi' );
	}

endif;

add_action( 'after_setup_theme', 'lowfi_support' );

if ( ! function_exists( 'lowfi_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Bedrock 1.0
	 *
	 * @return void
	 */
	function lowfi_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'lowfi-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'lowfi-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'lowfi_styles' );
