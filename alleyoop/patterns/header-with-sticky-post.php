<?php
/**
 * Title: Header with Sticky Post
 * Slug: alleyoop/header-with-sticky-post
 * Categories: header
 * Block Types: core/template-part/header
 */
declare( strict_types = 1 );
?>

<!-- wp:query {"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"layout":{"type":"default"}} -->
		<!-- wp:cover {"useFeaturedImage":true,"dimRatio":20,"isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":0.7},"minHeight":60,"minHeightUnit":"vh","customGradient":"linear-gradient(180deg,rgb(0,0,0) 0%,rgba(0,0,0,0) 45%,rgba(0,0,0,0) 55%,rgb(0,0,0) 100%)","contentPosition":"center center","isDark":false,"style":{"spacing":{"margin":{"top":"0px","bottom":"var:preset|spacing|60"},"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-cover is-light" style="margin-top:0px;margin-bottom:var(--wp--preset--spacing--60);padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-20 has-background-dim has-background-gradient" style="background:linear-gradient(180deg,rgb(0,0,0) 0%,rgba(0,0,0,0) 45%,rgba(0,0,0,0) 55%,rgb(0,0,0) 100%)"></span>
			<div class="wp-block-cover__inner-container">
				<!-- wp:group {"align":"wide","style":{"dimensions":{"minHeight":"60vh"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
				<div class="wp-block-group alignwide" style="min-height:60vh">
					<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"layout":{"selfStretch":"fit","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide has-base-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
						<!-- wp:site-title {"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

						<!-- wp:navigation {"align":"wide","layout":{"type":"flex"}} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
						<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
						<div class="wp-block-group alignwide has-base-color has-text-color has-link-color">
							<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","letterSpacing":"0px"}},"fontSize":"small","fontFamily":"source-sans-3"} -->
							<p class="has-source-sans-3-font-family has-small-font-size" style="font-style:normal;font-weight:600;letter-spacing:0px"><?php echo esc_html__( 'Featured', 'alleyoop' ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"lineHeight":"1.056603774"}},"fontSize":"xxx-large"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
		</div>
		<!-- /wp:cover -->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
