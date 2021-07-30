<?php
/**
 * Pre Footer.
 *
 * @package Skatepark
 */

return array(
	'title'      => __( 'Footer', 'skatepark' ),
	'categories' => array( 'skatepark' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"60px","bottom":"60px"}}},"className":"pre-footer"} -->
	<div class="wp-block-group alignwide pre-footer" style="padding-top:60px;padding-bottom:60px"><!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column -->
		<div class="wp-block-column"><!-- wp:site-title {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"large"} /-->
		
		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size">' . esc_html__( 'Skate ipsum dolor sit amet, poseur nollie casper pop shove-it. Kickturn noseblunt tailslide.', 'skatepark' ) . '</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:social-links {"iconColor":"primary","iconColorValue":"var(--wp--custom--color--foreground)","className":"is-style-logos-only"} -->
		<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"http://twitter.com","service":"twitter"} /-->
		
		<!-- wp:social-link {"url":"http://facebook.com","service":"facebook"} /-->
		
		<!-- wp:social-link {"url":"http://instagram.com","service":"instagram"} /--></ul>
		<!-- /wp:social-links --></div>
		<!-- /wp:column -->
		
		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"tiny"} -->
		<h3 class="has-tiny-font-size"><strong>' . esc_html__( 'More info', 'skatepark' ) . '</strong></h3>
		<!-- /wp:heading -->
		
		<!-- wp:navigation {"orientation":"vertical","__unstableLocation":"secondary","style":{"typography":{"textDecoration":"underline"}},"fontSize":"small"} /--></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"tiny"} -->
		<h3 class="has-tiny-font-size"><strong>' . esc_html__( 'Subscribe', 'skatepark' ) . '</strong></h3><!-- /wp:heading --><!-- wp:jetpack/subscriptions {"submitButtonText":"' . esc_html__( 'Submit', 'skatepark' ) . '","buttonBackgroundColor":"background","textColor":"primary","fontSize":"14px","customFontSize":"14px","borderRadius":0,"borderWeight":3,"borderColor":"#000000","customBorderColor":"#000000","spacing":0} -->
		<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="false" submit_button_text="' . esc_html__( 'Submit', 'skatepark' ) . '" custom_font_size="14px" custom_border_radius="0" custom_border_weight="3" custom_border_color="#000000" custom_padding="15" custom_spacing="10" submit_button_classes="no-border-radius has-14-px-font-size has-000000-border-color has-text-color has-primary-color has-background has-background-background-color" email_field_classes="no-border-radius has-14-px-font-size has-000000-border-color" show_only_email_and_button="true"]</div>
		<!-- /wp:jetpack/subscriptions --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
		<!-- /wp:group -->',
);
