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

			foreach ( $block_patterns as $block_pattern ) {
				register_block_pattern(
					'quadrat/' . $block_pattern,
					require __DIR__ . '/patterns/' . $block_pattern . '.php'
				);
			}
		}
	}
endif;

add_action( 'init', 'quadrat_register_block_patterns', 9 );

if ( ! function_exists( 'quadrat_register_illustration_patterns' ) ) :

	function quadrat_register_illustration_patterns() {
		if ( function_exists( 'register_block_pattern_category' ) ) {
			register_block_pattern_category(
				'quadrat-images',
				array( 'label' => __( 'Quadrat Images', 'quadrat' ) )
			);
		}

		if ( function_exists( 'register_block_pattern' ) ) {
			$illustration_patterns = array(
				'circle-rolling-over-a-triangle' => __( 'Circle rolling over a triange', 'quadrat' ),
				'combination-of-purple-triangles' => __( 'Combination of purple triangles' , 'quadrat' ),
				'combination-of-white-orange-and-pink-triangles' => __( 'Combination of white orange and pink triangles' , 'quadrat' ),
				'complex-shape-combination-and-two-pink-squares-on-a-dark-purple-background' => __( 'Complex shape combination and two pink squares on a dark purple background' , 'quadrat' ),
				'group-of-squares-displayed-diagonally' => __( 'Group of squares displayed diagonally' , 'quadrat' ),
				'group-of-white-pink-and-orange-circles' => __( 'Group of white pink and orange circles' , 'quadrat' ),
				'many-pink-squares-overlapped' => __( 'Many pink squares overlapped' , 'quadrat' ),
				'orange-and-pink-shapes-displayed-in-different-ways' => __( 'Orange and pink shapes displayed in different ways' , 'quadrat' ),
				'orange-triangle-in-purple-background' => __( 'Orange triangle in purple background' , 'quadrat' ),
				'pink-square-and-dark-purple-triangle' => __( 'Pink square and dark purple triangle' , 'quadrat' ),
				'pink-square-with-dark-shadow-on-orange-background' => __( 'Pink square with dark shadow on orange background' , 'quadrat' ),
				'pink-squared-shapes-combination' => __( 'Pink squared shapes combination' , 'quadrat' ),
				'pink-squares-on-orange-background' => __( 'Pink squares on orange background' , 'quadrat' ),
				'solid-shapes-in-purple-pink-and-white' => __( 'Solid shapes in purple pink and white' , 'quadrat' ),
				'squares-changing-opacity-on-a-pink-background' => __( 'Squares changing opacity on a pink background' , 'quadrat' ),
				'three-circles-decreasing-in-size-on-a-pink-background' => __( 'Three circles decreasing in size on a pink background' , 'quadrat' ),
				'two-circles-and-a-squared-shape-on-pink-background' => __( 'Two circles and a squared shape on pink background' , 'quadrat' ),
				'white-and-orange-squares-on-light-purple-background' => __( 'White and orange squares on light purple background' , 'quadrat' ),
			);

			if ( class_exists( 'WP_Block_Type_Registry' ) && \WP_Block_Type_Registry::get_instance()->is_registered( 'jetpack/subscriptions' ) ) {
				$illustration_patterns[] = 'join';
			}

			foreach ( $illustration_patterns as $illustration_pattern_key => $illustration_pattern_name ) {
				register_block_pattern(
					'quadrat/' . $illustration_pattern_key,
					array(
						'title'      => $illustration_pattern_name,
						'categories' => array( 'quadrat-images' ),
						'content'    => '<!-- wp:image {"sizeSlug":"large"} -->
						<figure class="wp-block-image size-large"><img src="' . get_stylesheet_directory_uri() . '/assets/illustrations/' . $illustration_pattern_key . '.png" alt=""/></figure>
						<!-- /wp:image -->',
					)
				);
			}
		}
	}
endif;



add_action( 'init', 'quadrat_register_illustration_patterns', 9 );
