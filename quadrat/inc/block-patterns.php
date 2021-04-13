<?php
/**
 * Quadrat Theme: Block Patterns
 *
 * @package Quadrat
 * @since   1.0.0
 */
if ( ! function_exists( 'quadrat_register_block_patterns' ) ) :

	function quadrat_register_block_patterns() {

		if ( function_exists( 'register_block_pattern_category' ) ) {
			register_block_pattern_category(
				'quadrat-blocks',
				array( 'label' => __( 'Quadrat', 'quadrat-blocks' ) )
			);
		}

		if ( function_exists( 'register_block_pattern' ) ) {

			register_block_pattern(
				'quadrat-blocks/example',
				array(
					'title'      => __( 'Alternating Grid of Latest Posts', 'quadrat-blocks' ),
					'categories' => array( 'quadrat-blocks' ),
					'content'    => '<!-- wp:latest-posts {"displayPostContent":true,"columns":5,"className":"is-style-quadrat-alternating-grid"} /-->',
				)
			);

		}
	}
endif;

add_action( 'after_setup_theme', 'quadrat_register_block_patterns', 12 );
