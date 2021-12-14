<?php
/**
 * Pattern: Two posts with excerpt
 *
 * @package Videomaker
 */

return array(
	'title'      => __( 'Two posts with excerpt', 'videomaker' ),
	'categories' => array( 'videomaker' ),
	'content'    => '<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"80%"} -->
	<div class="wp-block-column" style="flex-basis:80%">

	<!-- wp:embed {"url":"https://videopress.com/v/bjvmxiQS","type":"video","providerNameSlug":"videopress","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
	<figure class="wp-block-embed is-type-video is-provider-videopress wp-block-embed-videopress wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
	https://videopress.com/v/bjvmxiQS
	</div></figure>
	<!-- /wp:embed -->

	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column">

	<!-- wp:heading {"level":4} -->
	<h4>' . esc_html__( 'Working at Dawn', 'videomaker' ) . '</h4>
	<!-- /wp:heading -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:1.5">' . esc_html__( 'As nations under the present system are driven to compete with one another for the markets of the world, so also have the workers to compete with each other—for livelihood.', 'videomaker' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"20%"} -->
	<div class="wp-block-column" style="flex-basis:20%"><!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"80%"} -->
	<div class="wp-block-column" style="flex-basis:80%">

	<!-- wp:embed {"url":"https://videopress.com/v/z4N1oaIj","type":"video","providerNameSlug":"videopress","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
	<figure class="wp-block-embed is-type-video is-provider-videopress wp-block-embed-videopress wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
	https://videopress.com/v/z4N1oaIj
	</div></figure>
	<!-- /wp:embed -->

	<!-- wp:columns -->
	<div class="wp-block-columns"><!-- wp:column -->
	<div class="wp-block-column">

	<!-- wp:heading {"level":4} -->
	<h4>' . esc_html__( 'Boats', 'videomaker' ) . '</h4>
	<!-- /wp:heading -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="line-height:1.5">' . esc_html__( 'As nations under the present system are driven to compete with one another for the markets of the world, so also have the workers to compete with each other—for livelihood.', 'videomaker' ) . '</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->',
);
