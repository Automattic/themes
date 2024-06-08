<?php
/**
 * Title: Front Page
 * Slug: surrealist/front-page
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/the_tilled_field.jpg","hasParallax":true,"dimRatio":50,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-cover has-parallax" style="padding-top:0;padding-bottom:0;min-height:100vh">
	<span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim"></span>
	<div class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/the_tilled_field.jpg)"></div>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"style":{"dimensions":{"minHeight":"100vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
		<div class="wp-block-group" style="min-height:100vh">
			<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"30px","selfStretch":"fixed"}}} -->
			<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group alignfull">
				<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"32px","selfStretch":"fixed"}}} -->
				<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:site-title {"textAlign":"center","isLink":false,"style":{"typography":{"lineHeight":"0.83","fontSize":"20vw"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} /-->

				<!-- wp:navigation {"hasIcon":false,"layout":{"type":"flex","justifyContent":"center"},"fontSize":"medium"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|base"}}}},"spacing":{"padding":{"bottom":"var:preset|spacing|30"}}},"textColor":"base","layout":{"type":"default"}} -->
			<div class="wp-block-group alignwide has-base-color has-text-color has-link-color" style="padding-bottom:var(--wp--preset--spacing--30)">
				<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
				<p class="has-text-align-center has-small-font-size"><?php echo esc_html__( 'The Tilled Field by Joan Miró (d. 1983)', 'surrealist' ); ?> - <a href="https://www.guggenheim.org/artwork/2934" rel="nofollow">https://www.guggenheim.org/artwork/2934</a>, <?php echo esc_html__( 'Public Domain', 'surrealist' ); ?>, <a href="https://en.wikipedia.org/w/index.php?curid=17691985" rel="nofollow">https://en.wikipedia.org/w/index.php?curid=17691985</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
