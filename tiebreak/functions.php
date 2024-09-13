<?php
/**
 * Tie-Break functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tie-Break
 * @since Tie-Break 1.0
 */


if ( ! function_exists( 'tiebreak_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Tie-Break 1.0
	 *
	 * @return void
	 */
	function tiebreak_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'tiebreak' );
	}

endif;

add_action( 'after_setup_theme', 'tiebreak_support' );

if ( ! function_exists( 'tiebreak_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Tie-Break 1.0
	 *
	 * @return void
	 */
	function tiebreak_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'tiebreak-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'tiebreak-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'tiebreak_styles' );
