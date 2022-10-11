<?php
/**
 * Title: Comments
 * Slug: masu/comments
 * Inserter: no
 */
?>

<!-- wp:comments {"fontSize":"small"} -->
<div class="wp-block-comments has-small-font-size">
	<!-- wp:comments-title {"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"xx-large"} /-->

	<!-- wp:comment-template -->
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"1rem","left":"1rem"}}}} -->
		<div class="wp-block-columns">
			<!-- wp:column {"width":"40px"} -->
			<div class="wp-block-column" style="flex-basis:40px">
				<!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:comment-author-name {"fontSize":"small"} /-->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
				<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
					<!-- wp:comment-date {"fontSize":"small"} /-->

					<!-- wp:comment-edit-link {"fontSize":"small"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:comment-content /-->

				<!-- wp:comment-reply-link {"fontSize":"small"} /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	<!-- /wp:comment-template -->

	<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:comments-pagination-previous /-->

		<!-- wp:comments-pagination-numbers /-->

		<!-- wp:comments-pagination-next /-->
	<!-- /wp:comments-pagination -->

	<!-- wp:post-comments-form /-->
</div>
<!-- /wp:comments -->
