<?php
/**
 * Catalog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Catalog
 * @since Catalog 1.0
 */


if ( ! function_exists( 'catalog_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Catalog 1.0
	 *
	 * @return void
	 */
	function catalog_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'catalog_support' );

if ( ! function_exists( 'catalog_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Catalog 1.0
	 *
	 * @return void
	 */
	function catalog_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'catalog-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'catalog-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'catalog_styles' );
