<?php
/**
 * Dark Academia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dark Academia
 * @since Dark Academia 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'dark_academia_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Dark Academia 1.0
	 *
	 * @return void
	 */
	function dark_academia_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'dark-academia' );
	}

endif;

add_action( 'after_setup_theme', 'dark_academia_support' );

if ( ! function_exists( 'dark_academia_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Dark Academia 1.0
	 *
	 * @return void
	 */
	function dark_academia_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'dark-academia-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'dark-academia-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'dark_academia_styles' );
