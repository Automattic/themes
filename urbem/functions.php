<?php
/**
 * urbem functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @since urbem 1.0
 */


if ( ! function_exists( 'urbem_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since urbem 1.0
	 *
	 * @return void
	 */
	function urbem_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'urbem_support' );

if ( ! function_exists( 'urbem_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since urbem 1.0
	 *
	 * @return void
	 */
	function urbem_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'urbem-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'urbem-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'urbem_styles' );
