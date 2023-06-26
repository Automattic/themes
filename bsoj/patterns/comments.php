<?php
/**
 * Title: Comments
 * slug: bsoj/comments
 * inserter: no
 */

?>
<!-- wp:comments {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}},"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop" style="margin-top:var(--wp--preset--spacing--80)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"20%"} -->
			<div class="wp-block-column" style="flex-basis:20%"></div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"80%"} -->
			<div class="wp-block-column" style="flex-basis:80%">

					<!-- wp:comments-title {"level":3} /-->

					<!-- wp:comment-template -->
						<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}}} -->
						<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)">
							<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
							<div class="wp-block-group">
								<!-- wp:avatar {"size":40} /-->

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

					<!-- wp:comments-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"space-between"}} -->
						<!-- wp:comments-pagination-previous /-->

						<!-- wp:comments-pagination-next /-->
					<!-- /wp:comments-pagination -->

					<!-- wp:post-comments-form /-->

			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:comments -->
