<?php
/**
 * Title: Cart
 * Slug: pomme/cart
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:heading {"level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide"><?php echo esc_html__( 'Cart', 'pomme' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:woocommerce/store-notices /-->

<!-- wp:woocommerce/cart -->
<div class="wp-block-woocommerce-cart alignwide is-loading">
	<!-- wp:woocommerce/filled-cart-block {"align":"wide"} -->
	<div class="wp-block-woocommerce-filled-cart-block alignwide">
		<!-- wp:woocommerce/cart-items-block -->
		<div class="wp-block-woocommerce-cart-items-block">
			<!-- wp:woocommerce/cart-line-items-block -->
			<div class="wp-block-woocommerce-cart-line-items-block"></div>
			<!-- /wp:woocommerce/cart-line-items-block -->

			<!-- wp:woocommerce/cart-cross-sells-block -->
			<div class="wp-block-woocommerce-cart-cross-sells-block">
				<!-- wp:heading {"fontSize":"large"} -->
				<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'You may be interested in…', 'pomme' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:woocommerce/cart-cross-sells-products-block -->
				<div class="wp-block-woocommerce-cart-cross-sells-products-block"></div>
				<!-- /wp:woocommerce/cart-cross-sells-products-block -->
			</div>
			<!-- /wp:woocommerce/cart-cross-sells-block -->
		</div>
		<!-- /wp:woocommerce/cart-items-block -->

		<!-- wp:woocommerce/cart-totals-block -->
		<div class="wp-block-woocommerce-cart-totals-block">
			<!-- wp:woocommerce/cart-order-summary-block -->
			<div class="wp-block-woocommerce-cart-order-summary-block">
				<!-- wp:woocommerce/cart-order-summary-heading-block -->
				<div class="wp-block-woocommerce-cart-order-summary-heading-block"></div>
				<!-- /wp:woocommerce/cart-order-summary-heading-block -->

				<!-- wp:woocommerce/cart-order-summary-coupon-form-block -->
				<div class="wp-block-woocommerce-cart-order-summary-coupon-form-block"></div>
				<!-- /wp:woocommerce/cart-order-summary-coupon-form-block -->

				<!-- wp:woocommerce/cart-order-summary-subtotal-block -->
				<div class="wp-block-woocommerce-cart-order-summary-subtotal-block"></div>
				<!-- /wp:woocommerce/cart-order-summary-subtotal-block -->

				<!-- wp:woocommerce/cart-order-summary-fee-block -->
				<div class="wp-block-woocommerce-cart-order-summary-fee-block"></div>
				<!-- /wp:woocommerce/cart-order-summary-fee-block -->

				<!-- wp:woocommerce/cart-order-summary-discount-block -->
				<div class="wp-block-woocommerce-cart-order-summary-discount-block"></div>
				<!-- /wp:woocommerce/cart-order-summary-discount-block -->

				<!-- wp:woocommerce/cart-order-summary-shipping-block -->
				<div class="wp-block-woocommerce-cart-order-summary-shipping-block"></div>
				<!-- /wp:woocommerce/cart-order-summary-shipping-block -->

				<!-- wp:woocommerce/cart-order-summary-taxes-block -->
				<div class="wp-block-woocommerce-cart-order-summary-taxes-block"></div>
				<!-- /wp:woocommerce/cart-order-summary-taxes-block -->
			</div>
			<!-- /wp:woocommerce/cart-order-summary-block -->

			<!-- wp:woocommerce/cart-express-payment-block -->
			<div class="wp-block-woocommerce-cart-express-payment-block"></div>
			<!-- /wp:woocommerce/cart-express-payment-block -->

			<!-- wp:woocommerce/proceed-to-checkout-block -->
			<div class="wp-block-woocommerce-proceed-to-checkout-block"></div>
			<!-- /wp:woocommerce/proceed-to-checkout-block -->

			<!-- wp:woocommerce/cart-accepted-payment-methods-block -->
			<div class="wp-block-woocommerce-cart-accepted-payment-methods-block"></div>
			<!-- /wp:woocommerce/cart-accepted-payment-methods-block -->
		</div>
		<!-- /wp:woocommerce/cart-totals-block -->
	</div>
	<!-- /wp:woocommerce/filled-cart-block -->

	<!-- wp:woocommerce/empty-cart-block {"align":"wide"} -->
	<div class="wp-block-woocommerce-empty-cart-block alignwide">
		<!-- wp:heading {"textAlign":"center","className":"with-empty-cart-icon wc-block-cart__empty-cart__title"} -->
		<h2 class="wp-block-heading has-text-align-center with-empty-cart-icon wc-block-cart__empty-cart__title"><?php echo esc_html__( 'Your cart is currently empty!', 'pomme' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><a href="#"><?php echo esc_html__( 'Browse store', 'pomme' ); ?></a></p>
		<!-- /wp:paragraph -->

		<!-- wp:separator {"className":"is-style-dots"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-dots"/>
		<!-- /wp:separator -->

		<!-- wp:heading {"textAlign":"center"} -->
		<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'New in store', 'pomme' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:woocommerce/product-new {"rows":1} /-->
	</div>
	<!-- /wp:woocommerce/empty-cart-block -->
</div>
<!-- /wp:woocommerce/cart -->
