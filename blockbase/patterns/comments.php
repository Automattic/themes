<?php
/**
 * Title: Comments
 * slug: blockbase/comments
 * inserter: no
 */

?>
<!-- wp:comments-query-loop -->
<div class="wp-block-comments-query-loop">
	<!-- wp:comments-title {"level":3} /-->

	<!-- wp:comment-template -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"40px"} -->
		<div class="wp-block-column" style="flex-basis:40px"></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"},"spacing":{"margin":{"top":"10px"}}}} /-->

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
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- /wp:comment-template -->

	<!-- wp:comments-pagination -->
	<!-- wp:comments-pagination-previous /-->

	<!-- wp:comments-pagination-numbers /-->

	<!-- wp:comments-pagination-next /-->
	<!-- /wp:comments-pagination -->

	<!-- wp:post-comments-form /-->
</div>
<!-- /wp:comments-query-loop --> 
