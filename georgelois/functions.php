<?php
/**
 * Lois functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Lois
 * @since Lois 1.0
 */


if ( ! function_exists( 'georgegeorgeGeorge Lois_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Lois 1.0
	 *
	 * @return void
	 */
	function georgegeorgeGeorge Lois_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'georgegeorgeGeorge Lois' );
	}

endif;

add_action( 'after_setup_theme', 'georgegeorgeGeorge Lois_support' );

if ( ! function_exists( 'georgegeorgeGeorge Lois_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Lois 1.0
	 *
	 * @return void
	 */
	function georgegeorgeGeorge Lois_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'georgegeorgeGeorge Lois-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'georgegeorgeGeorge Lois-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'georgegeorgeGeorge Lois_styles' );
