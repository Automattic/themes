<?php
/**
 * Default footer block pattern
 */
return array(
	'title'      => __( 'Default footer', 'archeo' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"layout":{"inherit":"true"}} -->
	<div class="wp-block-group"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"},"style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--medium)","top":"var(--wp--custom--spacing--medium)"}}}} -->
	<div class="wp-block-group alignwide" style="padding-top: var(--wp--custom--spacing--medium); padding-bottom: var(--wp--custom--spacing--medium);">
		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"},"overlayMenu":"never","className":"site-footer","style":{"typography":{"fontStyle":"normal"},"spacing":{"blockGap":"var(--wp--custom--spacing--small)"}},"fontSize":"small"} /-->
	
		<!-- wp:paragraph {"align":"left","fontSize":"small","style":{"spacing":{"margin":{"top":0}}}} -->
		<p class="has-small-font-size" style="margin-top: 0;">' .
		sprintf(
			/* Translators: WordPress link. */
			esc_html__( 'Proudly powered by %s', 'archeo' ),
			'<a href="' . esc_url( __( 'https://wordpress.org', 'archeo' ) ) . '" rel="nofollow">WordPress</a>'
		) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
		<!-- /wp:group -->',
);
