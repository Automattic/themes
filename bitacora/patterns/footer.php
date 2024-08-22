<?php
/**
 * Title: Default footer
 * Slug: bitacora/footer
 * Categories: featured, footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:separator {"align":"wide","className":"is-style-wide"} -->
	<hr class="wp-block-separator alignwide has-alpha-channel-opacity is-style-wide"/>
	<!-- /wp:separator -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"0.2em"}},"fontSize":"small"} -->
			<h3 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.2em;text-transform:uppercase"><?php _e( 'Recent Posts', 'bitacora' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:latest-posts {"postsToShow":3,"fontSize":"small"} /--></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"0.2em"}},"fontSize":"small"} -->
			<h3 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.2em;text-transform:uppercase"><?php _e( 'Follow Me', 'bitacora' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><a href="#"><?php _e( 'Tumblr', 'bitacora' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><a href="#"><?php _e( 'WordPress', 'bitacora' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><a href="#"><?php _e( 'Instagram', 'bitacora' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"0.2em"}},"fontSize":"small"} -->
			<h3 class="wp-block-heading has-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:0.2em;text-transform:uppercase"><?php _e( 'Newsletter', 'bitacora' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:jetpack/subscriptions {"submitButtonText":"subscribe","fontSize":"0.781rem","customFontSize":"0.781rem","borderRadius":2,"padding":9,"spacing":7} -->
			<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="false" submit_button_text="subscribe" custom_font_size="0.781rem" custom_border_radius="2" custom_border_weight="1" custom_padding="9" custom_spacing="7" submit_button_classes="has-0-781-rem-font-size" email_field_classes="has-0-781-rem-font-size" show_only_email_and_button="true" success_message="<?php echo esc_attr__( 'Success! An email was just sent to confirm your subscription. Please find the email now and click \'Confirm Follow\' to start subscribing.', 'bitacora' ); ?>"]</div>
			<!-- /wp:jetpack/subscriptions -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"align":"left","className":"has-small-font-size","fontSize":"small"} -->
		<p class="has-text-align-left has-small-font-size">
			<?php
				$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'bitacora' ) ) . '" rel="nofollow">WordPress</a>';
				echo sprintf(
					/* Translators: WordPress link. */
					esc_html__( 'Designed with %1$s', 'bitacora' ),
					$wordpress_link
				);
				?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
