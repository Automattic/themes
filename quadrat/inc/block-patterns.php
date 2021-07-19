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
				'quadrat',
				array( 'label' => __( 'Quadrat', 'quadrat' ) )
			);

			register_block_pattern_category(
				'theme-images',
				array( 'label' => __( 'Theme Images', 'quadrat' ) )
			);
		}

		if ( function_exists( 'register_block_pattern' ) ) {
			$block_patterns = array(
				'cover-with-heading',
				'episode',
				'headline-button',
				'headlines-and-buttons',
				'query-diamond',
				'latest-episodes',
				'listen-to-the-podcast',
				'media-text-button',
				'circle-rolling-over-a-triangle', // Begin illustration patterns.
				'combination-of-purple-triangles',
				'combination-of-white-orange-and-pink-triangles',
				'complex-shape-combination-and-two-pink-squares-on-a-dark-purple-background',
				'group-of-squares-displayed-diagonally',
				'group-of-white-pink-and-orange-circles',
				'many-pink-squares-overlapped',
				'orange-and-pink-shapes-displayed-in-different-ways',
				'orange-triangle-in-purple-background',
				'pink-square-and-dark-purple-triangle',
				'pink-square-with-dark-shadow-on-orange-background',
				'pink-squared-shapes-combination',
				'pink-squares-on-orange-background',
				'solid-shapes-in-purple-pink-and-white',
				'squares-changing-opacity-on-a-pink-background',
				'three-circles-decreasing-in-size-on-a-pink-background',
				'two-circles-and-a-squared-shape-on-pink-background',
				'white-and-orange-squares-on-light-purple-background',
			);

			if ( class_exists( 'WP_Block_Type_Registry' ) && \WP_Block_Type_Registry::get_instance()->is_registered( 'jetpack/subscriptions' ) ) {
				$block_patterns[] = 'join';
			}

			foreach ( $block_patterns as $block_pattern ) {
				register_block_pattern(
					'quadrat/' . $block_pattern,
					require __DIR__ . '/patterns/' . $block_pattern . '.php'
				);
			}
		}
	}
endif;

add_action( 'init', 'quadrat_register_block_patterns', 9 );
