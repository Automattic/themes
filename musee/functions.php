<?php
/**
 * Musee functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Musee
 * @since Musee 1.0
 */


if ( ! function_exists( 'musee_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Musee 1.0
	 *
	 * @return void
	 */
	function musee_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'musee' );
	}

endif;

add_action( 'after_setup_theme', 'musee_support' );

if ( ! function_exists( 'musee_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Musee 1.0
	 *
	 * @return void
	 */
	function musee_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'musee-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'musee-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'musee_styles' );
