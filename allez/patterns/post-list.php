<?php
/**
 * Title: Post List
 * Slug: allez/post-list
 * Categories: featured, posts
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:query {"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"enhancedPagination":true,"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default","columnCount":3}} -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"71.5%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
				<div class="wp-block-column" style="flex-basis:71.5%">
					<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"0px"}}}} /-->

					<!-- wp:post-title {"level":3,"isLink":true} /-->

					<!-- wp:post-excerpt {"moreText":"Continue reading","showMoreOnNewLine":false,"excerptLength":40} /--></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"28.5%"} -->
				<div class="wp-block-column" style="flex-basis:28.5%">
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1"} /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		<!-- /wp:post-template -->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"default"},"fontSize":"x-large"} -->
		<div class="wp-block-group has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--60)">
			<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"layout":{"type":"flex","justifyContent":"center"}} -->
				<!-- wp:query-pagination-previous /-->

				<!-- wp:query-pagination-numbers /-->

				<!-- wp:query-pagination-next /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
