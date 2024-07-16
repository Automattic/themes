<?php
/**
 * Adonay functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Adonay
 * @since Adonay 1.0
 */


if ( ! function_exists( 'adonay_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Adonay 1.0
	 *
	 * @return void
	 */
	function adonay_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'adonay' );
	}

endif;

add_action( 'after_setup_theme', 'adonay_support' );

if ( ! function_exists( 'adonay_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Adonay 1.0
	 *
	 * @return void
	 */
	function adonay_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'adonay-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'adonay-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'adonay_styles' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'adonay_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Adonay 1.0
	 * @return void
	 */
	function adonay_pattern_categories() {

		register_block_pattern_category(
			'page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'adonay' ),
				'description' => __( 'A collection of full page layouts.', 'adonay' ),
			)
		);
	}
endif;

add_action( 'init', 'adonay_pattern_categories' );
