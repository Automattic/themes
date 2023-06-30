<?php
/**
 * theissue functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theissue
 * @since theissue 1.0
 */


if ( ! function_exists( 'issue_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since theissue 1.0
	 *
	 * @return void
	 */
	function issue_support() {

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Make theme available for translation.
		load_theme_textdomain( 'theissue' );
	}

endif;

add_action( 'after_setup_theme', 'issue_support' );

if ( ! function_exists( 'issue_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since theissue 1.0
	 *
	 * @return void
	 */
	function issue_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'issue-style',
			get_stylesheet_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'issue-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'issue_styles' );
