<?php
/**
 * Full-width Homepage
 *
 * @package Videomaker
 */

return array(
	'title'      => __( 'Full-width Homepage', 'videomaker' ),
	'categories' => array( 'videomaker' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:site-title /--></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"},"style":{"typography":{"textTransform":"uppercase"}}} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:embed {"url":"https://videopress.com/v/bjvmxiQS","type":"video","providerNameSlug":"videopress","responsive":true,"align":"wide","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
	<figure class="wp-block-embed alignwide is-type-video is-provider-videopress wp-block-embed-videopress wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
	https://videopress.com/v/bjvmxiQS
	</div></figure>
	<!-- /wp:embed -->',
);
