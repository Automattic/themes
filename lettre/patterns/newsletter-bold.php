<?php
/**
 * Bold newsletter signup
 */
return array(
	'title'      => __( 'Bold newsletter signup', 'lettre' ),
	'categories' => array( 'featured', 'newsletter' ),
	'content'    => '<!-- wp:cover {"customOverlayColor":"#cdffe8","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"2em","right":"2em","bottom":"2em","left":"2em"}}}} -->
					<div class="wp-block-cover alignfull is-light" style="padding-top:2em;padding-right:2em;padding-bottom:2em;padding-left:2em"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#cdffe8"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"layout":{"inherit":false}} -->
					<div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"1.5em"}}}} -->
					<div class="wp-block-group" style="padding-bottom:1.5em"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"max(48px, 10vw)","lineHeight":"1"}},"textColor":"foreground"} -->
					<p class="has-text-align-left has-foreground-color has-text-color" style="font-size:max(48px, 10vw);line-height:1"><strong>' . esc_html__( 'Sign up for updates', 'lettre' ) . '</strong></p>
					<!-- /wp:paragraph --></div>
					<!-- /wp:group -->

					<!-- wp:jetpack/subscriptions {"buttonOnNewLine":true,"buttonWidth":"100%","submitButtonText":"\u003cstrong\u003eSubscribe\u003c/strong\u003e","buttonBackgroundColor":"foreground","textColor":"secondary","fontSize":"50px","customFontSize":"50px","borderRadius":0,"borderWeight":8,"borderColor":"foreground","padding":40,"spacing":40,"className":"is-style-split"} -->
					<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline wp-block-jetpack-subscriptions__use-newline is-style-split">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="true" submit_button_text="<strong>Subscribe</strong>" custom_font_size="50px" custom_border_radius="0" custom_border_weight="8" custom_button_width="100%" custom_padding="40" custom_spacing="40" submit_button_classes="no-border-radius has-50-px-font-size has-foreground-border-color has-text-color has-secondary-color has-background has-foreground-background-color" email_field_classes="no-border-radius has-50-px-font-size has-foreground-border-color" show_only_email_and_button="true"]</div>
					<!-- /wp:jetpack/subscriptions --></div>
					<!-- /wp:group --></div></div>
					<!-- /wp:cover -->',
);
