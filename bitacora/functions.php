<?php
/**
 * Bitácora functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bitácora
 * @since Bitácora 1.0
 */


if ( ! function_exists( 'bitacora_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Bitácora 1.0
	 *
	 * @return void
	 */
	function bitacora_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'bitacora' );
	}

endif;

add_action( 'after_setup_theme', 'bitacora_support' );

if ( ! function_exists( 'bitacora_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Bitácora 1.0
	 *
	 * @return void
	 */
	function bitacora_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'bitacora-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'bitacora-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'bitacora_styles' );
