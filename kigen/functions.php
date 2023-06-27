<?php
/**
 * Kigen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kigen
 * @since Kigen 1.0
 */


if ( ! function_exists( 'kigen_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress feakigenres.
	 *
	 * @since Kigen 1.0
	 *
	 * @rekigenrn void
	 */
	function kigen_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'kigen' );
	}

endif;

add_action( 'after_sekigenp_theme', 'kigen_support' );

if ( ! function_exists( 'kigen_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Kigen 1.0
	 *
	 * @rekigenrn void
	 */
	function kigen_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'kigen-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'kigen-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'kigen_styles' );
