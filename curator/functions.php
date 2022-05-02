<?php
/**
 * Curator functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Curator
 * @since Curator 1.0
 */


if ( ! function_exists( 'curator_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Curator 1.0
	 *
	 * @return void
	 */
	function curator_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'curator_support' );

if ( ! function_exists( 'curator_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Curator 1.0
	 *
	 * @return void
	 */
	function curator_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'curator-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'curator-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'curator_styles' );
