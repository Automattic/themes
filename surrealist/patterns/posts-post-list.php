<?php
/**
 * Title: Post List
 * Slug: surrealist/posts-post-list
 * Categories: posts, featured
 * Viewport width: 1600
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
				<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"0"}}}} -->
				<div class="wp-block-columns">
					<!-- wp:column {"layout":{"type":"default"}} -->
					<div class="wp-block-column">
						<!-- wp:post-featured-image {"isLink":true} /-->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"verticalAlignment":"bottom","layout":{"type":"default"}} -->
					<div class="wp-block-column is-vertically-aligned-bottom">
						<!-- wp:group {"style":{"spacing":{"padding":{"right":"5vw","left":"5vw"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
						<div class="wp-block-group" style="padding-right:5vw;padding-left:5vw">
							<!-- wp:post-title {"isLink":true} /-->

							<!-- wp:post-terms {"term":"category"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--60)">
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<!-- wp:query-pagination-previous /-->

					<!-- wp:query-pagination-numbers /-->

					<!-- wp:query-pagination-next /-->
				<!-- /wp:query-pagination -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
