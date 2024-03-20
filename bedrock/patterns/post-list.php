<?php
/**
 * Title: Post List
 * Slug: bedrock/post-list
 * Inserter: no
 */
declare( strict_types = 1 );
?>

<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default","columnCount":3}} -->
		<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"0"}}}} -->
		<div class="wp-block-columns" style="margin-bottom:0">
			<!-- wp:column {"width":"23.8%"} -->
			<div class="wp-block-column" style="flex-basis:23.8%">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"","height":"","style":{"layout":{"selfStretch":"fixed","flexSize":"23.8%"}}} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"76.2%"} -->
			<div class="wp-block-column" style="flex-basis:76.2%">
				<!-- wp:post-title {"isLink":true} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":30,"fontSize":"small"} /-->

					<!-- wp:template-part {"slug":"post-meta"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->

