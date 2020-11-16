<?php

if ( ! function_exists( 'fewer_support' ) ) :
	function fewer_support() {

		// Alignwide and alignfull classes in the block editor
		add_theme_support( 'align-wide' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for featured image
		add_theme_support( 'post-thumbnails' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
	add_action( 'after_setup_theme', 'fewer_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function fewer_scripts() {

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'fewer-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue alignments stylesheet.
	wp_enqueue_style( 'fewer-alignments-style', get_template_directory_uri() . '/assets/alignments-front.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'fewer_scripts' );
