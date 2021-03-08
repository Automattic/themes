<?php
if ( ! function_exists( 'blank_canvas_blocks_support' ) ) :
	function blank_canvas_blocks_support()  {

		// Alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Add support for basic block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( array( 
			'/assets/ponyfill.css'
		) );

    }
    add_action( 'after_setup_theme', 'blank_canvas_blocks_support' );
endif;

/**
 * 
 * Enqueue scripts and styles.
 */
function blank_canvas_blocks_scripts() {
	wp_enqueue_style( 'blank_canvas_blocks-ponyfill', get_template_directory_uri() . '/assets/ponyfill.css', array(), wp_get_theme()->get( 'Version' )  );
}
add_action( 'wp_enqueue_scripts', 'blank_canvas_blocks_scripts', 11 );
