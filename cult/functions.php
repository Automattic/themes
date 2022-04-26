<?php
/**
 * Cult functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Cult
 * @since Cult 1.0
 */


if ( ! function_exists( 'cult_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Cult 1.0
	 *
	 * @return void
	 */
	function cult_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'cult_support' );

if ( ! function_exists( 'cult_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Cult 1.0
	 *
	 * @return void
	 */
	function cult_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'cult-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'cult-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'cult_styles' );
