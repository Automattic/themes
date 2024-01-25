<?php
/**
 * Title: Comments
 * Slug: freddie/comments
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop">
	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80)">
		<!-- wp:comments-title {"level":3} /-->

		<!-- wp:comment-template {"style":{"spacing":{"padding":{"left":"0px"}}}} -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--60)">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:avatar {"size":40,"style":{"border":{"radius":"50%"}}} /-->

					<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:comment-author-name /-->

						<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"0.5em"}},"layout":{"type":"flex"}} -->
						<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
							<!-- wp:comment-date {"format":"F j, Y \\a\\t g:i a"} /-->

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

		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:comments-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
				<!-- wp:comments-pagination-previous /-->

				<!-- wp:comments-pagination-next /-->
			<!-- /wp:comments-pagination -->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-comments-form {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:comments -->
