<?php
/**
 * Title: Footer
 * Slug: calyx/footer
 * Categories: featured
 */
?>

<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"30px"}}}} -->
	<div class="wp-block-group" style="padding-top:80px;padding-bottom:30px"><!-- wp:paragraph {"align":"center","className":"has-small-font-size"} -->
		<p class="has-text-align-center has-small-font-size">
			<?php
			printf(
				/* Translators: WordPress.com link. */
				esc_html__( 'Proudly Powered by %s', 'calyx' ),
				'<a href="' . esc_url( __( 'https://wordpress.com', 'calyx' ) ) . '" rel="nofollow">WordPress.com</a>'
				);
			?>
		</p><!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->