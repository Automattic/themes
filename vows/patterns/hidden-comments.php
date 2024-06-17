<?php
/**
 * Title: Comments
 * Slug: vows/hidden-comments
 * Categories: hidden
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group">
	<!-- wp:comments {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"className":"wp-block-comments-query-loop"} -->
	<div class="wp-block-comments wp-block-comments-query-loop" style="margin-top:var(--wp--preset--spacing--70)">
		<!-- wp:comments-title {"level":3} /-->

		<!-- wp:comment-template -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:avatar {"size":48,"style":{"border":{"radius":"50%"}}} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}}} -->
					<div class="wp-block-group">
						<!-- wp:comment-author-name /-->

						<!-- wp:comment-date /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:comment-content /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex"}} -->
				<div class="wp-block-group">
					<!-- wp:comment-reply-link /-->

					<!-- wp:comment-edit-link /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:comment-template -->

		<!-- wp:comments-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:comments-pagination-previous /-->

			<!-- wp:comments-pagination-next /-->
		<!-- /wp:comments-pagination -->

		<!-- wp:post-comments-form {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} /-->
	</div>
	<!-- /wp:comments -->
</div>
<!-- /wp:group -->
