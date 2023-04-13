<?php
/**
 * Title: Default footer
 * Slug: optimismo/footer
 * Categories: featured, footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:navigation {"ref":449,"overlayMenu":"never","align":"wide","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"0.69rem"}}} /-->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontSize":"0.69rem"}}} -->
	<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--40);font-size:0.69rem">
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
