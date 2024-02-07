<?php
/**
 * Ici functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ici
 * @since Ici 1.0
 */
declare( strict_types = 1 );

if ( ! function_exists( 'ici_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Ici 1.0
	 *
	 * @return void
	 */
	function ici_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'ici' );
	}

endif;

add_action( 'after_setup_theme', 'ici_support' );

if ( ! function_exists( 'ici_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Ici 1.0
	 *
	 * @return void
	 */
	function ici_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'ici-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'ici-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'ici_styles' );
