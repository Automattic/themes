<?php
/**
 * jinjang functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jinjang
 * @since jinjang 1.0
 */


if ( ! function_exists( 'jinjang_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since jinjang 1.0
	 *
	 * @return void
	 */
	function jinjang_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'jinjang' );
	}

endif;

add_action( 'after_setup_theme', 'jinjang_support' );

if ( ! function_exists( 'jinjang_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since jinjang 1.0
	 *
	 * @return void
	 */
	function jinjang_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'jinjang-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'jinjang-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'jinjang_styles' );
