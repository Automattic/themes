<?php
/**
 * Pieria functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pieria
 * @since Pieria 1.0
 */


if ( ! function_exists( 'pieria_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Pieria 1.0
	 *
	 * @return void
	 */
	function pieria_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'pieria' );
	}

endif;

add_action( 'after_setup_theme', 'pieria_support' );

if ( ! function_exists( 'pieria_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Pieria 1.0
	 *
	 * @return void
	 */
	function pieria_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'pieria-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'pieria-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'pieria_styles' );
