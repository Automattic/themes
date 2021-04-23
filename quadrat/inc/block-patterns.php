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
				'quadrat/latest-episodes',
				array(
					'title'      => __( 'Latest Episodes', 'quadrat' ),
					'categories' => array( 'quadrat' ),
					'content'    => '<!-- wp:columns {"align":"wide"} -->
					<div class="wp-block-columns alignwide"><!-- wp:column -->
					<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"30px"}}}} -->
					<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:30px"><!-- wp:image {"id":1438,"sizeSlug":"large","linkDestination":"none","className":"image-no-margin mb-0"} -->
					<figure class="wp-block-image size-large image-no-margin mb-0"><img src="https://quadrat.mystagingwebsite.com/wp-content/uploads/2021/04/Screen-usage-1024x623.jpg" alt="' . esc_attr__( 'Illustration of a woman working on a laptop.', 'quadrat') . '" class="wp-image-1438"/></figure>
					<!-- /wp:image -->
					
					<!-- wp:cover {"overlayColor":"darker-blue","minHeight":360,"className":"mt-0","style":{"spacing":{"padding":{"top":"30px","right":"40px","bottom":"20px","left":"40px"}}}} -->
					<div class="wp-block-cover has-darker-blue-background-color has-background-dim mt-0" style="padding-top:30px;padding-right:40px;padding-bottom:20px;padding-left:40px;min-height:360px"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"textColor":"pink"} -->
					<h3 class="has-pink-color has-text-color">' . esc_html__( 'Episode 1: How Screens Affect Hormones', 'quadrat') . '</h3>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph {"textColor":"pink","fontSize":"small"} -->
					<p class="has-pink-color has-text-color has-small-font-size">' . esc_html__( 'In this episode, Sarah and Olivia talk with female hormone specialist Diana Roth about the impact that gadgets and technology have on hormone and fertility health.', 'quadrat') . '</p>
					<!-- /wp:paragraph --></div></div>
					<!-- /wp:cover --></div>
					<!-- /wp:group --></div>
					<!-- /wp:column -->
					
					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"30px"}}}} -->
					<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:30px"><!-- wp:image {"id":1439,"sizeSlug":"large","linkDestination":"none","className":"image-no-margin mb-0"} -->
					<figure class="wp-block-image size-large image-no-margin mb-0"><img src="https://quadrat.mystagingwebsite.com/wp-content/uploads/2021/04/Leadership-1024x623.jpg" alt="' . esc_attr__( 'Illustration of a woman climbing steps.', 'quadrat') . '" class="wp-image-1439"/></figure>
					<!-- /wp:image -->
					
					<!-- wp:cover {"overlayColor":"darker-blue","minHeight":360,"className":"mt-0","style":{"spacing":{"padding":{"top":"30px","right":"40px","bottom":"20px","left":"40px"}}}} -->
					<div class="wp-block-cover has-darker-blue-background-color has-background-dim mt-0" style="padding-top:30px;padding-right:40px;padding-bottom:20px;padding-left:40px;min-height:360px"><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"textColor":"pink"} -->
					<h3 class="has-pink-color has-text-color">' . esc_html__( 'Episode 2: Female Leaders, Where Are They?', 'quadrat') . '</h3>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph {"textColor":"pink","fontSize":"small"} -->
					<p class="has-pink-color has-text-color has-small-font-size">' . esc_html__( 'After years of revolution, the big question remains: why aren’t there more women in leadership? Sarah and Olivia get deep into the subject.', 'quadrat') . '</p>
					<!-- /wp:paragraph --></div></div>
					<!-- /wp:cover --></div>
					<!-- /wp:column --></div>
					<!-- /wp:group --></div>
					<!-- /wp:columns -->',
				)
			);

			register_block_pattern(
				'quadrat/episode',
				array(
					'title'      => __( 'Episode', 'quadrat' ),
					'categories' => array( 'quadrat' ),
					'content'    => '<!-- wp:columns {"verticalAlignment":"center","align":"wide","backgroundColor":"darker-blue","textColor":"pink","className":"has-bakground-no-padding"} -->
					<div class="wp-block-columns alignwide are-vertically-aligned-center has-bakground-no-padding has-pink-color has-darker-blue-background-color has-text-color has-background"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:image {"id":1497,"sizeSlug":"full","className":"image-no-margin mb-0"} -->
					<figure class="wp-block-image size-full image-no-margin mb-0"><img src="http://freethemes.local/wp-content/uploads/2021/04/Introspection-scaled.jpg" alt="' . esc_attr__( 'Illustration of an introspective woman.', 'quadrat') . '" class="wp-image-1497"/></figure>
					<!-- /wp:image --></div>
					<!-- /wp:column -->
					
					<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}}} -->
					<div class="wp-block-group" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">
					<!-- wp:heading {"level":3,"textColor":"pink"} -->
					<h3 class="has-pink-color has-text-color">' . esc_html__( 'Episode 1: How Screens Affect Hormones', 'quadrat') . '</h3>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph {"textColor":"pink","fontSize":"small"} -->
					<p class="has-pink-color has-text-color has-small-font-size">' . esc_html__( 'In this episode, Sarah and Olivia talk with female hormone specialist Diana Roth about the impact that gadgets and technology have on hormone and fertility health.', 'quadrat') . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:group --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->',
					)
				);

		}
	}
endif;

add_action( 'after_setup_theme', 'quadrat_register_block_patterns', 12 );
