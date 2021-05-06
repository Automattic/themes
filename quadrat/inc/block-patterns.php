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
		}

		if ( function_exists( 'register_block_pattern' ) ) {
			$block_patterns = array(
				'headline-button',
				'media-text-button',
				'latest-episodes',
				'episode',
				'cover-with-heading',
				'headlines-and-buttons',
				'listen-to-the-podcast',
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

add_action( 'init', 'quadrat_register_block_patterns' );
