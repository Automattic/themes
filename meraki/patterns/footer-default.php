<?php
/**
 * Title: Default footer block pattern
 * Slug: meraki/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","bottom":"80px"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"border":{"width":"0px","style":"none"}},"backgroundColor":"black","textColor":"background","layout":{"inherit":true},"fontSize":"14px"} -->
<div class="wp-block-group alignfull has-background-color has-black-background-color has-text-color has-background has-link-color has-14-px-font-size" style="border-style:none;border-width:0px;padding-top:80px;padding-bottom:80px">
	
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"fontSize":"small"} -->
			<h2 class="has-small-font-size" style="text-transform:uppercase;letter-spacing:1px">
				<?php
					echo esc_html__( 'About the Blog', 'meraki' );
				?>
			</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"small"},"color":{"text":"#ffffffa8"}}} -->
			<p class="has-text-color has-small-font-size" style="color:#ffffffa8">
				<?php
					echo esc_html__( 'Meraki  is a travel blog theme designed to document your adventures.', 'meraki' );
				?>	
			</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"fontSize":"small"} -->
			<h2 class="has-small-font-size" style="text-transform:uppercase;letter-spacing:1px">
				<?php
					echo esc_html__( 'Popular Posts', 'meraki' );
				?>
			</h2>
			<!-- /wp:heading -->

			<!-- wp:latest-posts {"postsToShow":3,"excerptLength":10,"displayPostDate":true,"featuredImageAlign":"left","featuredImageSizeHeight":68} /-->

		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">

			<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"1px"}},"fontSize":"small"} -->
			<h2 class="has-small-font-size" style="text-transform:uppercase;letter-spacing:1px">
				<?php
					echo esc_html__( 'Newsletter', 'meraki' );
				?>
			</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"small"},"color":{"text":"#ffffffa8"}}} -->
			<p class="has-text-color has-small-font-size" style="color:#ffffffa8">
				<?php
					echo esc_html__( 'Subscribe to our email newsletter for a weekly dose of travel inspiration.', 'meraki' );
				?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:jetpack/subscriptions {"buttonOnNewLine":true,"buttonWidth":"100%","submitButtonText":"SUBSCRIBE","buttonBackgroundColor":"background","textColor":"black","fontSize":"14px","customFontSize":"14px","borderRadius":50,"borderColor":"background","spacing":10,"className":"is-style-split"} -->
			<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline wp-block-jetpack-subscriptions__use-newline is-style-split">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="true" submit_button_text="SUBSCRIBE" custom_font_size="14px" custom_border_radius="50" custom_border_weight="1" custom_button_width="100%" custom_padding="15" custom_spacing="10" submit_button_classes="has-14-px-font-size has-background-border-color has-text-color has-black-color has-background has-background-background-color" email_field_classes="has-14-px-font-size has-background-border-color" show_only_email_and_button="true" success_message="Success! An email was just sent to confirm your subscription. Please find the email now and click 'Confirm Follow' to start subscribing."]</div>
			<!-- /wp:jetpack/subscriptions -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"backgroundColor":"black","textColor":"background"} -->
<div class="wp-block-group has-background-color has-black-background-color has-text-color has-background has-link-color" style="padding-top:20px;padding-bottom:20px">
	<!-- wp:paragraph {"align":"center","fontSize":"tiny"} -->
	<p class="has-text-align-center has-tiny-font-size">
		<?php
			printf(
				/* Translators: WordPress link. */
				esc_html__( 'Proudly powered by %s', 'meraki' ),
				'<a href="' . esc_url( __( 'https://wordpress.org', 'meraki' ) ) . '" rel="nofollow">WordPress</a>'
			)
			?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->