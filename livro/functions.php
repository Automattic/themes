<?php
/**
 * Livro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Livro
 * @since Livro 1.0
 */


if ( ! function_exists( 'livro_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Livro 1.0
	 *
	 * @return void
	 */
	function livro_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Support the "Aside" post format.
		add_theme_support( 'post-formats', array( 'aside' ) );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'livro_support' );

if ( ! function_exists( 'livro_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Livro 1.0
	 *
	 * @return void
	 */
	function livro_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'livro-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'livro-style' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'livro_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

require get_template_directory() . '/inc/gutenberg-dependency-check.php';