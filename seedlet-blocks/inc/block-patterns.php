<?php
/**
 * Seedlet Theme: Block Patterns
 *
 * @package Seedlet
 * @since   1.0.0
 */
if ( ! function_exists( 'seedlet_blocks_register_block_patterns' ) ) :

	function seedlet_blocks_register_block_patterns() {

		if ( function_exists( 'register_block_pattern_category' ) ) {
			register_block_pattern_category(
				'seedlet-blocks',
				array( 'label' => __( 'Seedlet', 'seedlet-blocks' ) )
			);
		}

		if ( function_exists( 'register_block_pattern' ) ) {

			register_block_pattern(
				'seedlet-blocks/latest-posts-alternating-grid',
				array(
					'title'      => __( 'Alternating Grid of Latest Posts', 'seedlet-blocks' ),
					'categories' => array( 'seedlet-blocks' ),
					'content'    => '<!-- wp:latest-posts {"displayPostContent":true,"columns":5,"className":"is-style-seedlet-alternating-grid"} /-->',
				)
			);

		}
	}
endif;

add_action( 'after_setup_theme', 'seedlet_blocks_register_block_patterns', 12 );
