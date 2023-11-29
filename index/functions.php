<?php
/**
 * Index functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Index
 * @since Index 1.0
 */

if ( ! function_exists( 'index_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Index 1.0
	 *
	 * @return void
	 */
	function index_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'index' );
	}

endif;

add_action( 'after_setup_theme', 'index_support' );

if ( ! function_exists( 'index_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Index 1.0
	 *
	 * @return void
	 */
	function index_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'index-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'index-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'index_styles' );
