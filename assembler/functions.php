<?php
/**
 * Assembler functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Assembler
 * @since Assembler 1.0
 */

declare( strict_types = 1 );

if ( ! function_exists( 'assembler_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Assembler 1.0
	 *
	 * @return void
	 */
	function assembler_setup() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'assembler_setup' );

if ( ! function_exists( 'assembler_styles' ) ) :
	/**
	 * Enqueue styles.
	 *
	 * @since Assembler 1.0
	 *
	 * @return void
	 */
	function assembler_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'assembler-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'assembler-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'assembler_styles' );
