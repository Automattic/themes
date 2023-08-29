<?php
/**
 * Snd functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Snd
 * @since Snd 1.0
 */


if ( ! function_exists( 'snd_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Snd 1.0
	 *
	 * @return void
	 */
	function snd_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'snd' );
	}

endif;

add_action( 'after_setup_theme', 'snd_support' );

if ( ! function_exists( 'snd_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Snd 1.0
	 *
	 * @return void
	 */
	function snd_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'snd-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'snd-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'snd_styles' );
