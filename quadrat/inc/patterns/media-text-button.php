<?php
/**
 * Media and text with button.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Media and text with button', 'quadrat' ),
	'categories' => array( 'quadrat' ),
	'content'    => '<!-- wp:media-text {"mediaLink":"https://quadrat.mystagingwebsite.com/wp-content/uploads/2021/04/girls-illustration.png","mediaType":"image"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="https://quadrat.mystagingwebsite.com/wp-content/uploads/2021/04/girls-illustration.png" alt="' . esc_attr__( 'Illustration of two women.', 'quadrat' ) . '"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph -->
	<p>' . esc_html__( 'The Hosts', 'quadrat' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading -->
	<h2>' . esc_html__( 'Sarah &amp; Olivia are both writers and activists.', 'quadrat' ) . '</h2>
	<!-- /wp:heading -->

	<!-- wp:spacer {"height":36} -->
	<div style="height:36px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button -->
	<div class="wp-block-button"><a class="wp-block-button__link">' . esc_html__( 'Learn More', 'quadrat' ) . '</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div></div>
	<!-- /wp:media-text -->',
);
