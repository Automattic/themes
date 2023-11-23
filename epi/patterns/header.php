<?php
/**
 * Title: Default header
 * Slug: epi/header
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:site-title {"level":0} /-->

	<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
	<div class="wp-block-group">
		<!-- wp:navigation {"overlayBackgroundColor":"background","overlayTextColor":"foreground","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"},"style":{"spacing":{"blockGap":"0"}}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%">
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Born from a passion for the transformative power of clothing and the stories woven into the fabric of every garment, this is more than just a blog—it is a style odyssey.', 'epi' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%"></div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
