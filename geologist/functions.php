<?php

/**
 * Add Editor Styles
 */
function geologist_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			'/assets/theme.css',
		)
	);
}
add_action( 'after_setup_theme', 'geologist_editor_styles' );

/**
 *
 * Enqueue scripts and styles.
 */
function geologist_scripts() {
	wp_enqueue_style( 'geologist-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array('blockbase-ponyfill'), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'geologist_scripts' );

/**
 * Block Patterns.
 */
require get_stylesheet_directory() . '/inc/block-patterns.php';
