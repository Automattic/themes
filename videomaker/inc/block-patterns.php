<?php
/**
 * Videomaker Theme: Block Patterns
 *
 * @package Videomaker
 * @since   1.0.0
 */
if ( ! function_exists( 'videomaker_register_block_patterns' ) ) :

	function videomaker_register_block_patterns() {

		if ( function_exists( 'register_block_pattern_category' ) ) {
			register_block_pattern_category(
				'videomaker',
				array( 'label' => __( 'Videomaker', 'videomaker' ) )
			);
		}

		if ( function_exists( 'register_block_pattern' ) ) {
			$block_patterns = array(
				'about',
				'awards',
				'background-video',
				'description',
				'film-credits',
				'film-poster',
				'footer',
				'full-width-homepage',
				'header-description-and-grid-of-projects',
				'header-names-list-and-grid',
				'pattern-grid',
				'pattern-offset-project-grid',
				'pattern-two-posts-with-excerpt',
				'post-i-love-you',
				'reviews',
			);

			foreach ( $block_patterns as $block_pattern ) {
				register_block_pattern(
					'videomaker/' . $block_pattern,
					require __DIR__ . '/patterns/' . $block_pattern . '.php'
				);
			}
		}
	}
endif;

add_action( 'init', 'videomaker_register_block_patterns', 9 );
