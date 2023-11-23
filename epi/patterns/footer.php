<?php
/**
 * Title: Default footer
 * Slug: epi/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:spacer {"height":"192px"} -->
<div style="height:192px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:site-logo {"width":96,"shouldSyncIcon":false,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
	<div class="wp-block-group">
		<!-- wp:site-title {"level":0,"style":{"typography":{"lineHeight":1.388888889}}} /-->

		<!-- wp:paragraph -->
		<p><a href="#"><?php echo esc_html__( 'Tumblr', 'epi' ); ?></a> / <a href="#"><?php echo esc_html__( 'Instagram', 'epi' ); ?></a> / <a href="#"><?php echo esc_html__( 'Email', 'epi' ); ?></a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph -->
	<p><?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'epi' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'epi' ),
			$wordpress_link
		);
	?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
