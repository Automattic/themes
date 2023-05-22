<?php
/**
 * Title: Default footer
 * Slug: menu/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:spacer {"height":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d80)"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">
	<?php
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'menu' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			/* Translators: WordPress link. */
			esc_html__( 'Designed with %1$s', 'menu' ),
			$wordpress_link
		);
	?>
</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--preset--color--foreground)","iconBackgroundColor":"background","iconBackgroundColorValue":"var(--wp--preset--color--tertiary)"} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"https://tumblr.com","service":"tumblr","label":"Tumblr"} /-->

<!-- wp:social-link {"url":"https://instagram.com","service":"instagram","label":"Instagram"} /-->

<!-- wp:social-link {"url":"https://twitter.com","service":"twitter","label":"Twitter"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"80px","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
