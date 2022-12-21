<?php
/**
 * Footer block pattern
 */
return array(
	'title'      => __( 'Footer', 'lettre' ),
	'inserter'   => false,
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"58px","bottom":"58px"}}},"layout":{"contentSize":"500px"}} -->
					<div class="wp-block-group" style="padding-top:58px;padding-bottom:58px;"><!-- wp:pattern {"slug":"lettre/hidden-subscription-form"} /--></div>
					<!-- /wp:group -->
					<!-- wp:spacer {"height":"170px"} -->
					<div style="height:170px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
					<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size">' .
					sprintf(
						esc_html__( 'A %s newsletter', 'lettre' ),
						'<a href="' . esc_url( __( 'https://wordpress.com', 'lettre' ) ) . '" rel="nofollow">WordPress.com</a>'
					) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:site-title {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"fontSize":"small"} /--></div>
					<!-- /wp:group -->',
);
