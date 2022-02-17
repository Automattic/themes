<?php
/**
 * Skatepark Theme: Block Patterns
 *
 * @package Skatepark
 * @since   1.0.0
 */
if ( ! function_exists( 'skatepark_register_block_patterns' ) ) :

	function skatepark_register_block_patterns() {

		if ( function_exists( 'register_block_pattern_category' ) ) {
			register_block_pattern_category(
				'skatepark',
				array( 'label' => __( 'Skatepark', 'skatepark' ) )
			);
		}

		if ( function_exists( 'register_block_pattern' ) ) {
			$block_patterns = array(
				'blog-posts',
				'mixed-media-in-container',
				'text-list-with-button',
				'full-width-image-with-aside-caption',
				'hidden-404',
				'hidden-home-patterns',
				'testimonial',
				'three-columns',
				'paragraph-with-quote',
				'columns-in-container',
			);

			foreach ( $block_patterns as $block_pattern ) {
				register_block_pattern(
					'skatepark/' . $block_pattern,
					require __DIR__ . '/patterns/' . $block_pattern . '.php'
				);
			}
		}
	}
endif;

add_action( 'init', 'skatepark_register_block_patterns', 9 );
