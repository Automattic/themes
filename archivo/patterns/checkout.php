<?php
/**
 * Title: checkout
 * Slug: archivo/checkout
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0px","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50)"><!-- wp:template-part {"slug":"checkout-header"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--50);flex-basis:75%"><!-- wp:heading {"level":1,"lock":{"remove":true,"move":false},"align":"wide","fontSize":"medium"} -->
<h1 class="wp-block-heading alignwide has-medium-font-size"><?php esc_html_e('Checkout', 'archivo');?></h1>
<!-- /wp:heading -->

<!-- wp:woocommerce/store-notices {"lock":{"remove":true,"move":false}} /-->

<!-- wp:woocommerce/checkout {"showReturnToCart":false,"lock":{"remove":true,"move":false}} -->
<div class="wp-block-woocommerce-checkout alignwide wc-block-checkout is-loading"><!-- wp:woocommerce/checkout-fields-block -->
<div class="wp-block-woocommerce-checkout-fields-block"><!-- wp:woocommerce/checkout-express-payment-block -->
<div class="wp-block-woocommerce-checkout-express-payment-block"></div>
<!-- /wp:woocommerce/checkout-express-payment-block -->

<!-- wp:woocommerce/checkout-contact-information-block -->
<div class="wp-block-woocommerce-checkout-contact-information-block"></div>
<!-- /wp:woocommerce/checkout-contact-information-block -->

<!-- wp:woocommerce/checkout-shipping-method-block -->
<div class="wp-block-woocommerce-checkout-shipping-method-block"></div>
<!-- /wp:woocommerce/checkout-shipping-method-block -->

<!-- wp:woocommerce/checkout-pickup-options-block -->
<div class="wp-block-woocommerce-checkout-pickup-options-block"></div>
<!-- /wp:woocommerce/checkout-pickup-options-block -->

<!-- wp:woocommerce/checkout-shipping-address-block -->
<div class="wp-block-woocommerce-checkout-shipping-address-block"></div>
<!-- /wp:woocommerce/checkout-shipping-address-block -->

<!-- wp:woocommerce/checkout-billing-address-block -->
<div class="wp-block-woocommerce-checkout-billing-address-block"></div>
<!-- /wp:woocommerce/checkout-billing-address-block -->

<!-- wp:woocommerce/checkout-shipping-methods-block -->
<div class="wp-block-woocommerce-checkout-shipping-methods-block"></div>
<!-- /wp:woocommerce/checkout-shipping-methods-block -->

<!-- wp:woocommerce/checkout-payment-block -->
<div class="wp-block-woocommerce-checkout-payment-block"></div>
<!-- /wp:woocommerce/checkout-payment-block -->

<!-- wp:woocommerce/checkout-additional-information-block -->
<div class="wp-block-woocommerce-checkout-additional-information-block"></div>
<!-- /wp:woocommerce/checkout-additional-information-block -->

<!-- wp:woocommerce/checkout-order-note-block -->
<div class="wp-block-woocommerce-checkout-order-note-block"></div>
<!-- /wp:woocommerce/checkout-order-note-block -->

<!-- wp:woocommerce/checkout-terms-block -->
<div class="wp-block-woocommerce-checkout-terms-block"></div>
<!-- /wp:woocommerce/checkout-terms-block -->

<!-- wp:woocommerce/checkout-actions-block -->
<div class="wp-block-woocommerce-checkout-actions-block"></div>
<!-- /wp:woocommerce/checkout-actions-block --></div>
<!-- /wp:woocommerce/checkout-fields-block -->

<!-- wp:woocommerce/checkout-totals-block -->
<div class="wp-block-woocommerce-checkout-totals-block"><!-- wp:woocommerce/checkout-order-summary-block -->
<div class="wp-block-woocommerce-checkout-order-summary-block"><!-- wp:woocommerce/checkout-order-summary-cart-items-block -->
<div class="wp-block-woocommerce-checkout-order-summary-cart-items-block"></div>
<!-- /wp:woocommerce/checkout-order-summary-cart-items-block -->

<!-- wp:woocommerce/checkout-order-summary-coupon-form-block -->
<div class="wp-block-woocommerce-checkout-order-summary-coupon-form-block"></div>
<!-- /wp:woocommerce/checkout-order-summary-coupon-form-block -->

<!-- wp:woocommerce/checkout-order-summary-totals-block -->
<div class="wp-block-woocommerce-checkout-order-summary-totals-block"><!-- wp:woocommerce/checkout-order-summary-subtotal-block -->
<div class="wp-block-woocommerce-checkout-order-summary-subtotal-block"></div>
<!-- /wp:woocommerce/checkout-order-summary-subtotal-block -->

<!-- wp:woocommerce/checkout-order-summary-fee-block -->
<div class="wp-block-woocommerce-checkout-order-summary-fee-block"></div>
<!-- /wp:woocommerce/checkout-order-summary-fee-block -->

<!-- wp:woocommerce/checkout-order-summary-discount-block -->
<div class="wp-block-woocommerce-checkout-order-summary-discount-block"></div>
<!-- /wp:woocommerce/checkout-order-summary-discount-block -->

<!-- wp:woocommerce/checkout-order-summary-shipping-block -->
<div class="wp-block-woocommerce-checkout-order-summary-shipping-block"></div>
<!-- /wp:woocommerce/checkout-order-summary-shipping-block -->

<!-- wp:woocommerce/checkout-order-summary-taxes-block -->
<div class="wp-block-woocommerce-checkout-order-summary-taxes-block"></div>
<!-- /wp:woocommerce/checkout-order-summary-taxes-block --></div>
<!-- /wp:woocommerce/checkout-order-summary-totals-block --></div>
<!-- /wp:woocommerce/checkout-order-summary-block --></div>
<!-- /wp:woocommerce/checkout-totals-block --></div>
<!-- /wp:woocommerce/checkout --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->