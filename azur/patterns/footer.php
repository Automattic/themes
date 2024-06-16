<?php
/**
 * Title: Default footer
 * Slug: azur/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */

declare( strict_types = 1 );
?>

<!-- wp:spacer {"height":"90px"} -->
<div style="height:90px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"400px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">
	<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"0.8rem","fontWeight":"500"}}} -->
	<p class="has-text-align-left" style="font-size:0.8rem;font-weight:500"><?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'ici' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Azur Theme ● Designed with %1$s', 'ici' ),
			$wordpress_link
		);
	?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
