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

if ( ! function_exists( 'bedrock_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress functionalities.
	 *
	 * @since Bedrock 1.0
	 *
	 * @return void
	 */
	function bedrock_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'bedrock' );
	}

endif;

add_action( 'after_setup_theme', 'bedrock_support' );

if ( ! function_exists( 'bedrock_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Bedrock 1.0
	 *
	 * @return void
	 */
	function bedrock_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'bedrock-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'bedrock-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'bedrock_styles' );
