<?php
/**
 * indice functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package indice
 * @since indice 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'indice_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since indice 1.0
	 *
	 * @return void
	 */
	function indice_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'indice' );
	}

endif;

add_action( 'after_setup_theme', 'indice_support' );

if ( ! function_exists( 'indice_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since indice 1.0
	 *
	 * @return void
	 */
	function indice_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'indice-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'indice-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'indice_styles' );
