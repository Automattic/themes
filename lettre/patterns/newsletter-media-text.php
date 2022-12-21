<?php
/**
 * Title: Newsletter signup with media on the left
 * Slug: lettre/newsletter-media-text
 * Categories: featured, newsletter
 */
?>

<!-- wp:media-text {"align":"full","mediaType":"image","mediaWidth":42,"verticalAlignment":"center","style":{"color":{"background":"#ffe030"}}} -->
<div class="wp-block-media-text alignfull is-stacked-on-mobile is-vertically-aligned-center has-background" style="background-color:#ffe030;grid-template-columns:42% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/flowers-vase.jpg" alt="<?php echo esc_attr__( 'Illustration of flowers in a vase.', 'lettre' ); ?>"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"textColor":"black","fontSize":"large"} -->
<p class="has-black-color has-text-color has-large-font-size"><?php echo esc_html__( 'Subscribe to our newsletter to get the latest stories in your inbox.', 'lettre' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:jetpack/subscriptions {"buttonOnNewLine":true,"buttonWidth":"100%","submitButtonText":"\u003cstrong\u003eSubscribe\u003c/strong\u003e","buttonBackgroundColor":"black","customTextColor":"#ffe030","fontSize":"1.75rem","customFontSize":"1.75rem","borderRadius":50,"borderWeight":1,"borderColor":"black","padding":24,"spacing":15,"className":"is-style-split"} -->
<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline wp-block-jetpack-subscriptions__use-newline is-style-split">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="true" submit_button_text="<strong>Subscribe</strong>" custom_text_button_color="#ffe030" custom_font_size="1.75rem" custom_border_radius="50" custom_border_weight="1" custom_button_width="100%" custom_padding="24" custom_spacing="15" submit_button_classes="has-1-75-rem-font-size has-black-border-color has-background has-black-background-color" email_field_classes="has-1-75-rem-font-size has-black-border-color" show_only_email_and_button="true"]</div>
<!-- /wp:jetpack/subscriptions --></div></div>
<!-- /wp:media-text -->
