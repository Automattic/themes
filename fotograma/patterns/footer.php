<?php
/**
 * Title: Default footer
 * Slug: fotograma/footer
 * Categories: featured, footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|contrast"}}}}},"textColor":"contrast","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-contrast-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:paragraph {"fontSize":"x-small"} -->
	<p class="has-x-small-font-size"><?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'fotograma' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'fotograma' ),
			$wordpress_link
		);?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
