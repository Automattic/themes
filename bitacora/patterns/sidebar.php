<?php
/**
 * Title: Sidebar Content
 * Slug: bitacora/sidebar
 * Categories: featured, columns
 */
?>
<!-- wp:group {"tagName":"aside","layout":{"type":"constrained"}} -->
<aside class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"0.2em"}},"fontSize":"small"} -->
		<h3 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.2em;text-transform:uppercase"><?php _e( 'About Me', 'bitacora' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php echo esc_html__( 'An English diarist and naval administrator. I served as administrator of the Royal Navy and Member of Parliament. I had no maritime experience, but I rose to be the Chief Secretary to the Admiralty under both King Charles II and King James II through patronage, diligence, and my talent for administration.', 'bitacora' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","iconBackgroundColor":"foreground","iconBackgroundColorValue":"#004751","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"},"margin":{"top":"1rem"}}},"className":"is-style-default"} -->
		<ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color is-style-default" style="margin-top:1rem">
			<!-- wp:social-link {"url":"#","service":"tumblr"} /-->
			<!-- wp:social-link {"url":"#","service":"WordPress"} /-->
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"0.2em"}},"fontSize":"small"} -->
		<h3 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.2em;text-transform:uppercase"><?php _e( 'Recent Posts', 'bitacora' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:latest-posts {"fontSize":"small"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"0.2em"}},"fontSize":"small"} -->
		<h3 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.2em;text-transform:uppercase"><?php _e( 'Newsletter', 'bitacora' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:jetpack/subscriptions {"submitButtonText":"subscribe","fontSize":"0.781rem","customFontSize":"0.781rem","borderRadius":2,"padding":9,"spacing":7,"className":"is-style-split"} -->
		<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline is-style-split">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="false" submit_button_text="subscribe" custom_font_size="0.781rem" custom_border_radius="2" custom_border_weight="1" custom_padding="9" custom_spacing="7" submit_button_classes="has-0-781-rem-font-size" email_field_classes="has-0-781-rem-font-size" show_only_email_and_button="true" success_message="<?php echo esc_attr__( 'Success! An email was just sent to confirm your subscription. Please find the email now and click \'Confirm Follow\' to start subscribing.', 'bitacora' ); ?>"]</div>
		<!-- /wp:jetpack/subscriptions -->
	</div>
	<!-- /wp:group -->
</aside>
<!-- /wp:group -->
