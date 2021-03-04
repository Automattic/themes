<?php
if ( ! function_exists( 'ponyfill_support' ) ) :
	function ponyfill_support()  {

		// Alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( array( 
			'/assets/ponyfill.css'
		) );

		add_theme_support( 'block-nav-menus' );
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'ponyfill' ),
				'menu-2' => __( 'Footer Menu', 'ponyfill' ),
				'social' => __( 'Social Links Menu', 'ponyfill' ),
			)
		);
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

/**
 * 
 * Inject Block Menu output from Classic Menu Configuration into any navigation blocks that configure it.
 */
function render_dynamic_navigation_block( $block_content, $parsed_block) {
	if ( $parsed_block['blockName'] === 'core/navigation' ) {

		if (  null !== $parsed_block['attrs']  && array_key_exists( 'location', $parsed_block['attrs'] ) ) {
			$args = new stdClass();
			$args->menu = null;
			$args->theme_location = $parsed_block['attrs']['location'];
			return gutenberg_output_block_nav_menu( $block_content, $args );
		}
	}
	return $block_content;
}
// It would be better to use render_block_core/navigation but it's not working
add_filter( 'render_block', 'render_dynamic_navigation_block', 10, 2);