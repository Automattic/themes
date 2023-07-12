<?php
/**
 * Title: Default footer
 * Slug: mpho/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"5vh"} -->
<div style="height:5vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.2rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title {"fontSize":"medium"} /-->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"0.9rem"}},"textColor":"contrast"} -->
<p class="has-text-align-left has-contrast-color has-text-color has-link-color" style="font-size:0.9rem">
	<?php
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'mpho' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			/* Translators: WordPress link. */
			esc_html__( 'Designed with %1$s', 'mpho' ),
			$wordpress_link
		);
		?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"6vh"} -->
<div style="height:6vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
