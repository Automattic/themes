<?php
/**
 * Vetro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @since Vetro 1.0
 */


if ( ! function_exists( 'vetro_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Vetro 1.0
	 *
	 * @return void
	 */
	function vetro_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'vetro_support' );

if ( ! function_exists( 'vetro_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Vetro 1.0
	 *
	 * @return void
	 */
	function vetro_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'vetro-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'vetro-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'vetro_styles' );
