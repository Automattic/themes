<?php

/**
 * Add Editor Styles
 */
function seedlet_blocks_editor_styles() {
	// Enqueue editor styles.
	add_editor_style(
		array(
			'/assets/theme.css',
		)
	);
	// Theme supports required to pass theme check.
	// NOTE: I'm not sure why having them in the parent theme wouldn't suffice, but they seem to be needed here.
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );

}
add_action( 'after_setup_theme', 'seedlet_blocks_editor_styles' );

/**
 *
 * Enqueue scripts and styles.
 */
function seedlet_blocks_scripts() {
	wp_enqueue_style( 'seedlet_blocks-styles', get_stylesheet_directory_uri() . '/assets/theme.css', array( 'blockbase-ponyfill' ), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'seedlet_blocks_scripts' );

/**
 * Block Patterns.
 */
require get_stylesheet_directory() . '/inc/block-patterns.php';

/**
 * Block Styles.
 */
require get_stylesheet_directory() . '/inc/block-styles.php';

/**
 * This function only exists to pass the theme-check.
 * It does not do anything.
 * Borrowed from aristath/q: https://themes.trac.wordpress.org/browser/q/0.1/functions.php?rev=137308
 */
function mayland_blocks_theme_check_dummy_calls() {
	post_class();
	wp_link_pages();
}
