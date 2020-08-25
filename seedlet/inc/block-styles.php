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
		 * Register block style
		 */
		register_block_style(
			'core/latest-posts',
			array(
				'name'         => 'seedlet-alternating-grid',
				'label'        => 'Alternating Grid',
				'style_handle' => 'seedlet-alternating-grid',
			)
		);
	}

	add_action( 'init', 'seedlet_register_block_styles' );
}