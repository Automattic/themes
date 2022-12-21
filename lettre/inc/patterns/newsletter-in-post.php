<?php
/**
 * In-post newsletter signup
 */
return array(
	'title'      => __( 'In-post newsletter signup', 'lettre' ),
	'categories' => array( 'featured', 'newsletter' ),
	'content'    => '<!-- wp:separator {"color":"tertiary","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-background has-tertiary-background-color has-tertiary-color is-style-wide"/>
<!-- /wp:separator -->

					<!-- wp:spacer {"height":"5px"} -->
					<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size">' . esc_html__( 'Subscribe for more posts like this', 'lettre' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:jetpack/subscriptions {"buttonBackgroundColor":"primary","textColor":"secondary","borderRadius":50,"borderColor":"primary","className":"is-style-compact"} -->
					<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline is-style-compact">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="false" custom_font_size="16px" custom_border_radius="50" custom_border_weight="1" custom_padding="15" custom_spacing="10" submit_button_classes="has-primary-border-color has-text-color has-secondary-color has-background has-primary-background-color" email_field_classes="has-primary-border-color" show_only_email_and_button="true"]</div>
					<!-- /wp:jetpack/subscriptions -->

					<!-- wp:spacer {"height":"5px"} -->
					<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->
					<!-- wp:separator {"color":"tertiary","className":"is-style-wide"} -->
					<hr class="wp-block-separator has-text-color has-background has-tertiary-background-color has-tertiary-color is-style-wide"/>
					<!-- /wp:separator -->',
);
