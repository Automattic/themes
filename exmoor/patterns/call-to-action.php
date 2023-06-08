<?php
/**
 * Title: Call to Action
 * Slug: exmoor/call-to-action
 * Categories: featured
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"8vw","bottom":"8vw","right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:8vw;padding-right:var(--wp--preset--spacing--60);padding-bottom:8vw;padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} -->
	<h3 class="wp-block-heading has-text-align-center has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Exclusive Offer', 'exmoor' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"textTransform":"uppercase","lineHeight":"0.9","fontStyle":"normal","fontWeight":"900"}},"fontSize":"xxx-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-xxx-large-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:900;line-height:0.9;text-transform:uppercase"><?php echo wp_kses_post( __( 'Get 20% Off<br>your first trip', 'exmoor' ) ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
	<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Book with us your first trip today and receive an exclusive offer.', 'exmoor' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Find out more', 'exmoor' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
