<?php
/**
 * 404 content.
 */
return array(
	'title'    => __( 'Subscription form', 'lettre' ),
	'inserter' => false,
	'content'  => '<!-- wp:jetpack/subscriptions {"buttonBackgroundColor":"primary","textColor":"secondary","borderRadius":50,"borderColor":"primary","className":"is-style-compact"} -->
					<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline is-style-compact">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="false" custom_font_size="16px" custom_border_radius="50" custom_border_weight="1" custom_padding="15" custom_spacing="10" submit_button_classes="has-primary-border-color has-text-color has-secondary-color has-background has-primary-background-color" email_field_classes="has-primary-border-color" show_only_email_and_button="true"]</div>
					<!-- /wp:jetpack/subscriptions -->',
);
