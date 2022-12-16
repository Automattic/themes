<?php
/**
 * Adventurer functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Adventurer
 * @since Adventurer 1.0
 */


if ( ! function_exists( 'adventurer_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Adventurer 1.0
	 *
	 * @return void
	 */
	function adventurer_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'adventurer' );
	}

endif;

add_action( 'after_setup_theme', 'adventurer_support' );

if ( ! function_exists( 'adventurer_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Adventurer 1.0
	 *
	 * @return void
	 */
	function adventurer_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'adventurer-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'adventurer-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'adventurer_styles' );
