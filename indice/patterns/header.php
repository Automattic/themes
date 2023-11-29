<?php
/**
 * Title: Header
 * Slug: indice/header
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group">
	<!-- wp:site-title /-->

	<!-- wp:spacer {"height":"36px"} -->
	<div style="height:36px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
	<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap"}} /-->

	<!-- wp:spacer {"height":"42px"} -->
	<div style="height:42px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:site-tagline /-->

	<!-- wp:paragraph -->
	<p><a href="#" target="_blank" rel="noreferrer noopener"><?php echo esc_html__( 'Tumblr', 'indice' ); ?> &nearr;</a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
