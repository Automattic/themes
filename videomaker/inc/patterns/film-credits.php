<?php
/**
 * Film credits.
 *
 * @package Videomaker
 */

return array(
	'title'      => __( 'Film credits', 'videomaker' ),
	'categories' => array( 'videomaker' ),
	'content'    => '<!-- wp:spacer {"height":50} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"medium"} -->
	<p class="has-text-align-center has-medium-font-size" style="line-height:1.3">' . esc_html__( 'Based on the novel “Working at Dawn” by', 'videomaker' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size" style="line-height:1.3">' . esc_html__( 'LOIS HERBERT', 'videomaker' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":20} -->
	<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"medium"} -->
	<p class="has-text-align-center has-medium-font-size" style="line-height:1.3">' . esc_html__( 'Screenplay by', 'videomaker' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size" style="line-height:1.3">' . wp_kses_post( __( 'AUGUSTA SMITH<br>AMBER ANDREWS<br>MARY HAN', 'videomaker' ) ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":20} -->
	<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"medium"} -->
	<p class="has-text-align-center has-medium-font-size" style="line-height:1.3">' . esc_html__( 'Directed by', 'videomaker' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size" style="line-height:1.3">' . esc_html__( 'MARY HAN', 'videomaker' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":50} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->',
);
