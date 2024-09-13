<?php
/**
 * Downtown functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @since Downtown 1.0
 */


if ( ! function_exists( 'downtown_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Downtown 1.0
	 *
	 * @return void
	 */
	function downtown_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'downtown_support' );

if ( ! function_exists( 'downtown_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Downtown 1.0
	 *
	 * @return void
	 */
	function downtown_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'downtown-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'downtown-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'downtown_styles' );


// updater for WordPress.com themes
if ( is_admin() )
	include dirname( __FILE__ ) . '/inc/updater.php';
