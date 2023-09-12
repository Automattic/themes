<?php
/**
 * Annalee functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Annalee
 * @since Annalee 1.0
 */


if ( ! function_exists( 'annalee_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress feaannaleeres.
	 *
	 * @since Annalee 1.0
	 *
	 * @reannaleern void
	 */
	function annalee_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'annalee' );
	}

endif;

add_action( 'after_seannaleep_theme', 'annalee_support' );

if ( ! function_exists( 'annalee_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Annalee 1.0
	 *
	 * @reannaleern void
	 */
	function annalee_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'annalee-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'annalee-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'annalee_styles' );
