<?php
/**
 * Title: Post List
 * Slug: aldente/post-list
 * Categories: featured
 */
?>
<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:query {"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"displayLayout":{"type":"flex","columns":4},"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"style":{"typography":{"fontSize":"1.4rem"}}} -->
			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}}},"layout":{"inherit":false}} -->
			<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->

				<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"0px"}}},"fontSize":"x-small"} /-->

				<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"large"} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
				<!-- wp:query-pagination-previous /-->

				<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
