<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function stewart_support() {

	// Add support for block styles.
	add_theme_support( 'wp-block-styles' );
}
add_action( 'after_setup_theme', 'stewart_support' );


/**
 * Enqueue styles.
 */
function stewart_styles() {

	// Register theme stylesheet.
	wp_register_style(
		'stewart-style',
		get_stylesheet_directory_uri() . '/style.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'stewart-style' );
}
add_action( 'wp_enqueue_scripts', 'stewart_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
