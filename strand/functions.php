<?php
/**
 * Strand functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Strand
 * @since Strand 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'strand_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Strand 1.0
	 *
	 * @return void
	 */
	function strand_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'strand' );
	}

endif;

add_action( 'after_setup_theme', 'strand_support' );

if ( ! function_exists( 'strand_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Strand 1.0
	 *
	 * @return void
	 */
	function strand_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'strand-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'strand-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'strand_styles' );
