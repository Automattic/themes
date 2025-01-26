<?php
/**
 * Title: Default Footer
 * Slug: stitchery/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */

declare( strict_types = 1 );
?>

<!-- wp:spacer {"height":"var:preset|spacing|20","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"metadata":{"name":"Footer Container"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"backgroundColor":"theme-2","className":"lace-border","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull lace-border has-theme-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"0"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:0"><!-- wp:site-title {"textAlign":"center"} /-->

<!-- wp:navigation {"layout":{"type":"flex","justifyContent":"center"}} /--></div>
<!-- /wp:group -->


<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}},"className":"as-small-font-size"} -->
<p class="has-text-align-center as-small-font-size" style="font-size:14px">
	<?php
	$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'stitchery' ) ) . '" rel="nofollow">WordPress</a>';
	echo sprintf(
		/* Translators: WordPress link. */
		esc_html__( 'Designed with %1$s', 'stitchery' ),
		$wordpress_link
	);?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
