<?php
/**
 * Lynx functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lynx
 * @since Lynx 1.0
 */


if ( ! function_exists( 'lynx_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Lynx 1.0
	 *
	 * @return void
	 */
	function lynx_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'lynx_support' );

if ( ! function_exists( 'lynx_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Lynx 1.0
	 *
	 * @return void
	 */
	function lynx_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'lynx-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'lynx-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'lynx_styles' );
