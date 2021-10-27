<?php

/**
 * Add Editor Styles
 */
function kerr_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			'/assets/theme.css',
		)
	);
}
add_action( 'after_setup_theme', 'kerr_editor_styles' );

/**
 *
 * Enqueue scripts and styles.
 */
function kerr_scripts() {
	wp_enqueue_style( 'kerr-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array( 'blockbase-ponyfill' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'kerr_scripts' );

