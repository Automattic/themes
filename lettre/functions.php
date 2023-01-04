<?php
/**
 * Lettre functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lettre
 * @since Lettre 1.0
 */


if ( ! function_exists( 'lettre_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Lettre 1.0
	 *
	 * @return void
	 */
	function lettre_support() {

		// Make theme available for translation.
		load_theme_textdomain( 'lettre' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'lettre_support' );

if ( ! function_exists( 'lettre_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Lettre 1.0
	 *
	 * @return void
	 */
	function lettre_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'lettre-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'lettre-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'lettre_styles' );
