<?php
/**
 * Saison functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Saison
 * @since Saison 1.0
 */


if ( ! function_exists( 'saison_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Saison 1.0
	 *
	 * @return void
	 */
	function saison_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'saison' );
	}

endif;

add_action( 'after_setup_theme', 'saison_support' );

if ( ! function_exists( 'saison_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Saison 1.0
	 *
	 * @return void
	 */
	function saison_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'saison-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'saison-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'saison_styles' );
