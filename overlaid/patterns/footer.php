<?php
/**
 * Title: Default footer
 * Slug: overlaid/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px","padding":{"top":"2rem","right":"0px","bottom":"4rem","left":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:2rem;padding-right:0px;padding-bottom:4rem;padding-left:0px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontSize":"1.1rem","textTransform":"uppercase","letterSpacing":"0.05rem"}},"textColor":"foreground"} -->
<p class="has-text-align-center has-foreground-color has-text-color has-link-color" style="font-size:1.1rem;letter-spacing:0.05rem;text-transform:uppercase">
	<?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'overlaid' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'overlaid' ),
			$wordpress_link
		);
		?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var(--wp--preset--spacing--80)"} -->
<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
