<?php
/**
 * Title: Footer Light
 * Slug: eventual/footer-light
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"0rem","left":"0rem"},"margin":{"top":"8rem","bottom":"0px"},"blockGap":"4rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignfull" style="margin-top:8rem;margin-bottom:0px;padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem"><!-- wp:paragraph {"style":{"typography":{"fontSize":"2rem"}}} -->
<p style="font-size:2rem">This is a sample site created based on <a rel="noreferrer noopener" href="#" target="_blank">a post from Andrew Lind</a> stating that 'For a 24-hour period around March 28th, there will be at least 1 Automattician somewhere around the world running in a virtual relay.' This run's Previous editions were also registered in <a rel="noreferrer noopener" href="#" target="_blank">2022 (I)</a>, <a rel="noreferrer noopener" href="#" target="_blank">2022 (II)</a>, and <a rel="noreferrer noopener" href="#" target="_blank">2021</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"0rem","top":"0.3rem"},"margin":{"top":"2rem","bottom":"0rem"}},"border":{"top":{"width":"0.3rem"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group alignfull has-contrast-color has-text-color has-link-color" style="border-top-width:0.3rem;margin-top:2rem;margin-bottom:0rem;padding-top:0.3rem;padding-bottom:0rem"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"3rem","lineHeight":"1","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"-0.1rem"}}} -->
<p class="has-text-align-left" style="font-size:3rem;font-style:normal;font-weight:600;letter-spacing:-0.1rem;line-height:1;text-transform:uppercase">
	<?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'eventual' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'eventual' ),
			$wordpress_link
		);
		?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
