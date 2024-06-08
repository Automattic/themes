<?php
/**
 * Title: Call to action with image on right
 * Slug: cakely/cta-content-image-on-right
 * Categories: call-to-action, banner
 * Viewport width: 1488
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"accent-one","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-one-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:0;padding-right:var(--wp--preset--spacing--60);padding-bottom:0;padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"0px","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"10%","left":"10%","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-right:10%;padding-bottom:var(--wp--preset--spacing--70);padding-left:10%">
				<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group alignwide">
					<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"large"} -->
					<h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-large-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html__( 'About Us', 'cakely' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p><?php echo esc_html__( 'We specialise in creating beautiful and original cakes, cupcakes, tiered cakes, novelty cakes, macarons, and wedding cakes for all occasions, including birthdays, corporate events, and weddings.', 'cakely' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Read more', 'cakely' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:image {"linkDestination":"none","className":"size-full"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/two_smiling_women_standing_in_a_bright_kitchen_behind.jpg" alt=""/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
