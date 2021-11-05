<?php
/**
 * Add Editor Styles
 */
function empty_blockbase_child_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			'/assets/theme.css',
		)
	);
}
add_action( 'after_setup_theme', 'empty_blockbase_child_editor_styles' );

/**
 *
 * Enqueue scripts and styles.
 */
function empty_blockbase_child_scripts() {
	wp_enqueue_style( 'empty_blockbase_child-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array( 'blockbase-ponyfill' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'empty_blockbase_child_scripts' );
