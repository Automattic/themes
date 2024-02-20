<?php
/**
 * Title: Post List
 * Slug: lowfi/hidden-post-list
 * Inserter: no
 */

declare( strict_types = 1 );
?>


<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group">
				<!-- wp:post-date /-->

				<!-- wp:post-title {"isLink":true} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-excerpt {"moreText":"Read more","showMoreOnNewLine":false} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->
		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'lowfi' ); ?></p>
		<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
