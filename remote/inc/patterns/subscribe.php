<?php
/**
 * Subscription form
 */
return array(
	'title'      => __( 'Subscription form', 'remote' ),
	'categories' => array( 'text', 'featured' ),
	'content'    => '<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
	<p class="has-small-font-size" style="text-transform:uppercase">' . esc_html__( 'Follow this blog', 'remote' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p>' . esc_html__( 'Sign up to have each new post delivered to your inbox.', 'remote' ) . '</p>
	<!-- /wp:paragraph -->

	<!-- wp:jetpack/subscriptions {"buttonWidth":"25%","buttonBackgroundColor":"primary","textColor":"background","fontSize":"20px","customFontSize":"20px","borderRadius":6,"borderColor":"foreground","padding":10,"spacing":10,"className":"is-style-split"} -->
	<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline is-style-split">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="false" custom_font_size="20px" custom_border_radius="6" custom_border_weight="1" custom_button_width="25%" custom_padding="10" custom_spacing="10" submit_button_classes="has-20-px-font-size has-foreground-border-color has-text-color has-background-color has-background has-primary-background-color" email_field_classes="has-20-px-font-size has-foreground-border-color" show_only_email_and_button="true" success_message="' . esc_html__( 'Success! An email was just sent to confirm your subscription. Please find the email now and click \'Confirm Follow\' to start subscribing.', 'remote' ) . '"]</div>
	<!-- /wp:jetpack/subscriptions -->',
);
