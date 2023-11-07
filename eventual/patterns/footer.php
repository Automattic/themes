<?php
/**
 * Title: Default footer
 * Slug: eventual/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"2rem","top":"2rem"},"margin":{"top":"0rem","bottom":"0rem"}},"border":{"top":{"width":"0.5rem"},"bottom":{"width":"0.5rem"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-group alignfull" style="border-top-width:0.5rem;border-bottom-width:0.5rem;margin-top:0rem;margin-bottom:0rem;padding-top:2rem;padding-bottom:2rem"><!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"4rem","lineHeight":"1"}}} -->
	<p class="has-text-align-right" style="font-size:4rem;line-height:1">
		<?php
			/* Translators: WordPress link. */
			$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'eventual' ) ) . '" rel="nofollow">WordPress</a>';
			echo sprintf(
				esc_html__( 'Designed with %1$s', 'eventual' ),
				$wordpress_link
			);
			?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
