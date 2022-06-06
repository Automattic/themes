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
				'footer-columns',
				'footer-left',
				'footer-primary',
				'footer-search',
				'footer-separator',
				'footer-simple',
				'footer-small',
				'footer-with-site-title',
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
				'wide',
			);

			foreach ( $header_patterns as $header_pattern ) {
				register_block_pattern(
					'blockbase/header-' . $header_pattern,
					array(
						'title'      => __( 'Blockbase Header (' . $header_pattern . ')', 'blockbase' ),
						'categories' => array( 'header' ),
						'blockTypes' => array( 'core/template-part/header' ),
						'content'    => file_get_contents (get_theme_file_path( '/parts/header-' . $header_pattern . '.html' )),
					)
				);
			}
		}
	}
endif;

add_action( 'init', 'blockbase_register_block_patterns', 9 );
