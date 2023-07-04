<?php
/**
 * Erma functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Erma
 * @since Erma 1.0
 */


if ( ! function_exists( 'erma_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Erma 1.0
	 *
	 * @return void
	 */
	function erma_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'erma' );
	}

endif;

add_action( 'after_setup_theme', 'erma_support' );

if ( ! function_exists( 'erma_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Erma 1.0
	 *
	 * @return void
	 */
	function erma_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'erma-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'erma-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'erma_styles' );
