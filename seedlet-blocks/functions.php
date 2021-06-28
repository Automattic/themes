<?php

/**
 * Add Editor Styles
 */
function seedlet_blocks_support() {

	// Enqueue editor styles.
	add_editor_style(
		array(
			'/assets/theme.css',
		)
	);

	// This theme has one menu location.
	register_nav_menus(
		array(
			'primary' => __( 'Primary Navigation', 'seedlet-blocks' ),
		)
	);

}
add_action( 'after_setup_theme', 'seedlet_blocks_support' );

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
