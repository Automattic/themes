<?php
/**
 * Title: Page
 * Slug: vows/hidden-page
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

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:post-title /-->

					<!-- wp:post-content {"lock":{"move":false,"remove":true},"layout":{"type":"constrained","justifyContent":"center"}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</main>
		<!-- /wp:group -->

		<!-- wp:pattern {"slug":"vows/footer"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:column -->
