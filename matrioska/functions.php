<?php
/**
 * matrioska functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package matrioska
 * @since matrioska 1.0
 */


if ( ! function_exists( 'matrioska_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since matrioska 1.0
	 *
	 * @return void
	 */
	function matrioska_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'matrioska' );
	}

endif;

add_action( 'after_setup_theme', 'matrioska_support' );

if ( ! function_exists( 'matrioska_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since matrioska 1.0
	 *
	 * @return void
	 */
	function matrioska_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'matrioska-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'matrioska-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'matrioska_styles' );
