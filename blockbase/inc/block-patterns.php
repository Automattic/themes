<?php
/**
 * Blockbase Theme: Block Patterns
 *
 * @package Blockbase
 */
if ( ! function_exists( 'blockbase_register_block_patterns' ) ) :

	function blockbase_register_block_patterns() {

		if ( function_exists( 'register_block_pattern_category' ) ) {
			register_block_pattern_category(
				'blockbase',
				array( 'label' => __( 'Blockbase', 'blockbase' ) )
			);
		}

		if ( function_exists( 'register_block_pattern' ) ) {
			$block_patterns = array(
				'404',
				'header',
				'header-centered',
				'header-linear',
				'header-minimal',
				'header-rounded-logo',
				'header-wide',
			);

			foreach ( $block_patterns as $block_pattern ) {
				register_block_pattern(
					'blockbase/' . $block_pattern,
					require __DIR__ . '/patterns/' . $block_pattern . '.php'
				);
			}
		}
	}
endif;

add_action( 'init', 'blockbase_register_block_patterns', 9 );
