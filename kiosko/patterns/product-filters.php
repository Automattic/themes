<?php
/**
 * Title: Product Filters and Search
 * Slug: kiosko/product-filters
 * Categories: woocommerce
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","buttonText":"Search","buttonUseIcon":true,"query":{"post_type":"product"},"fontSize":"x-small"} /-->

	<!-- wp:spacer {"height":"28px"} -->
	<div style="height:28px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:woocommerce/filter-wrapper {"filterType":"active-filters","heading":"Active filters"} -->
	<div class="wp-block-woocommerce-filter-wrapper">
		<!-- wp:woocommerce/active-filters {"heading":"","lock":{"remove":true}} -->
		<div class="wp-block-woocommerce-active-filters is-loading" data-display-style="list" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-active-filters__placeholder"></span></div>
		<!-- /wp:woocommerce/active-filters -->
	</div>
	<!-- /wp:woocommerce/filter-wrapper -->

	<!-- wp:woocommerce/filter-wrapper {"filterType":"price-filter","heading":"Filter by price"} -->
	<div class="wp-block-woocommerce-filter-wrapper">
		<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"large"} -->
		<h3 class="wp-block-heading has-large-font-size" style="margin-top:0px"><?php echo esc_html__( 'Price', 'kiosko' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/price-filter {"heading":"","lock":{"remove":true}} -->
		<div class="wp-block-woocommerce-price-filter is-loading" data-showinputfields="true" data-showfilterbutton="false" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-categories__placeholder"></span></div>
		<!-- /wp:woocommerce/price-filter -->
	</div>
	<!-- /wp:woocommerce/filter-wrapper -->

	<!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by attribute"} -->
	<div class="wp-block-woocommerce-filter-wrapper">
		<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"large"} -->
		<h3 class="wp-block-heading has-large-font-size" style="margin-top:0px"><?php echo esc_html__( 'Color', 'kiosko' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/attribute-filter {"attributeId":1,"heading":"","lock":{"remove":true}} -->
		<div class="wp-block-woocommerce-attribute-filter is-loading" data-attribute-id="1" data-show-counts="true" data-query-type="or" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-attribute-filter__placeholder"></span></div>
		<!-- /wp:woocommerce/attribute-filter -->
	</div>
	<!-- /wp:woocommerce/filter-wrapper -->

	<!-- wp:woocommerce/filter-wrapper {"filterType":"attribute-filter","heading":"Filter by attribute"} -->
	<div class="wp-block-woocommerce-filter-wrapper">
		<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"large"} -->
		<h3 class="wp-block-heading has-large-font-size" style="margin-top:0px"><?php echo esc_html__( 'Size', 'kiosko' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/attribute-filter {"attributeId":2,"heading":"","lock":{"remove":true}} -->
		<div class="wp-block-woocommerce-attribute-filter is-loading" data-attribute-id="2" data-show-counts="true" data-query-type="or" data-heading="" data-heading-level="3"><span aria-hidden="true" class="wc-block-product-attribute-filter__placeholder"></span></div>
		<!-- /wp:woocommerce/attribute-filter -->
	</div>
	<!-- /wp:woocommerce/filter-wrapper -->
</div>
<!-- /wp:group -->
