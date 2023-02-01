<?php
/**
 * Title: Default header
 * Slug: bitacora/header
 * Categories: featured, header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"0"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:0">
		<!-- wp:navigation {"overlayBackgroundColor":"background","overlayTextColor":"foreground","align":"wide","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"}}}} /-->

		<!-- wp:spacer {"height":"6vw"} -->
		<div style="height:6vw" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:site-logo {"width":96,"shouldSyncIcon":false,"align":"center"} /-->

		<!-- wp:columns {"verticalAlignment":"center"} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
				<!-- wp:site-title {"textAlign":"center","style":{"spacing":{"padding":{"left":"0.5em"}}}} /-->

				<!-- wp:site-tagline {"textAlign":"center","style":{"spacing":{"margin":{"top":"0.63rem"}}}} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%">
				<!-- wp:separator {"className":"is-style-wide"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
				<!-- /wp:separator -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:spacer {"height":"6vw"} -->
		<div style="height:6vw" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
