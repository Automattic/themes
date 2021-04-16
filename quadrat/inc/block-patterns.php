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

			register_block_pattern(
				'quadrat/headline-button',
				array(
					'title'      => __( 'Headline and button', 'quadrat' ),
					'categories' => array( 'quadrat' ),
					'content'    => '<!-- wp:group {"align":"wide"} -->
					<div class="wp-block-group alignwide"><!-- wp:paragraph -->
					<p>' . esc_html__( 'The Hosts', 'quadrat') . '</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:heading -->
					<h2>' . esc_html__( 'Samantha and Olivia are both writers and activists.', 'quadrat') . '</h2>
					<!-- /wp:heading -->
					
					<!-- wp:spacer {"height":36} -->
					<div style="height:36px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html__( 'Learn More', 'quadrat') . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div>
					<!-- /wp:group -->',
				)
			);

			register_block_pattern(
				'quadrat/media-text-button',
				array(
					'title'      => __( 'Media and text with button', 'quadrat' ),
					'categories' => array( 'quadrat' ),
					'content'    => '<!-- wp:media-text {"mediaLink":"https://quadrat.mystagingwebsite.com/wp-content/uploads/2021/04/girls-illustration.png","mediaType":"image"} -->
					<div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="https://quadrat.mystagingwebsite.com/wp-content/uploads/2021/04/girls-illustration.png" alt="' . esc_attr__( 'Illustration of two women.', 'quadrat' ) . '"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph -->
					<p>' . esc_html__( 'The Hosts', 'quadrat') . '</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:heading -->
					<h2>' . esc_html__( 'Sarah &amp; Olivia are both writers and activists.', 'quadrat') . '</h2>
					<!-- /wp:heading -->
					
					<!-- wp:spacer {"height":36} -->
					<div style="height:36px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					
					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html__( 'Learn More', 'quadrat') . '</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div></div>
					<!-- /wp:media-text -->',
				)
			);

			register_block_pattern(
				'quadrat-blocks/example',
				array(
					'title'      => __( 'Latest Episodes', 'quadrat' ),
					'categories' => array( 'quadrat' ),
					'content'    => '<!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:image {"id":1438,"sizeSlug":"large","linkDestination":"none","className":"image-no-margin mb-0"} -->
					<figure class="wp-block-image size-large image-no-margin mb-0"><img src="http://freethemes.local/wp-content/uploads/2021/04/Screen-usage-1024x623.jpg" alt="Screen usage" class="wp-image-1438"/></figure>
					<!-- /wp:image -->
					
					<!-- wp:cover {"overlayColor":"darker-blue","minHeight":425,"className":"mt-0","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}}} -->
					<div class="wp-block-cover has-darker-blue-background-color has-background-dim mt-0" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;min-height:425px"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"textColor":"pink"} -->
					<h3 class="has-pink-color has-text-color">Episode 1: How Screens Affect Hormones</h3>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph {"textColor":"pink"} -->
					<p class="has-pink-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus dictum at tempor commodo ullamcorper a lacus vestibulum sed.</p>
					<!-- /wp:paragraph --></div></div>
					<!-- /wp:cover --></div>
					<!-- /wp:column -->
					
					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:image {"id":1439,"sizeSlug":"large","linkDestination":"none","className":"image-no-margin mb-0"} -->
					<figure class="wp-block-image size-large image-no-margin mb-0"><img src="http://freethemes.local/wp-content/uploads/2021/04/Leadership-1024x623.jpg" alt="Leadership" class="wp-image-1439"/></figure>
					<!-- /wp:image -->
					
					<!-- wp:cover {"overlayColor":"darker-blue","minHeight":425,"className":"mt-0","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}}} -->
					<div class="wp-block-cover has-darker-blue-background-color has-background-dim mt-0" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px;min-height:425px"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"textColor":"pink"} -->
					<h3 class="has-pink-color has-text-color">Episode 2: Female Leaders, Where Are They?</h3>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph {"textColor":"pink"} -->
					<p class="has-pink-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<!-- /wp:paragraph --></div></div>
					<!-- /wp:cover --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->',
				)
			);

		}
	}
endif;

add_action( 'after_setup_theme', 'quadrat_register_block_patterns', 12 );
