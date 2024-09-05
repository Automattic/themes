<?php
/**
 * Title: footer
 * Slug: sprinkler/footer
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:spacer {"height":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d80)"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50","top":"var:preset|spacing|50","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:social-links {"iconColor":"primary","iconColorValue":"#1b3c07","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"tiktok"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"0.8rem"}}} -->
<p class="has-text-align-left" style="font-size:0.8rem">
<?php
	/* Translators: WordPress link. */
	$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'sprinkler' ) ) . '" rel="nofollow">WordPress</a>';
	echo sprintf(
		esc_html__( 'Designed with %1$s', 'sprinkler' ),
		$wordpress_link
	);
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:site-title /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->