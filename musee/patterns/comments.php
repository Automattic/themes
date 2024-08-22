<?php
/**
 * Title: Comments
 * slug: musee/comments
 * inserter: no
 */

?>

<!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop">
	<!-- wp:comments-title {"level":3} /-->

	<!-- wp:comment-template -->
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"0.5em"}}} -->
			<div class="wp-block-group">
				<!-- wp:avatar {"size":40,"style":{"spacing":{"margin":{"top":"0.5em"}}}} /-->

				<!-- wp:group -->
				<div class="wp-block-group">
					<!-- wp:comment-author-name /-->

					<!-- wp:group {"layout":{"type":"flex"},"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"0.5em"}}} -->
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

	<!-- wp:comments-pagination -->
		<!-- wp:comments-pagination-previous /-->
		<!-- wp:comments-pagination-numbers /-->
		<!-- wp:comments-pagination-next /-->
	<!-- /wp:comments-pagination -->

	<!-- wp:post-comments-form /-->
</div>
<!-- /wp:comments -->
