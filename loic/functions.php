<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Loïc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Loïc
 * @since Loïc 1.0
 */


if ( ! function_exists( 'loic_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Loïc 1.0
	 *
	 * @return void
	 */
	function loic_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'loic' );
	}

endif;

add_action( 'after_setup_theme', 'loic_support' );

if ( ! function_exists( 'loic_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Loïc 1.0
	 *
	 * @return void
	 */
	function loic_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'loic-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'loic-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'loic_styles' );
