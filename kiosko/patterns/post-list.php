<?php
/**
 * Title: Post List
 * Slug: kiosko/post-list
 * Categories: posts
 */

declare( strict_types = 1 );
?>

<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-query">
	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:query-title {"type":"archive","showPrefix":false,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} /-->

			<!-- wp:term-description {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-template -->
			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:post-title {"isLink":true} /-->

				<!-- wp:post-featured-image {"isLink":true} /-->

				<!-- wp:post-excerpt /-->

				<!-- wp:template-part {"slug":"post-meta"} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
				<!-- wp:query-pagination-previous /-->

				<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->

		<!-- wp:query-no-results -->
			<!-- wp:pattern {"slug":"kiosko/no-results-content"} /-->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:query -->
