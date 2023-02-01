<?php
/**
 * Title: Post List
 * Slug: bitacora/post-list
 * Categories: featured
 */
?>

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}}} -->
		<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--80)">
			<!-- wp:post-date /-->

			<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0.5rem"}}}} /-->

			<!-- wp:post-featured-image {"isLink":true} /-->

			<!-- wp:post-excerpt {"moreText":"Continue reading","showMoreOnNewLine":false} /-->

			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"layout":{"type":"flex"}} -->
				<div class="wp-block-group">
					<!-- wp:post-terms {"term":"category"} /-->

					<!-- wp:post-terms {"term":"post_tag"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
