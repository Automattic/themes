<?php
/**
 * Dossier functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dossier
 * @since Dossier 1.0
 */


if ( ! function_exists( 'dossier_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Dossier 1.0
	 *
	 * @return void
	 */
	function dossier_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'dossier' );
	}

endif;

add_action( 'after_setup_theme', 'dossier_support' );

if ( ! function_exists( 'dossier_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Dossier 1.0
	 *
	 * @return void
	 */
	function dossier_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'dossier-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'dossier-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'dossier_styles' );
