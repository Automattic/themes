<?php
/**
 * Title: Simple list of posts
 * Slug: archeo/simple-list-of-posts
 * Categories: featured, query
 * Block Types: query
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--medium)","bottom":"var(--wp--custom--spacing--medium)"},"margin":{"top":"0px"}}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--custom--spacing--medium);padding-bottom:var(--wp--custom--spacing--medium);margin-top:0px">
	<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":3,"parents":[]}} -->
	<div class="wp-block-query">
		<!-- wp:post-template -->
		<!-- wp:group {"className":"simple-list-of-posts","layout":{"type":"flex","allowOrientation":false}} -->
		<div class="wp-block-group simple-list-of-posts">
			<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"100"},"spacing":{"margin":{"top":"1.25rem"}}},"fontSize":"huge"} /-->

			<!-- wp:post-author {"showAvatar":false,"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"100"}},"fontSize":"medium"} /-->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:spacer {"height":"40px"} -->
		<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
