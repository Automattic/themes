<?php
/**
 * Default footer block pattern
 */
return array(
	'title'      => __( 'Default footer', 'livre' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)","bottom":"var(--wp--custom--spacing--small, 1.25rem)"}}}} -->
					<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--large, 8rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)">
					<!-- wp:paragraph {"style":{"fontSize":"small"} -->
					<p class="has-small-font-size">' .
					sprintf(
						/* Translators: WordPress link. */
						esc_html__( 'Proudly powered by %s', 'livre' ),
						'<a href="' . esc_url( __( 'https://wordpress.org', 'livre' ) ) . '" rel="nofollow">WordPress</a>'
					) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:group -->',
);
