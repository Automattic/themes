<?php
/**
 * Centered footer block pattern
 */
return array(
	'title'      => __( 'Centered footer', 'livro' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--large, 8rem)","bottom":"var(--wp--custom--spacing--small, 1.25rem)"}}}} -->
					<div class="wp-block-group alignfull" style="padding-top:var(--wp--custom--spacing--large, 8rem);padding-bottom:var(--wp--custom--spacing--small, 1.25rem)">
					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size">' .
					sprintf(
						/* Translators: WordPress link. */
						esc_html__( 'Proudly powered by %s', 'livro' ),
						'<a href="' . esc_url( __( 'https://wordpress.org', 'livro' ) ) . '" rel="nofollow">WordPress</a>'
					) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:group -->',
);
