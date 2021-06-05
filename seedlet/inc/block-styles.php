<?php
/**
 * Seedlet Theme: Block Styles
 *
 * @package Seedlet
 * @since 1.0.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function seedlet_register_block_styles() {

		/**
		 * Register block styles
		 */
		register_block_style(
			'core/latest-posts',
			array(
				'name'         => 'seedlet-alternating-grid',
				'label'        => __( 'Alternating Grid', 'seedlet' ),
				'style_handle' => 'seedlet-alternating-grid',
			)
		);
		register_block_style(
			'a8c/blog-posts',
			array(
				'name'         => 'seedlet-alternating-grid',
				'label'        => __( 'Alternating Grid', 'seedlet' ),
				'style_handle' => 'seedlet-alternating-grid',
			)
		);
	}

	add_action( 'init', 'seedlet_register_block_styles' );
}