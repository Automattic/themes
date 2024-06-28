<?php
/**
 * RecipeBook functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RecipeBook
 * @since RecipeBook 1.0
 */


if ( ! function_exists( 'recipebook_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since RecipeBook 1.0
	 *
	 * @return void
	 */
	function recipebook_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'recipebook' );
	}

endif;

add_action( 'after_setup_theme', 'recipebook_support' );

if ( ! function_exists( 'recipebook_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since RecipeBook 1.0
	 *
	 * @return void
	 */
	function recipebook_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'recipebook-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'recipebook-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'recipebook_styles' );
