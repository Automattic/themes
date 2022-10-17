<?php
/**
 * Vivre functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Vivre
 * @since Vivre 1.0
 */


if ( ! function_exists( 'vivre_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Vivre 1.0
	 *
	 * @return void
	 */
	function vivre_support() {
		// Make theme available for translation.
		load_theme_textdomain( 'vivre' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'vivre_support' );

if ( ! function_exists( 'vivre_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Vivre 1.0
	 *
	 * @return void
	 */
	function vivre_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'vivre-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'vivre-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'vivre_styles' );
