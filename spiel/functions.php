<?php
/**
 * Spiel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Spiel
 * @since Spiel 1.0
 */
declare( strict_types = 1 );

if ( ! function_exists( 'spiel_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Spiel 1.0
	 *
	 * @return void
	 */
	function spiel_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'spiel' );
	}

endif;

add_action( 'after_setup_theme', 'spiel_support' );

if ( ! function_exists( 'spiel_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Spiel 1.0
	 *
	 * @return void
	 */
	function spiel_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'spiel-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'spiel-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'spiel_styles' );
