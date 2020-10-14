<?php
/**
 * Spearhead Theme: Block Patterns
 *
 * @package Spearhead
 * @since   1.0.0
 */

if ( ! function_exists( 'spearhead_register_block_patterns' ) ) :
	/**
	 * Sets up support for block patterns and unregisters Seedlet's.
	 */
	function spearhead_register_block_patterns() {
		/**
		 * Register Block Pattern Category.
		 */
		if ( function_exists( 'register_block_pattern_category' ) ) {

			register_block_pattern_category(
				'spearhead',
				array( 'label' => __( 'Spearhead', 'spearhead' ) )
			);
		}

		/**
		 * Register Block Patterns.
		 */
		if ( function_exists( 'register_block_pattern' ) ) {

			register_block_pattern(
				'spearhead/related-posts',
				array(
					'title'      => __( 'Related Posts', 'spearhead' ),
					'categories' => array( 'spearhead' ),
					'content'    => '<!-- wp:separator {"className":"is-style-wide"} --><hr class="wp-block-separator is-style-wide"/><!-- /wp:separator --><!-- wp:paragraph {"fontSize":"medium"} --><p class="has-medium-font-size">Related</p><!-- /wp:paragraph --><!-- wp:jetpack/related-posts /-->',
				)
			);

			register_block_pattern(
				'spearhead/archive-page',
				array(
					'title'      => __( 'Archive page', 'spearhead' ),
					'categories' => array( 'spearhead' ),
					'content'    => '<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search...","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /-->
					<!-- wp:spacer {"height":50} --><div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->
					<!-- wp:heading {"level":3,"className":"archive-page-heading"} --><h3 class="archive-page-heading">' . __( 'Top Posts', 'spearhead' ) . '</h3><!-- /wp:heading --><!-- wp:latest-posts /-->
					<!-- wp:heading {"level":3,"className":"archive-page-heading"} --><h3 class="archive-page-heading">' . __( 'Categories', 'spearhead' ) . '</h3><!-- /wp:heading -->
					<!-- wp:categories /-->',
				)
			);
		}

		/**
		 * Unregister SeedletBlock Pattern Category.
		 */
		if ( function_exists( 'unregister_block_pattern_category' ) ) {
			unregister_block_pattern_category( 'seedlet' );
		}

		/**
		 * Unregister Block Patterns from Seedlet.
		 */
		if ( function_exists( 'unregister_block_pattern' ) ) {
			unregister_block_pattern( 'seedlet/group-split-background' );
			unregister_block_pattern( 'seedlet/group-image-overlap' );
			unregister_block_pattern( 'seedlet/latest-posts-alternating-grid' );
		}
	}
endif;
add_action( 'after_setup_theme', 'spearhead_register_block_patterns', 12 );
