<?php
/**
 * Title: Default footer
 * Slug: pixel/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"layout":{"inherit":"true","type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size">
    <?php
			printf(
				/* Translators: WordPress link. */
				esc_html__( 'Pixel Theme, proudly powered by %s', 'archeo' ),
				'<a href="' . esc_url( __( 'https://wordpress.org', 'archeo' ) ) . '" rel="nofollow">WordPress</a>'
			);
    ?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->