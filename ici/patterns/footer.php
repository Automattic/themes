<?php
/**
 * Title: Default footer
 * Slug: ici/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained","justifyContent":"center","contentSize":""}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">
	<!-- wp:paragraph {"fontSize":"xx-small"} -->
	<p class="has-xx-small-font-size"><?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'ici' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Ici Theme –––– Designed with %1$s', 'ici' ),
			$wordpress_link
		);
	?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
