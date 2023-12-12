<?php
/**
 * Title: Comments
 * Slug: shhh/comments
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"600px"}} -->
<div class="wp-block-group">
	<!-- wp:comments {"className":"wp-block-comments-query-loop "} -->
	<div class="wp-block-comments wp-block-comments-query-loop">
		<!-- wp:comments-title {"level":3} /-->

		<!-- wp:comment-template -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"},"blockGap":"0"}}} -->
			<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group">
					<!-- wp:avatar {"size":38,"style":{"spacing":{"margin":{"top":"0"}},"border":{"radius":"64px"}}} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}}} -->
					<div class="wp-block-group">
						<!-- wp:comment-author-name /-->

						<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"0.5em"}},"layout":{"type":"flex"}} -->
						<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
							<!-- wp:comment-date {"format":"M j, Y g:i A"} /-->

							<!-- wp:comment-edit-link /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:comment-content /-->

				<!-- wp:comment-reply-link /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:comment-template -->

		<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:comments-pagination-previous /-->

			<!-- wp:comments-pagination-next /-->
		<!-- /wp:comments-pagination -->

		<!-- wp:post-comments-form {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}},"fontSize":"small"} /-->
	</div>
	<!-- /wp:comments -->
</div>
<!-- /wp:group -->
