<?php
/**
 * Join.
 *
 * @package Quadrat
 */

return array(
	'title'      => __( 'Join', 'quadrat' ),
	'categories' => array( 'quadrat' ),
	'content'    => '<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:heading {"level":3} -->
		<h3>' . esc_html__( 'Join the Community', 'quadrat' ) . '</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>' . esc_html__( 'We’re thrilled to have you here! Now, if you don’t want to miss an article or an episode, you can subscribe to our newsletter.', 'quadrat' ) . '</p>
		<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","className":"subscription-column"} -->
		<div class="wp-block-column is-vertically-aligned-center subscription-column"><!-- wp:jetpack/subscriptions {"buttonOnNewLine":true} -->
		<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline wp-block-jetpack-subscriptions__use-newline">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="true" custom_font_size="16px" custom_border_radius="0" custom_border_weight="1" custom_padding="15" custom_spacing="10" submit_button_classes="" email_field_classes="" show_only_email_and_button="true"]</div>
		<!-- /wp:jetpack/subscriptions --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->',
);
