<?php
/**
 * Cultivate functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Cultivate
 * @since Cultivate 1.0
 */


if ( ! function_exists( 'cultivate_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Cultivate 1.0
	 *
	 * @return void
	 */
	function cultivate_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'cultivate_support' );

if ( ! function_exists( 'cultivate_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Cultivate 1.0
	 *
	 * @return void
	 */
	function cultivate_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'cultivate-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'cultivate-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'cultivate_styles' );
