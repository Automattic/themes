<?php
/**
 * Disco functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Disco
 * @since Disco 1.0
 */


if ( ! function_exists( 'block_canvas_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Disco 1.0
	 *
	 * @return void
	 */
	function block_canvas_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'block_canvas_support' );

if ( ! function_exists( 'block_canvas_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Disco 1.0
	 *
	 * @return void
	 */
	function block_canvas_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'block_canvas-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'block_canvas-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'block_canvas_styles' );
