<?php
/**
 * Geologist Theme: Block Patterns
 *
 * @package Geologist
 * @since   1.0.0
 */
if ( ! function_exists( 'geologist_register_block_patterns' ) ) :

	function geologist_register_block_patterns() {

		if ( function_exists( 'register_block_pattern_category' ) ) {
			register_block_pattern_category(
				'geologist',
				array( 'label' => __( 'Geologist', 'geologist' ) )
			);
		}

		if ( function_exists( 'register_block_pattern' ) ) {
			$block_patterns = array(
				'authors',
				'header-with-rounded-site-logo',
				'image-feature',
				'introduction',
				'quote',
				'two-featured-posts',
			);

			if ( class_exists( 'WP_Block_Type_Registry' ) && \WP_Block_Type_Registry::get_instance()->is_registered( 'jetpack/subscriptions' ) ) {
				$block_patterns[] = 'email-updates-large';
				$block_patterns[] = 'email-updates-small';
			}

			foreach ( $block_patterns as $block_pattern ) {
				register_block_pattern(
					'geologist/' . $block_pattern,
					require __DIR__ . '/patterns/' . $block_pattern . '.php'
				);
			}
		}
	}
endif;

add_action( 'init', 'geologist_register_block_patterns', 9 );
