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
			);

			if ( class_exists( 'WP_Block_Type_Registry' ) && \WP_Block_Type_Registry::get_instance()->is_registered( 'jetpack/subscriptions' ) ) {
				$block_patterns[] = 'join';
			}

			$image_patterns = array(
				'circle-rolling-over-a-triangle',
				'combination-of-purple-triangles',
				'combination-of-white-orange-and-pink-triangles',
				'complex-shape-combination-and-two-pink-squares',
				'group-of-squares-displayed-diagonally',
				'group-of-white-pink-and-orange-circles',
				'many-pink-squares-overlapped',
				'orange-and-pink-shapes',
				'orange-triangle-in-purple-background',
				'pink-square-and-dark-purple-triangle',
				'pink-square-with-dark-shadow-on-orange-background',
				'pink-squared-shapes-combination',
				'solid-shapes-in-purple-pink-and-white',
				'squares-changing-opacity',
				'three-circles-decreasing',
				'two-circles-and-a-squared-shape',
				'white-and-orange-squares',
			);

			// foreach ( $image_patterns as $image_pattern ) {
			// 	register_block_pattern(
			// 		'theme-images/' . $image_pattern,
			// 		require __DIR__ . '/patterns/' . $image_pattern . '.php'
			// 	);
			// }
		}
	}
endif;

add_action( 'init', 'quadrat_register_block_patterns', 9 );
