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
					<!-- wp:spacer {"height":30} --><div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->
					<!-- wp:paragraph --><p>' . __( 'Latest Posts', 'spearhead' ) . '</p><!-- /wp:paragraph -->
					<!-- wp:latest-posts /-->
					<!-- wp:spacer {"height":10} --><div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->
					<!-- wp:paragraph --><p>' . __( 'Categories', 'spearhead' ) . '</p><!-- /wp:paragraph -->
					<!-- wp:categories /-->',
				)
			);

			register_block_pattern(
				'spearhead/podcast-links',
				array(
					'title'      => __( 'Podcast links', 'spearhead' ),
					'categories' => array( 'spearhead' ),
					'content'    => '
						<!-- wp:navigation {"orientation":"horizontal"} -->
						<!-- wp:paragraph --><p>' . __( 'Podcast available on:', 'spearhead' ) . '</p><!-- /wp:paragraph -->
						<!-- wp:navigation-link {"label":"Apple","url":"https://www.apple.com/"} /-->
						<!-- wp:navigation-link {"label":"Breaker","url":"https://www.breaker.audio/"} /-->
						<!-- wp:navigation-link {"label":"Google","url":"https://www.google.com/"} /-->
						<!-- wp:navigation-link {"label":"LinkedIn","url":"https://www.linkedin.com/"} /-->
						<!-- wp:navigation-link {"label":"Overcast","url":"https://overcast.fm/"} /-->
						<!-- wp:navigation-link {"label":"Spotify","url":"https://spotify.com/"} /-->
						<!-- wp:navigation-link {"label":"Twitter","url":"https://twitter.com/"} /-->
						<!-- wp:navigation-link {"label":"YouTube","url":"https://youtube.com/"} /-->
						<!-- /wp:navigation -->',
				)
			);

			register_block_pattern(
				'spearhead/podcast-links-list',
				array(
					'title'      => __( 'Podcast links list', 'spearhead' ),
					'categories' => array( 'spearhead' ),
					'content'    => '<!-- wp:paragraph {"className":"podcast-links-list-block","style":{"typography":{"fontSize":18}}} --><p class="podcast-links-list-block" style="font-size:18px"><a rel="noreferrer noopener" target="_blank" href="https://www.apple.com/">Apple </a>•<a rel="noreferrer noopener" target="_blank" href="https://www.breaker.audio/">Breaker </a>•<a rel="noreferrer noopener" target="_blank" href="https://www.google.com/">Google </a>•<a rel="noreferrer noopener" target="_blank" href="https://www.linkedin.com/">LinkedIn </a>•<a rel="noreferrer noopener" target="_blank" href="https://overcast.fm/">Overcast </a>•<a rel="noreferrer noopener" target="_blank" href="https://www.spotify.com/">Spotify </a>•<a rel="noreferrer noopener" target="_blank" href="https://twitter.com/">Twitter </a>•<a href="https://www.youtube.com/" target="_blank" rel="noreferrer noopener">YouTube</a></p><!-- /wp:paragraph -->',
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
