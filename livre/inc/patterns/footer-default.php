<?php
/**
 * Default header block pattern
 */
return array(
	'title'      => __( 'Default header', 'livre' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"full","layout":{"inherit":true}} --><!-- wp:group {"style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)"}}},"layout":{"inherit":true}} -->
					<div class="wp-block-group" style="padding-top:var(--wp--custom--spacing--large, 8rem)">
					<!-- wp:paragraph {"style":{"fontSize":"small"} -->
					<p class="has-small-font-size">' .
					sprintf(
						/* Translators: WordPress link. */
						esc_html__( 'Proudly powered by %s', 'livre' ),
						'<a href="' . esc_url( __( 'https://wordpress.org', 'livre' ) ) . '" rel="nofollow">WordPress</a>'
					) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
);
