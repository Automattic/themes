<?php
/**
 * Two-column newsletter signup
 */
return array(
	'title'      => __( 'Two-column newsletter signup', 'lettre' ),
	'categories' => array( 'featured', 'newsletter' ),
	'content'    => '<!-- wp:cover {"customOverlayColor":"#ff513d","contentPosition":"center left","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}}} -->
					<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-center-left" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#ff513d"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"align":"full"} -->
					<div class="wp-block-columns alignfull"><!-- wp:column {"width":"60%"} -->
					<div class="wp-block-column" style="flex-basis:60%"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}},"textColor":"black","fontSize":"x-large"} -->
					<p class="has-black-color has-text-color has-x-large-font-size" style="text-transform:uppercase">' . esc_html__( 'Don’t miss an update', 'lettre' ) . '</p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"40%"} -->
					<div class="wp-block-column" style="flex-basis:40%"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"x-large"} -->
					<p class="has-x-large-font-size" style="line-height:1.2">' . esc_html__( 'Enter your email and hit the subscribe button to receive our latest stories in your inbox.', 'lettre' ) . '</p>
					<!-- /wp:paragraph -->

					<!-- wp:jetpack/subscriptions {"buttonOnNewLine":true,"buttonWidth":"100%","buttonBackgroundColor":"black","customTextColor":"#ff513d","fontSize":"1.75rem","customFontSize":"1.75rem","borderRadius":50,"borderWeight":2,"borderColor":"black","padding":16,"align":"wide","className":"is-style-split"} -->
					<div class="wp-block-jetpack-subscriptions alignwide wp-block-jetpack-subscriptions__supports-newline wp-block-jetpack-subscriptions__use-newline is-style-split">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="true" custom_text_button_color="#ff513d" custom_font_size="1.75rem" custom_border_radius="50" custom_border_weight="2" custom_button_width="100%" custom_padding="16" custom_spacing="10" submit_button_classes="has-1-75-rem-font-size has-black-border-color has-background has-black-background-color" email_field_classes="has-1-75-rem-font-size has-black-border-color" show_only_email_and_button="true"]</div>
					<!-- /wp:jetpack/subscriptions --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns --></div></div>
					<!-- /wp:cover -->',
);
