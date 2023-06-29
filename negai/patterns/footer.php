<?php
/**
 * Title: Default footer
 * Slug: negai/footer
 * Categories: featured, footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"fontSize":"medium"} -->
	<p class="has-medium-font-size" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px"><?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'negai' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'negai' ),
			$wordpress_link
		);?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
