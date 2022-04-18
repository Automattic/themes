<?php

/**
 * Add Editor Styles
 */
function videomaker_editor_styles() {
	// Primary navigation is used on the header and the footer pattern
	register_nav_menus(
		array(
			'primary' => __( 'Primary Navigation', 'videomaker' ),
			'social' => __( 'Social Navigation', 'videomaker' ),
			'footer' => __( 'Footer Navigation', 'videomaker' )
		)
	);
}
add_action( 'after_setup_theme', 'videomaker_editor_styles' );
