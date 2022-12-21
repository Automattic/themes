<?php
/**
 * Large newsletter signup
 */
return array(
	'title'      => __( 'Large newsletter signup', 'lettre' ),
	'categories' => array( 'featured', 'newsletter' ),
	'content'    => '<!-- wp:jetpack/subscriptions {"buttonBackgroundColor":"foreground","textColor":"secondary","fontSize":"1.125rem","customFontSize":"1.125rem","borderRadius":0,"borderWeight":10,"borderColor":"foreground","className":"is-style-compact"} -->
					<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline is-style-compact">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="false" custom_font_size="1.125rem" custom_border_radius="0" custom_border_weight="10" custom_padding="15" custom_spacing="10" submit_button_classes="no-border-radius has-1-125-rem-font-size has-foreground-border-color has-text-color has-secondary-color has-background has-foreground-background-color" email_field_classes="no-border-radius has-1-125-rem-font-size has-foreground-border-color" show_only_email_and_button="true"]</div>
					<!-- /wp:jetpack/subscriptions -->',
);
