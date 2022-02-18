<?php
/**
 * Default footer block pattern
 */
return array(
	'title'      => __( 'Default footer', 'archeo' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"},"style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--medium)","top":"var(--wp--custom--spacing--medium)"}}}} -->
	<div class="wp-block-group" style="padding-top: var(--wp--custom--spacing--medium); padding-bottom: var(--wp--custom--spacing--medium);">
		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center"},"overlayMenu":"never","style":{"typography":{"fontStyle":"normal"},"spacing":{"blockGap":"50px"}},"fontSize":"small"} /-->
	
		<!-- wp:paragraph {"align":"center","fontSize":"small","style":{"spacing":{"margin":{"top":0}}}} -->
		<p class="has-text-align-center has-small-font-size" style="margin-top: 0;">' .
		sprintf(
			/* Translators: WordPress link. */
			esc_html__( 'Proudly powered by %s', 'archeo' ),
			'<a href="' . esc_url( __( 'https://wordpress.org', 'archeo' ) ) . '" rel="nofollow">WordPress</a>'
		) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:group -->',
);
