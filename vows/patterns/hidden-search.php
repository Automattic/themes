<?php
/**
 * Title: Search
 * Slug: vows/hidden-search
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
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">

				<!-- wp:query-title {"type":"search"} /-->

				<!-- wp:search {"label":"","showLabel":false,"placeholder":"<?php echo esc_html_x( 'Search...', 'This is a placeholder text in a search field', 'vows' ); ?>","buttonText":"","buttonUseIcon":true} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:query {"queryId":5,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"layout":{"type":"default"}} -->
			<div class="wp-block-query">
				<!-- wp:query-no-results -->
					<!-- wp:paragraph -->
					<p><?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'vows' ); ?></p>
					<!-- /wp:paragraph -->
				<!-- /wp:query-no-results -->

				<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
					<!-- wp:group {"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:post-featured-image {"isLink":true} /-->

						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
						<div class="wp-block-group">
							<!-- wp:post-date /-->

							<!-- wp:post-title {"isLink":true} /-->
						</div>
						<!-- /wp:group -->

						<!-- wp:post-excerpt {"moreText":"Read more \u0026rarr;"} /-->
					</div>
					<!-- /wp:group -->
				<!-- /wp:post-template -->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70)">
					<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"left","orientation":"vertical"}} -->
						<!-- wp:query-pagination-previous /-->

						<!-- wp:query-pagination-next /-->
					<!-- /wp:query-pagination -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:query -->
		</main>
		<!-- /wp:group -->

		<!-- wp:pattern {"slug":"vows/footer"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:column -->
