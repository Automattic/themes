<?php
/**
 * Title: Default footer
 * Slug: gramming/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"3rem","bottom":"3rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:3rem;padding-bottom:3rem"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"0rem","top":"0rem","right":"0rem","left":"0rem"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"2rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:paragraph {"align":"left","fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size">
	<?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'gramming' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'gramming' ),
			$wordpress_link
		);
		?>
</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"tertiary","iconColorValue":"#f5f5f5","iconBackgroundColor":"primary","iconBackgroundColorValue":"#111111","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"0.5rem","left":"0.5rem"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"tumblr.com","service":"tumblr"} /-->

<!-- wp:social-link {"url":"instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"500px.com","service":"fivehundredpx"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
