<?php
/**
 * Title: Post List
 * Slug: vows/posts-post-list
 * Categories: posts, featured
 * Viewport width: 1600
 */

declare( strict_types = 1 );
?>

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:post-featured-image {"isLink":true} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group">
				<!-- wp:post-date /-->

				<!-- wp:post-title {"isLink":true} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-excerpt {"moreText":"Read more \u0026rarr;"} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70)">
		<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"left","orientation":"vertical"}} -->
			<!-- wp:query-pagination-previous /-->

			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->
