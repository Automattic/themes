<?php
/**
 * Vueo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @since Vueo 1.0
 */


if ( ! function_exists( 'vueo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Vueo 1.0
	 *
	 * @return void
	 */
	function vueo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'vueo_support' );

if ( ! function_exists( 'vueo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Vueo 1.0
	 *
	 * @return void
	 */
	function vueo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'vueo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'vueo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'vueo_styles' );
