<?php
/**
 * Title: Footer
 * Slug: lynx/hidden-footer
 * Inserter: no
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"58px","right":"58px","bottom":"58px","left":"58px"}}},"layout":{"contentSize":"500px"}} -->
	<div class="wp-block-group" style="padding-top:58px;padding-right:58px;padding-bottom:58px;padding-left:58px"><!-- wp:pattern {"slug":"lettre/hidden-subscription-form"} /--></div>
	<!-- /wp:group -->
	<!-- wp:spacer {"height":"170px"} -->
	<div style="height:170px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- wp:group {"layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
	<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"x-small"} -->
	<p class="has-x-small-font-size">
	<?php
		printf(
			/* Translators: WordPress link. */
			esc_html__( 'Proudly powered by %s', 'lynx' ),
			'<a href="' . esc_url( __( 'https://wordpress.org', 'lynx' ) ) . '" rel="nofollow">WordPress</a>'
		)
	?>
	</p>
	<!-- /wp:paragraph -->

	<!-- wp:site-title {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"fontSize":"x-small"} /--></div>
<!-- /wp:group -->
