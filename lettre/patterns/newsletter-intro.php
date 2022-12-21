<?php
/**
 * Newsletter intro
 */
return array(
	'title'      => __( 'Newsletter intro', 'lettre' ),
	'categories' => array( 'featured', 'newsletter' ),
	'content'    => '<!-- wp:cover {"overlayColor":"secondary","minHeight":90,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
					<div class="wp-block-cover is-light alignfull" style="min-height:90vh"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"contentSize":"360px"}} -->
					<div class="wp-block-group"><!-- wp:site-logo {"width":120,"shouldSyncIcon":true,"align":"center","className":"is-style-rounded"} /-->

					<!-- wp:site-title {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}},"fontSize":"x-large"} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"40px"}}} -->
					<div class="wp-block-group"><!-- wp:site-tagline {"textAlign":"center","fontSize":"small"} /-->

					<!-- wp:jetpack/subscriptions {"buttonBackgroundColor":"primary","textColor":"secondary","borderRadius":50,"borderColor":"primary","className":"is-style-compact"} -->
					<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline is-style-compact">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="false" custom_font_size="16px" custom_border_radius="50" custom_border_weight="1" custom_padding="15" custom_spacing="10" submit_button_classes="has-primary-border-color has-text-color has-secondary-color has-background has-primary-background-color" email_field_classes="has-primary-border-color" show_only_email_and_button="true"]</div>
					<!-- /wp:jetpack/subscriptions --></div>
					<!-- /wp:group -->

					<!-- wp:spacer -->
					<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size"><a href="#posts">' . esc_html__( 'Read all posts', 'lettre' ) . ' ↓</a></p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:group --></div></div>
					<!-- /wp:cover -->',
);
