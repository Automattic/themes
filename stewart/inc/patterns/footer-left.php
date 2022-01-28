<?php
/**
 * Left-aligned footer block pattern
 */
return array(
	'title'      => __( 'Left-aligned footer', 'stewart' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:spacer {"height":60} -->
					<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull">
					<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide"><!-- wp:paragraph {"style":{"fontSize":"small"} -->
					<p class="has-small-font-size">' .
					sprintf(
						/* Translators: WordPress link. */
						esc_html__( 'Proudly powered by %s', 'stewart' ),
						'<a href="' . esc_url( __( 'https://wordpress.org', 'stewart' ) ) . '" rel="nofollow">WordPress</a>'
					) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->

					<!-- wp:spacer {"height":60} -->
					<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->',
);
