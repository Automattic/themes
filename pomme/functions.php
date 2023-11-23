<?php
/**
 * Pomme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pomme
 * @since Pomme 1.0
 */


if ( ! function_exists( 'pomme_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Pomme 1.0
	 *
	 * @return void
	 */
	function pomme_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'pomme' );
	}

endif;

add_action( 'after_setup_theme', 'pomme_support' );

if ( ! function_exists( 'pomme_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Pomme 1.0
	 *
	 * @return void
	 */
	function pomme_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'pomme-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'pomme-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'pomme_styles' );
