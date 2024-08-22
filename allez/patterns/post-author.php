<?php
/**
 * Title: Post Author
 * Slug: allez/post-author
 * Categories: featured, text
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|secondary","width":"1px"},"right":{},"bottom":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--secondary);border-top-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:avatar {"size":56} /-->

	<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"fontSize":"small","fontFamily":"source-sans-3"} -->
		<p class="has-source-sans-3-font-family has-small-font-size">Published by</p>
		<!-- /wp:paragraph -->

		<!-- wp:post-author-name {"isLink":true} /-->

		<!-- wp:post-author-biography /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

