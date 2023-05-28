<?php
/**
 * Title: Default footer
 * Slug: tomoni/footer
 * Categories: featured, footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:paragraph {"fontSize":"x-small"} -->
	<p class="has-x-small-font-size"><a href="#"><?php echo esc_html__( 'Instagram', 'tomoni' ); ?></a> / <a href="#"><?php echo esc_html__( 'Facebook', 'tomoni' ); ?></a> / <a href="#"><?php echo esc_html__( 'TikTok', 'tomoni' ); ?></a></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"fontSize":"x-small"} -->
	<p class="has-x-small-font-size"><?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'tomoni' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'tomoni' ),
			$wordpress_link
		);?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
