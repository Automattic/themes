<?php

/**
 * Add Editor Styles
 */
function russell_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			'/assets/theme.css',
		)
	);
}
add_action( 'after_setup_theme', 'russell_editor_styles' );

/**
 *
 * Enqueue scripts and styles.
 */
function russell_scripts() {
	wp_enqueue_style( 'russell-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array( 'blockbase-ponyfill' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'russell_scripts' );
