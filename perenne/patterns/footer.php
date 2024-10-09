<?php
/**
 * Title: Default footer
 * Slug: perenne/footer
 * Categories: featured, footer
 * Block Types: core/template-part/footer
 */
declare( strict_types = 1 );
?>

<!-- wp:spacer {"height":"200px"} -->
<div style="height:200px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph -->
	<p><?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'perenne' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'perenne' ),
			$wordpress_link
		);?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
