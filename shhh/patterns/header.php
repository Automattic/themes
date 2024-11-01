<?php
/**
 * Title: Default Header
 * Slug: shhh/header
 * Categories: header
 * Block Types: core/template-part/header
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"16vw"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:16vw">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group">
		<!-- wp:site-title /-->

		<!-- wp:paragraph {"textColor":"tertiary","className":"has-tertiary-color has-text-color has-small-font-size","fontSize":"small"} -->
		<p class="has-tertiary-color has-text-color has-small-font-size">•</p>
		<!-- /wp:paragraph -->

		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left","orientation":"horizontal","flexWrap":"wrap"}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70)">

		<!-- wp:site-tagline {"style":{"layout":{"selfStretch":"fixed","flexSize":"60%"}}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:spacer -->
	<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
