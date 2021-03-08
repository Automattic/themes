<?php
if ( ! function_exists( 'ponyfill_support' ) ) :
	function ponyfill_support()  {

		// Alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( array( 
			'/assets/ponyfill.css'
		) );

    }
    add_action( 'after_setup_theme', 'ponyfill_support' );
endif;

/**
 * 
 * Enqueue scripts and styles.
 */
function ponyfill_scripts() {
	// Enqueue the ponyfill from which the Theme derives its name.
	wp_enqueue_style( 'ponyfill-ponyfill', get_template_directory_uri() . '/assets/ponyfill.css', array(), wp_get_theme()->get( 'Version' )  );
}
add_action( 'wp_enqueue_scripts', 'ponyfill_scripts', 11 );
