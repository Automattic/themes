<?php

/**
 * Add Editor Styles
 */
function seedlet_blocks_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			'/style.css',
		)
	);
}
add_action( 'after_setup_theme', 'seedlet_blocks_editor_styles' );

/**
 *
 * Enqueue scripts and styles.
 */
function seedlet_blocks_scripts() {
	wp_enqueue_style( 'seedlet_blocks-styles', get_stylesheet_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'seedlet_blocks_scripts' );
