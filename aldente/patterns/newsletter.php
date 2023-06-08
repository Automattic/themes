<?php
/**
 * Title: Newsletter
 * Slug: aldente/newsletter
 * Categories: featured
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-primary-background-color has-text-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"67.5%","style":{"spacing":{"padding":{"bottom":"0"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-bottom:0;flex-basis:67.5%">
			<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
			<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Join the fun!', 'aldente' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0.25rem"}}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="margin-top:0.25rem"><?php echo esc_html__( 'Stay updated with our latest recipes and other news by joining our newsletter.', 'aldente' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"32.5%","style":{"spacing":{"padding":{"bottom":"0"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-bottom:0;flex-basis:32.5%">
			<!-- wp:group {"layout":{"type":"constrained","justifyContent":"right"}} -->
			<div class="wp-block-group">
				<!-- wp:jetpack/subscriptions {"fontSize":"0.938rem","customFontSize":"0.938rem","customBorderColor":"#4e4e4e","padding":7,"successMessage":""} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
