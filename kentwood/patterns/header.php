<?php
/**
 * Title: Default header
 * Slug: kentwood/header
 * Categories: featured, header
 * Block Types: core/template-part/header
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"0","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|base"}}}},"border":{"bottom":{"width":"0px","style":"none"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"default"}} -->
	<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background has-link-color" style="border-bottom-style:none;border-bottom-width:0px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:navigation {"overlayMenu":"never","overlayBackgroundColor":"primary","overlayTextColor":"base","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.03em"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontSize":"x-small"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"default"}} -->
	<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"45%"},"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-right:0;padding-left:0">
				<!-- wp:navigation {"icon":"menu","overlayBackgroundColor":"primary","overlayTextColor":"base","layout":{"type":"flex","justifyContent":"left"},"style":{"layout":{"selfStretch":"fixed","flexSize":"45%"}}} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"align":"wide","style":{"layout":{"selfStretch":"fixed","flexSize":"110px"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
				<div class="wp-block-group alignwide">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
					<div class="wp-block-group">
						<!-- wp:site-logo {"width":80,"shouldSyncIcon":true} /-->

						<!-- wp:site-title {"level":0,"textAlign":"center"} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"45%"},"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-right:0;padding-left:0">
				<!-- wp:navigation {"icon":"menu","overlayBackgroundColor":"primary","overlayTextColor":"base","layout":{"type":"flex","justifyContent":"right"},"style":{"layout":{"selfStretch":"fixed","flexSize":"45%"}}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
