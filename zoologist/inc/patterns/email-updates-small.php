<?php
/**
 * Email Updates (Small)
 *
 * @package Zoologist
 */

return array(
	'title'      => __( 'Email Updates (small)', 'zoologist' ),
	'categories' => array( 'zoologist' ),
	'blockTypes' => array( 'jetpack/subscriptions' ),
	'content'    => '<!-- wp:paragraph --><p>' . esc_html__( 'Receive every post in your inbox.', 'zoologist' ) . '</p><!-- /wp:paragraph -->
	<!-- wp:jetpack/subscriptions -->
	<div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="false" custom_font_size="16px" custom_border_radius="0" custom_border_weight="1" custom_padding="15" custom_spacing="10" submit_button_classes="" email_field_classes="" show_only_email_and_button="true"]</div>
	<!-- /wp:jetpack/subscriptions -->',
);
