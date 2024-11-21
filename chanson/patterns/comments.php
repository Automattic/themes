<?php
/**
 * Title: Comments
 * slug: chanson/comments
 * inserter: no
 */
declare( strict_types = 1 );
?>

<!-- wp:comments {"className":"wp-block-comments-query-loop "} -->
<div class="wp-block-comments wp-block-comments-query-loop">
	<!-- wp:spacer {"height":"70px"} -->
	<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:comments-title {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} /-->

	<!-- wp:comment-template -->
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:avatar {"size":24,"style":{"border":{"radius":"999px"}}} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:comment-author-name /-->

					<!-- wp:comment-date {"format":"M j, Y"} /-->

					<!-- wp:comment-edit-link /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"0.5rem"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group" style="margin-top:0.5rem">
				<!-- wp:comment-content /-->

				<!-- wp:comment-reply-link /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:comment-template -->

	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:comments-pagination -->
		<!-- wp:comments-pagination-previous /-->

		<!-- wp:comments-pagination-numbers /-->

		<!-- wp:comments-pagination-next /-->
	<!-- /wp:comments-pagination -->

	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:post-comments-form /-->
</div>
<!-- /wp:comments -->
