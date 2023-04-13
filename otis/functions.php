<?php
/**
 * Otis functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Otis
 * @since Otis 1.0
 */


if ( ! function_exists( 'otis_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Otis 1.0
	 *
	 * @return void
	 */
	function otis_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'otis' );
	}

endif;

add_action( 'after_setup_theme', 'otis_support' );

if ( ! function_exists( 'otis_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Otis 1.0
	 *
	 * @return void
	 */
	function otis_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'otis-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'otis-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'otis_styles' );
