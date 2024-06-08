<?php
/**
 * Title: A page
 * Slug: freddie/page
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/music-star-concert-singer-artist-musician-1253514-pxhere.com.jpg","hasParallax":true,"dimRatio":0,"minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-cover alignfull has-parallax" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:100vh">
		<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
		<div role="img" class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/music-star-concert-singer-artist-musician-1253514-pxhere.com.jpg)"></div>
		<div class="wp-block-cover__inner-container">
			<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
			<div class="wp-block-group alignfull" style="min-height:100vh;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">
				<!-- wp:pattern {"slug":"freddie/header"} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom","justifyContent":"space-between"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
					<main class="wp-block-group">
						<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
						<div class="wp-block-group">
							<!-- wp:post-title /-->

							<!-- wp:post-featured-image /-->
						</div>
						<!-- /wp:group -->

						<!-- wp:group {"layout":{"type":"default"}} -->
						<div class="wp-block-group">
							<!-- wp:post-content {"layout":{"type":"constrained","justifyContent":"left"}} /-->
						</div>
						<!-- /wp:group -->

						<!-- wp:pattern {"slug":"freddie/comments"} /-->
					</main>
					<!-- /wp:group -->

					<!-- wp:pattern {"slug":"freddie/footer"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
