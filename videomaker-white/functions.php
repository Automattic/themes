<?php

/**
 * Add Editor Styles
 */
function videomaker_support() {
	// Make theme available for translation.
	load_theme_textdomain( 'videomaker', get_template_directory() . '/languages' );

	// Primary navigation is used on the header and the footer pattern
	register_nav_menus(
		array(
			'primary' => __( 'Primary Navigation', 'videomaker' ),
			'social' => __( 'Social Navigation', 'videomaker' ),
			'footer' => __( 'Footer Navigation', 'videomaker' )
		)
	);
}
add_action( 'after_setup_theme', 'videomaker_support' );
