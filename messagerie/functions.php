<?php
/**
 * Messagerie functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Messagerie
 * @since Messagerie 1.0
 */


if ( ! function_exists( 'messagerie_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Messagerie 1.0
	 *
	 * @return void
	 */
	function messagerie_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'messagerie' );
	}

endif;

add_action( 'after_setup_theme', 'messagerie_support' );

if ( ! function_exists( 'messagerie_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Messagerie 1.0
	 *
	 * @return void
	 */
	function messagerie_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'messagerie-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'messagerie-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'messagerie_styles' );
