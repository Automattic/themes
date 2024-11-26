<?php
/**
 * Professio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Professio
 * @since Professio 1.0
 */


if ( ! function_exists( 'professio_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress feaprofessiores.
	 *
	 * @since Professio 1.0
	 *
	 * @reprofessiorn void
	 */
	function professio_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'professio' );
	}

endif;

add_action( 'after_seprofessiop_theme', 'professio_support' );

if ( ! function_exists( 'professio_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Professio 1.0
	 *
	 * @reprofessiorn void
	 */
	function professio_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'professio-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'professio-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'professio_styles' );
