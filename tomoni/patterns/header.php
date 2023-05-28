<?php
/**
 * Title: Header
 * Slug: tomoni/header
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:site-title /-->

			<!-- wp:site-tagline /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
			<p style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px"><strong><?php echo esc_html__( 'The Phoenix', 'tomoni' ); ?></strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( '142 Pemberton Lane, London, SE14 9QR', 'tomoni' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
