<?php
/**
 * Title: Single
 * Slug: vows/hidden-single
 * Categories: hidden
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:column -->
<div class="wp-block-column">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"dimensions":{"minHeight":"100vh"},"background":{"backgroundImage":{"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/groovepaper.png","source":"file","title":"groovepaper"},"backgroundSize":"300px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
	<div class="wp-block-group" style="min-height:100vh">
		<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
		<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:post-featured-image /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="wp-block-group">
						<!-- wp:post-date /-->

						<!-- wp:post-title /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-content {"lock":{"move":false,"remove":true},"layout":{"type":"constrained","justifyContent":"center"}} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:separator {"className":"is-style-wide"} -->
					<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
					<!-- /wp:separator -->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:post-author-name /-->

						<!-- wp:post-terms {"term":"category"} /-->

						<!-- wp:post-terms {"term":"post_tag"} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","orientation":"vertical"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70)">
				<!-- wp:post-navigation-link {"type":"previous","showTitle":true,"linkLabel":true} /-->

				<!-- wp:post-navigation-link {"showTitle":true,"linkLabel":true} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:pattern {"slug":"vows/hidden-comments"} /-->
		</main>
		<!-- /wp:group -->

		<!-- wp:pattern {"slug":"vows/footer"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:column -->
