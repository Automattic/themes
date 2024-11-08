<?php
/**
 * Title: cart
 * Slug: archivo/cart
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"0px","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"header","tagName":"header"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%","style":{"spacing":{"padding":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--50);flex-basis:75%"><!-- wp:heading {"level":1,"align":"wide","fontSize":"medium"} -->
<h1 class="wp-block-heading alignwide has-medium-font-size"><?php esc_html_e('Cart', 'archivo');?></h1>
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
<h2 class="wp-block-heading has-large-font-size"><?php esc_html_e('You may be interested in…', 'archivo');?></h2>
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
<h2 class="wp-block-heading has-text-align-center with-empty-cart-icon wc-block-cart__empty-cart__title"><?php esc_html_e('Your cart is currently empty!', 'archivo');?></h2>
<!-- /wp:heading -->
		
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sBrowse store%2$s', 'archivo' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->
		
<!-- wp:separator {"className":"is-style-dots"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-dots"/>
<!-- /wp:separator -->
		
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('New in store', 'archivo');?></h2>
<!-- /wp:heading -->
		
<!-- wp:woocommerce/product-new {"rows":1} /-->
	</div>
<!-- /wp:woocommerce/empty-cart-block -->
</div>
<!-- /wp:woocommerce/cart --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"wide"} /--></div>
<!-- /wp:group -->