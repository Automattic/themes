<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Cookbook functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Cookbook
 * @since Cookbook 1.0
 */


if ( ! function_exists( 'cookbook_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Cookbook 1.0
	 *
	 * @return void
	 */
	function cookbook_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'cookbook' );
	}

endif;

add_action( 'after_setup_theme', 'cookbook_support' );

if ( ! function_exists( 'cookbook_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Cookbook 1.0
	 *
	 * @return void
	 */
	function cookbook_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'cookbook-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'cookbook-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'cookbook_styles' );
