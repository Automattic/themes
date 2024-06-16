<?php
/**
 * Title: Default header
 * Slug: kansei/header
 * Categories: featured, header
 * Block Types: core/template-part/header
 */

declare( strict_types = 1 );
?>

<!-- wp:columns -->
<div class="wp-block-columns">
	<!-- wp:column {"width":"40%"} -->
	<div class="wp-block-column" style="flex-basis:40%"></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"60%"} -->
	<div class="wp-block-column" style="flex-basis:60%">
		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column {"width":"16.7%"} -->
			<div class="wp-block-column" style="flex-basis:16.7%">
				<!-- wp:site-title /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"33.3%"} -->
			<div class="wp-block-column" style="flex-basis:33.3%">
				<!-- wp:site-tagline /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"50%"} -->
			<div class="wp-block-column" style="flex-basis:50%">
				<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal","flexWrap":"wrap"}} /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
