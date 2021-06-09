<?php
/**
 * Seedlet Theme: Block Styles
 *
 * @package Seedlet
 * @since 1.0.0
 */

if ( ! function_exists( 'seedlet_blocks_register_block_styles' ) ) :

	function seedlet_blocks_register_block_styles() {

		if ( function_exists( 'register_block_style' ) ) {

			/**
			 * Register block styles
			 */
			register_block_style(
				'core/latest-posts',
				array(
					'name'         => 'seedlet-alternating-grid',
					'label'        => __( 'Alternating Grid', 'seedlet-blocks' ),
					'style_handle' => 'seedlet-alternating-grid',
				)
			);
			register_block_style(
				'a8c/blog-posts',
				array(
					'name'         => 'seedlet-alternating-grid',
					'label'        => __( 'Alternating Grid', 'seedlet-blocks' ),
					'style_handle' => 'seedlet-alternating-grid',
				)
			);
		}
	}
endif;

add_action( 'after_setup_theme', 'seedlet_blocks_register_block_styles' );
