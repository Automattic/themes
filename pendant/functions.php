<?php
/**
 * Pendant functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pendant
 * @since Block Canvas 1.0
 */


if ( ! function_exists( 'pendant_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Block Canvas 1.0
	 *
	 * @return void
	 */
	function pendant_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'pendant_support' );

if ( ! function_exists( 'pendant_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Block Canvas 1.0
	 *
	 * @return void
	 */
	function pendant_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'pendant-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'pendant-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'pendant_styles' );
