<?php
/**
 * Cottage functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Cottage
 * @since Cottage 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'cottage_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress feacottageres.
	 *
	 * @since Cottage 1.0
	 *
	 * @recottagern void
	 */
	function cottage_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'cottage' );
	}

endif;

add_action( 'after_secottagep_theme', 'cottage_support' );

if ( ! function_exists( 'cottage_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Cottage 1.0
	 *
	 * @recottagern void
	 */
	function cottage_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'cottage-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'cottage-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'cottage_styles' );
