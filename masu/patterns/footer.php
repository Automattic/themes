<?php
/**
 * Title: Default footer pattern
 * Slug: masu/footer
 * Categories: featured,footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"7vw","bottom":"2rem"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:7vw;padding-bottom:2rem">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"50%","fontSize":"14px"} -->
		<div class="wp-block-column has-14-px-font-size" style="flex-basis:50%">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"constrained","contentSize":"600px"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} -->
					<p class="has-x-small-font-size" style="font-style:normal;font-weight:700"><?php _e( 'About the blog', 'masu' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"x-small"} -->
					<p class="has-x-small-font-size"><?php echo esc_html__( 'Masu is a blog that documents an individual\'s journey with regular quadrilateral images. Don\'t forget to follow me on:', 'masu' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","style":{"spacing":{"margin":{"top":"1.32rem"},"blockGap":{"left":"1rem"}}},"className":"is-style-logos-only"} -->
					<ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:1.32rem">
						<!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->

						<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->

						<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%","fontSize":"14px"} -->
		<div class="wp-block-column has-14-px-font-size" style="flex-basis:50%">
			<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"constrained","contentSize":"600px","justifyContent":"left"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"x-small"} -->
					<p class="has-x-small-font-size" style="font-style:normal;font-weight:700"><?php _e( 'Newsletter', 'masu' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"x-small"} -->
					<p class="has-x-small-font-size"><?php _e( 'Subscribe to my email newsletter full of inspiring stories about my journey that continues.', 'masu' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:jetpack/subscriptions {"buttonBackgroundColor":"primary","textColor":"background","fontSize":"14px","customFontSize":"14px","customBorderColor":"#949494","padding":10,"spacing":10,"className":"is-style-split"} -->
					<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline is-style-split">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="false" custom_font_size="14px" custom_border_radius="0" custom_border_weight="1" custom_border_color="#949494" custom_padding="10" custom_spacing="10" submit_button_classes="has-14-px-font-size has-text-color has-background-color has-background has-primary-background-color" email_field_classes="has-14-px-font-size" show_only_email_and_button="true" success_message="<?php echo esc_html__( 'Success! An email was just sent to confirm your subscription. Please find the email now and click \'Confirm Follow\' to start subscribing.', 'masu' ); ?>"]</div>
					<!-- /wp:jetpack/subscriptions --></div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"3.5vw"}}}} -->
	<div class="wp-block-group alignwide" style="margin-top:3.5vw"><!-- wp:paragraph {"className":"has-x-small-font-size","fontSize":"x-small"} -->
		<p class="has-x-small-font-size">
			<?php
			printf(
				/* Translators: WordPress.com link. */
				esc_html__( 'Designed with %s', 'masu' ),
				'<a href="' . esc_url( __( 'https://wordpress.com', 'masu' ) ) . '" rel="nofollow">WordPress.com</a>'
				);
			?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
