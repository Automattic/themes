<?php
/**
 * Title: Default footer
 * Slug: poesis/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:spacer {"height":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d80)"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontSize":"0.8rem"},"color":{"text":"#cbcbcb"}}} -->
<p class="has-text-align-left has-text-color has-link-color" style="color:#cbcbcb;font-size:0.8rem">
	<?php
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'poesis' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			/* Translators: WordPress link. */
			esc_html__( 'Designed with %1$s', 'poesis' ),
			$wordpress_link
		);
	?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
