<?php
/**
 * Episode.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Episode', 'quadrat' ),
	'categories' => array( 'quadrat' ),
	'content'    => '<!-- wp:media-text {"mediaLink":"' . get_stylesheet_directory_uri() . '/assets/illustrations/introspection-scaled.jpeg","mediaType":"image","mediaWidth":40,"mediaSizeSlug":"large","imageFill":false,"className":"has-primary-color has-tertiary-background-color has-text-color has-background is-style-default"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile has-primary-color has-tertiary-background-color has-text-color has-background is-style-default" style="grid-template-columns:40% auto"><figure class="wp-block-media-text__media"><img src="' . get_stylesheet_directory_uri() . '/assets/illustrations/introspection-scaled.jpeg" alt="' . esc_attr__( 'Illustration of an introspective woman.', 'quadrat') . '"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3} -->
	<h3>' . esc_html__( 'Episode 3: A Cycle of Emotions', 'quadrat' ) . '</h3>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">' . wp_kses_post( __( '<em>“Do we need periods if they make us crazy?”</em>, Sarah asks. We reached out to our friend Diana Roth, an endocrinologist specialized in women’s hormonal health to know how menstrual cycles impact women’s brains and emotions. Hint: yes, we do.', 'quadrat' ) ) . '</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text -->
	<!-- wp:spacer {"height":30} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->',
);
