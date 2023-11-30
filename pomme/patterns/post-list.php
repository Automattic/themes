<?php
/**
 * Title: Post List
 * Slug: pomme/post-list
 * Categories: posts
 */

declare( strict_types = 1 );
?>

<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"3rem"}}}} -->
		<div class="wp-block-columns" style="padding-bottom:3rem">
			<!-- wp:column {"width":"34.0137%"} -->
			<div class="wp-block-column" style="flex-basis:34.0137%">
				<!-- wp:post-title {"isLink":true} /-->

				<!-- wp:post-excerpt /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex"}} -->
				<div class="wp-block-group">
					<!-- wp:post-date {"isLink":false} /-->

					<!-- wp:post-author {"showAvatar":false,"isLink":true} /-->

					<!-- wp:post-terms {"term":"category"} /-->

					<!-- wp:post-terms {"term":"post_tag"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"65.9863%"} -->
			<div class="wp-block-column" style="flex-basis:65.9863%">
				<!-- wp:post-featured-image {"isLink":true} /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	<!-- /wp:post-template -->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"space-between","arrow":"chevron"}} -->
			<!-- wp:query-pagination-previous /-->

			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->
