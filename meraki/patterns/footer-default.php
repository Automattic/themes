<?php
/**
 * Title: Default footer block pattern
 * Slug: meraki/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"backgroundColor":"black","textColor":"background"} -->
<div class="wp-block-group has-background-color has-black-background-color has-text-color has-background has-link-color" style="padding-top:20px;padding-bottom:20px">
	<!-- wp:paragraph {"align":"center","fontSize":"tiny"} -->
	<p class="has-text-align-center has-tiny-font-size">
		<?php
			printf(
				/* Translators: WordPress link. */
				esc_html__( 'Proudly powered by %s', 'meraki' ),
				'<a href="' . esc_url( __( 'https://wordpress.org', 'meraki' ) ) . '" rel="nofollow">WordPress</a>'
			)
			?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->