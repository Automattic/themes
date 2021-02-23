<?php
if ( ! function_exists( 'global-styles_support' ) ) :
	function global_styles_support()  {

		// Alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( array( 
			'style.css'
		) );
    }
    add_action( 'after_setup_theme', 'global_styles_support' );
endif;

/**
 * 
 * Enqueue scripts and styles.
 */
function global_styles_scripts() {
	// Enqueue front-end styles.
	wp_enqueue_style( 'global-styles-styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'global_styles_scripts', 11 );
