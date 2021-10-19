<?php

/**
 * Add Editor Styles
 */
function payton_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			'/assets/theme.css',
		)
	);
}
add_action( 'after_setup_theme', 'payton_editor_styles' );

/**
 *
 * Enqueue scripts and styles.
 */
function payton_scripts() {
	wp_enqueue_style( 'payton-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array('blockbase-ponyfill'), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'payton_scripts' );
