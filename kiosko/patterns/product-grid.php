<?php
/**
 * Title: Product Grid
 * Slug: kiosko/product-grid
 * Categories: woocommerce
 */

declare( strict_types = 1 );
?>

<!-- wp:query {"query":{"perPage":"9","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceStockStatus":["instock","outofstock"]},"displayLayout":{"type":"flex","columns":3},"namespace":"woocommerce/product-query"} -->
<div class="wp-block-query">
	<!-- wp:post-template {"fontSize":"small"} -->
		<!-- wp:woocommerce/product-image {"isDescendentOfQueryLoop":true} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40)">
			<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"fontSize":"small"} /-->

			<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->

	<!-- wp:spacer {"height":"1px"} -->
	<div style="height:1px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
