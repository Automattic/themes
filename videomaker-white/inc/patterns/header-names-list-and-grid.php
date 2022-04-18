<?php
/**
 * Header, Names List and Grid
 *
 * @package Videomaker
 */

return array(
	'title'      => __( 'Header, Names List and Grid', 'videomaker' ),
	'categories' => array( 'videomaker' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"46.67%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:46.67%"><!-- wp:site-title /-->

	<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"300"}}} -->
	<h3 style="font-weight:300">' . esc_html__( 'Augusta Smith', 'videomaker' ) . '<br>' . esc_html__( 'Amber Andrews', 'videomaker' ) . '<br>' . esc_html__( 'Syd Wyatt', 'videomaker' ) . '<br>' . esc_html__( 'Philip Mizrahi', 'videomaker' ) . '<br>' . esc_html__( 'Tony Sánchez', 'videomaker' ) . '<br>' . esc_html__( 'Romana Arak', 'videomaker' ) . '</h3>
	<!-- /wp:heading --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"13.33%"} -->
	<div class="wp-block-column" style="flex-basis:13.33%"><!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"60%"} -->
	<div class="wp-block-column" style="flex-basis:60%">

	<!-- wp:embed {"url":"https://videopress.com/v/z4N1oaIj","type":"video","providerNameSlug":"videopress","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
	<figure class="wp-block-embed is-type-video is-provider-videopress wp-block-embed-videopress wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
	https://videopress.com/v/z4N1oaIj
	</div></figure>
	<!-- /wp:embed -->

	<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"}},"fontSize":"normal"} -->
	<h3 class="has-normal-font-size" style="font-weight:700">' . esc_html__( 'Boats', 'videomaker' ) . '</h3>
	<!-- /wp:heading -->

	<!-- wp:group {"className":"post-meta","layout":{"type":"flex"},"style":{"spacing":{"padding":{"bottom":"var(--wp--style--block-gap,1em)"}}}} -->
	<div class="wp-block-group post-meta" style="padding-bottom:var(--wp--style--block-gap,1em)">
		<!-- wp:post-date {"isLink":true,"style":{"typography":{"fontSize":"var(--wp--custom--font-sizes--x-small)"}}} /-->
		<!-- wp:post-terms {"term":"category","style":{"typography":{"fontSize":"var(--wp--custom--font-sizes--x-small)"}}} /-->
	</div>
	<!-- /wp:group -->

	</div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
