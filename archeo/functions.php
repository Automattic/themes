<?php

/**
 * Add Editor Styles
 */
function archeo_editor_styles() {
	// Primary navigation is used on the header and the footer pattern
	register_nav_menus(
		array(
			'primary' => __( 'Primary Navigation', 'archeo' ),
			'social' => __( 'Social Navigation', 'archeo' ),
			'footer' => __( 'Footer Navigation', 'archeo' )
		)
	);
}
add_action( 'after_setup_theme', 'archeo_editor_styles' );
