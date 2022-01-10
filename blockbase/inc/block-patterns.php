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

			register_block_pattern_category(
				'blockbase-headers',
				array( 'label' => __( 'Blockbase Headers', 'blockbase-headers' ) )
			);
	
		}

		if ( function_exists( 'register_block_pattern' ) ) {
			$block_patterns = array(
				'404'
			);

			foreach ( $block_patterns as $block_pattern ) {
				register_block_pattern(
					'blockbase/' . $block_pattern,
					require __DIR__ . '/patterns/' . $block_pattern . '.php'
				);
			}

			//register header templates also as patterns
			$header_patterns = array(
				'centered',
				'default',
				'linear',
				'minimal',
				'rounded-logo',
				'wide'

			);

			foreach ( $header_patterns as $header_pattern ) {
				register_block_pattern(
					'blockbase/header-' . $header_pattern,
					array(
						'title'      => __( 'Blockbase Header (' . $header_pattern . ')', 'blockbase' ),
						'categories' => array( 'blockbase', 'headers' ),
						'content'    => file_get_contents (get_template_directory() . '/block-template-parts/header-' . $header_pattern . '.html'),
					)
				);
			}
		}
	}
endif;

add_action( 'init', 'blockbase_register_block_patterns', 9 );
