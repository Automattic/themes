<?php
/**
 * Title: Default footer
 * Slug: loudness/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"inherit":true,"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
<!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small","fontFamily":"rubik"} -->
<p class="has-text-align-center has-rubik-font-family has-small-font-size" style="text-transform:uppercase">
	<?php
		/* Translators: Theme name. */
		$theme_name = '<strong>' . esc_html__( 'Loudness Theme', 'loudness' ) . '</strong>';
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'loudness' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
		// Translators: Footer credits.
			esc_html__( '%1$s, Designed with %2$s', 'loudness' ),
			$theme_name,
			$wordpress_link
		);
		?>
</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
