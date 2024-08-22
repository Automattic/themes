<?php
/**
 * Title: Default header
 * Slug: bedrock/header
 * Categories: featured, header
 * Block Types: core/template-part/header
 */
declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"border":{"right":[],"bottom":{"color":"var:preset|color|contrast","width":"1px"},"left":[]},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-title {"level":0,"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

		<!-- wp:navigation {"align":"wide","layout":{"type":"flex"}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
