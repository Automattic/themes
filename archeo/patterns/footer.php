<?php
/**
 * Title: Default footer
 * Slug: archeo/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"layout":{"inherit":"true"}} -->
<div class="wp-block-group">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"},"style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--medium)","top":"var(--wp--custom--spacing--medium)"}}}} -->
	<div class="wp-block-group alignwide" style="padding-top: var(--wp--custom--spacing--medium); padding-bottom: var(--wp--custom--spacing--medium);">
		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"},"overlayMenu":"never","className":"site-footer","style":{"typography":{"fontStyle":"normal"},"spacing":{"blockGap":{"top":"0.5em","left":"2.5em","bottom":"0.5rem","right":"2.5em"}}},"fontSize":"small"} /-->
		
		<!-- wp:paragraph {"align":"left","fontSize":"small"} -->
		<p class="has-text-align-left has-small-font-size">
		<?php
		printf(
			/* Translators: WordPress link. */
			esc_html__( 'Proudly powered by %s', 'archeo' ),
			'<a href="' . esc_url( __( 'https://wordpress.org', 'archeo' ) ) . '" rel="nofollow">WordPress</a>'
		)
		?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
