<?php
/**
 * Title: Post List
 * Slug: storia/post-list
 * Categories: featured
 */
?>

<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:group -->
		<div class="wp-block-group">
			<!-- wp:post-featured-image {"isLink":true} /-->

			<!-- wp:post-title {"isLink":true} /-->

			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"layout":{"type":"flex"}} -->
				<div class="wp-block-group">
					<!-- wp:post-author {"showAvatar":false} /-->

					<!-- wp:post-date /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-excerpt /-->

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

			<!-- wp:spacer {"height":"3rem"} -->
			<div style="height:3rem" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px">
		<!-- wp:separator -->
		<hr class="wp-block-separator has-alpha-channel-opacity"/>
		<!-- /wp:separator -->

		<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->
