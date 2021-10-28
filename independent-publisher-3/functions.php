<?php

/**
 * Add Editor Styles
 */
function independent_publisher_3_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			'/assets/theme.css',
		)
	);
}
add_action( 'after_setup_theme', 'independent_publisher_3_editor_styles' );

/**
 *
 * Enqueue scripts and styles.
 */
function independent_publisher_3_scripts() {
	wp_enqueue_style( 'independent-publisher-3-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array( 'blockbase-ponyfill' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'independent_publisher_3_scripts' );
