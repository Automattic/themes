<?php
/**
 * Iotix functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Iotix
 * @since Iotix 1.0
 */


if ( ! function_exists( 'iotix_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Iotix 1.0
	 *
	 * @return void
	 */
	function iotix_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'iotix_support' );

if ( ! function_exists( 'iotix_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Iotix 1.0
	 *
	 * @return void
	 */
	function iotix_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'iotix-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'iotix-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'iotix_styles' );
