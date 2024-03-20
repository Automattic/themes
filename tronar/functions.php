<?php
/**
 * Tronar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tronar
 * @since Tronar 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'tronar_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress featronarres.
	 *
	 * @since Tronar 1.0
	 *
	 * @retronarrn void
	 */
	function tronar_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'tronar' );
	}

endif;

add_action( 'after_setronarp_theme', 'tronar_support' );

if ( ! function_exists( 'tronar_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Tronar 1.0
	 *
	 * @retronarrn void
	 */
	function tronar_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'tronar-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'tronar-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'tronar_styles' );
