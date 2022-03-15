<?php
/**
 * Archeo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Archeo
 * @since Archeo 1.0
 */


if ( ! function_exists( 'archeo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Archeo 1.0
	 *
	 * @return void
	 */
	function archeo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'archeo_support' );

if ( ! function_exists( 'archeo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Archeo 1.0
	 *
	 * @return void
	 */
	function archeo_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'archeo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'archeo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'archeo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
