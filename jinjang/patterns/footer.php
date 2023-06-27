<?php
/**
 * Title: Default footer
 * Slug: jinjang/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-text-color has-link-color">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"fontSize":"x-small"} -->
		<p class="has-x-small-font-size"><a href="#"><?php echo  esc_html__( 'Instagram', 'jinjang' ); ?></a>/<a href="#"><?php echo  esc_html__( 'Twitter', 'jinjang' ); ?></a>/<a href="#"><?php echo  esc_html__( 'LinkedIn', 'jinjang' ); ?></a></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"fontSize":"x-small"} -->
		<p class="has-x-small-font-size"><?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'jinjang' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'jinjang' ),
			$wordpress_link
		);?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
