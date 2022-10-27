<?php
/**
 * Calyx functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Calyx
 * @since Calyx 1.0
 */


if ( ! function_exists( 'calyx_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Calyx 1.0
	 *
	 * @return void
	 */
	function calyx_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'calyx_support' );

if ( ! function_exists( 'calyx_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Calyx 1.0
	 *
	 * @return void
	 */
	function calyx_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'calyx-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'calyx-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'calyx_styles' );
