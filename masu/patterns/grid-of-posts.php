<?php
/**
 * Title: Grid of blog posts
 * Slug: masu/grid-of-posts
 * Categories: featured, query, blog
 */
?>

<!-- wp:query {"query":{"perPage":"8","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":4},"align":"wide"} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template -->
		<!-- wp:group {"style":{"visualizers":{"padding":{"top":true,"right":true,"bottom":true,"left":true}}},"layout":{"inherit":false}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:post-featured-image {"isLink":true} /-->

				<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.6","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"fontSize":"small"} /-->

				<!-- wp:spacer {"height":"1rem","style":{"spacing":{"margin":{"top":"0.625rem"}}}} -->
				<div style="margin-top:0.625rem;height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->

