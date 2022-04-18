<?php
/**
 * Title: Subscription form
 * Slug: remote/subscribe
 * Categories: featured, text
 */
?>

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Follow this blog', 'remote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Sign up to have each new post delivered to your inbox.', 'remote' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/subscriptions {"buttonBackgroundColor":"primary","textColor":"background","borderRadius":6,"borderColor":"primary","className":"is-style-split","style":{"spacing":{"margin":{"top":"1.45em"}}}} -->
<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline is-style-split" style="margin-top:1.45em">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="false" custom_font_size="16px" custom_border_radius="6" custom_border_weight="1" custom_padding="15" custom_spacing="10" submit_button_classes="has-primary-border-color has-text-color has-background-color has-background has-primary-background-color" email_field_classes="has-primary-border-color" show_only_email_and_button="true" success_message="<?php echo esc_html__( 'Success! An email was just sent to confirm your subscription. Please find the email now and click \'Confirm Follow\' to start subscribing.', 'remote' ); ?>"]</div>
<!-- /wp:jetpack/subscriptions -->
