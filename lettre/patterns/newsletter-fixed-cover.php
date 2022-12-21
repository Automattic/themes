<?php
/**
 * Title: Newsletter signup with fixed background image
 * Slug: lettre/newsletter-fixed-cover
 * Categories: featured, newsletter
 */
?>

<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/book.jpg","hasParallax":true,"dimRatio":30,"overlayColor":"secondary","minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"120px","right":"120px","bottom":"120px","left":"120px"}}}} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="padding-top:120px;padding-right:120px;padding-bottom:120px;padding-left:120px;background-image:url(' . esc_url( get_template_directory_uri() ) . '/assets/images/book.jpg);min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"30px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"textColor":"secondary","fontSize":"medium"} -->
<div class="wp-block-group has-secondary-color has-text-color has-medium-font-size" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"color":{"duotone":["#333","#CCC"],"text":"#df0522"},"typography":{"lineHeight":1}},"fontSize":"xx-large"} -->
<p class="has-text-align-center has-text-color has-xx-large-font-size" style="color:#df0522;line-height:1"><?php echo esc_html__( 'You don’t wanna miss it.', 'lettre' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#f30800"}}} -->
<p class="has-text-align-center has-text-color" style="color:#f30800"><?php echo esc_html__( 'Get the latest articles in your inbox.', 'lettre' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"90px"} -->
<div style="height:90px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"inherit":false,"wideSize":"480px"}} -->
<div class="wp-block-group"><!-- wp:jetpack/subscriptions {"customButtonBackgroundColor":"#df0522","textColor":"secondary","fontSize":"1.3rem","customFontSize":"1.3rem","borderRadius":50,"borderWeight":5,"customBorderColor":"#df0522","padding":18,"spacing":15,"className":"is-style-compact"} -->
<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline is-style-compact">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="false" custom_background_button_color="#df0522" custom_font_size="1.3rem" custom_border_radius="50" custom_border_weight="5" custom_border_color="#df0522" custom_padding="18" custom_spacing="15" submit_button_classes="has-1-3-rem-font-size has-text-color has-secondary-color" email_field_classes="has-1-3-rem-font-size" show_only_email_and_button="true"]</div>
<!-- /wp:jetpack/subscriptions --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
