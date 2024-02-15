<?php
/**
 * Title: Default footer
 * Slug: chanson/footer
 * Categories: featured, footer
 * Block Types: core/template-part/footer
 */
declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">
	<!-- wp:paragraph {"align":"right","fontSize":"x-small"} -->
	<p class="has-text-align-right has-x-small-font-size"><?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'chanson' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'chanson' ),
			$wordpress_link
		);?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
