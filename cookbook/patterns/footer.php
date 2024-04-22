<?php
/**
 * Title: footer
 * Slug: cookbook/footer
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#111111","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"right","fontSize":"small"} -->
<p class="has-text-align-right has-small-font-size"><?php
	/* Translators: WordPress link. */
	$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'cookbook' ) ) . '" rel="nofollow">WordPress</a>';
	echo sprintf(
		esc_html__( 'Designed with %1$s', 'cookbook' ),
		$wordpress_link
	);
?>></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->