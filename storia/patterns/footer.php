<?php
/**
 * Title: Default footer
 * Slug: storia/footer
 * Categories: featured, footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"padding":{"left":"0","right":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:site-title /-->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><a href="#"><?php _e( 'Tumblr', 'storia' ); ?></a> / <a href="#"><?php _e( 'Instagram', 'storia' ); ?></a> / <a href="#"><?php _e( 'Email', 'storia' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"right","className":"has-x-small-font-size","fontSize":"x-small"} -->
<p class="has-text-align-right has-x-small-font-size">
	<?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'storia' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'storia' ),
			$wordpress_link
		);
		?>
</p><!-- /wp:paragraph -->
</div>
<!-- /wp:group --></div>
<!-- /wp:group -->