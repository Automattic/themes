<?php
/**
 * Title: footer
 * Slug: happening/footer
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"5vh"},"margin":{"top":"0vh","bottom":"0vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0vh;margin-bottom:0vh;padding-bottom:5vh"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0rem","padding":{"top":"0.5rem","right":"0rem","bottom":"0.5rem","left":"0rem"}},"border":{"top":{"width":"2px"},"bottom":{"width":"2px"},"right":[],"left":[]}},"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide" style="border-top-width:2px;border-bottom-width:2px;padding-top:0.5rem;padding-right:0rem;padding-bottom:0.5rem;padding-left:0rem"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","lineHeight":"1"}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size" style="line-height:1;text-transform:uppercase">	<?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'eventual' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'happening' ),
			$wordpress_link
		);
		?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->