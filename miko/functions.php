<?php
/**
 * Miko functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Miko
 * @since Miko 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'miko_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Miko 1.0
	 *
	 * @return void
	 */
	function miko_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'miko' );
	}

endif;

add_action( 'after_setup_theme', 'miko_support' );

if ( ! function_exists( 'miko_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Miko 1.0
	 *
	 * @return void
	 */
	function miko_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'miko-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'miko-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'miko_styles' );
