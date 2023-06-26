<?php
/**
 * Title: Default footer
 * Slug: kigen/footer
 * Categories: featured, footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:navigation {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"fontSize":"x-small"} /-->

		<!-- wp:paragraph {"align":"right","className":"has-x-small-font-size","fontSize":"x-small"} -->
		<p class="has-text-align-right has-x-small-font-size">
		<?php
			$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'lineup' ) ) . '" rel="nofollow">WordPress</a>';
			echo sprintf(
				/* Translators: WordPress link. */
				esc_html__( 'Designed with %1$s', 'lineup' ),
				$wordpress_link
			);
			?>
			</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:pattern {"slug":"kigen/border"} /-->
</div>
<!-- /wp:group -->
