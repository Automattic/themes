<?php
/**
 * Exmoor functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Exmoor
 * @since Exmoor 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'exmoor_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Exmoor 1.0
	 *
	 * @return void
	 */
	function exmoor_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'exmoor' );
	}

endif;

add_action( 'after_setup_theme', 'exmoor_support' );

if ( ! function_exists( 'exmoor_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Exmoor 1.0
	 *
	 * @return void
	 */
	function exmoor_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'exmoor-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'exmoor-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'exmoor_styles' );
