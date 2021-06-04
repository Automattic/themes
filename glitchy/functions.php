<?php

if ( ! function_exists( 'gltichy_support' ) ) :
	function gltichy_support() {

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( './style.css' );

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for core custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 35,
				'width'       => 150,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		remove_theme_support( 'block-templates' );
	}
	add_action( 'after_setup_theme', 'gltichy_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function glitchy_stylesheet_enqueue() {
	wp_enqueue_style( 'glitchy-styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'glitchy_stylesheet_enqueue', 11 );

/**
 * Block Styles.
 */
require get_stylesheet_directory() . '/inc/block-styles.php';