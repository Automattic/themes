<?php
/**
 * Expo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Expo
 * @since Expo 1.0
 */


if ( ! function_exists( 'expo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Expo 1.0
	 *
	 * @return void
	 */
	function expo_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'expo' );
	}

endif;

add_action( 'after_setup_theme', 'expo_support' );

if ( ! function_exists( 'expo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Expo 1.0
	 *
	 * @return void
	 */
	function expo_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'expo-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'expo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'expo_styles' );
