<?php

/**
* Enqueue Varese additional Styles
*/

add_action( 'wp_enqueue_scripts', 'enqueue_varese_styles', 1 );

function enqueue_varese_styles() {
   wp_enqueue_style( 'varese-style', get_stylesheet_uri() );
}

function varese_register_block_pattern_categories() {
	register_block_pattern_category( 'headers', array( 'label' => __( 'Headers', 'varese' ) ) );
	register_block_pattern_category( 'footers', array( 'label' => __( 'Footers', 'varese' ) ) );
	register_block_pattern_category( 'images', array( 'label' => __( 'Images', 'varese' ) ) );
	register_block_pattern_category( 'text', array( 'label' => __( 'Text', 'varese' ) ) );
}

add_action( 'init', 'varese_register_block_pattern_categories', 9 );