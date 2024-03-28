<?php
/**
 * Title: Search
 * Slug: bedrock/search
 * Inserter: no
 */
declare( strict_types = 1 );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background" style="margin-top:0px;margin-bottom:0px">
	<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/background.png","isRepeated":true,"dimRatio":0,"isUserOverlayColor":true,"align":"full","layout":{"type":"constrained"}} -->
	<div class="wp-block-cover alignfull is-repeated">
		<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
		<div role="img" class="wp-block-cover__image-background is-repeated" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/background.png)"></div>
		<div class="wp-block-cover__inner-container">
			<!-- wp:group {"align":"wide","style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"borderColor":"contrast","backgroundColor":"base","layout":{"type":"default"}} -->
			<div class="wp-block-group alignwide has-border-color has-contrast-border-color has-base-background-color has-background" style="border-width:1px;margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
				<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
				<div class="wp-block-columns">
					<!-- wp:column {"width":"68%","layout":{"type":"default"}} -->
					<div class="wp-block-column" style="flex-basis:68%">
						<!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
						<main class="wp-block-group">
							<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
							<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">
								<!-- wp:search {"showLabel":false,"placeholder":"<?php echo esc_html_x( 'Search...', 'This is a placeholder text in a search field', 'bedrock' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true} /-->

								<!-- wp:query-title {"type":"search"} /-->
							</div>
							<!-- /wp:group -->

							<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true}} -->
							<div class="wp-block-query">
								<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default","columnCount":3}} -->
									<!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"0"}}}} -->
									<div class="wp-block-columns" style="margin-bottom:0">
										<!-- wp:column {"width":"23.8%"} -->
										<div class="wp-block-column" style="flex-basis:23.8%">
											<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"","height":"","style":{"layout":{"selfStretch":"fixed","flexSize":"23.8%"}}} /-->
										</div>
										<!-- /wp:column -->

										<!-- wp:column {"width":"76.2%"} -->
										<div class="wp-block-column" style="flex-basis:76.2%">
											<!-- wp:post-title {"isLink":true} /-->

											<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
											<div class="wp-block-group">
												<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":30,"fontSize":"small"} /-->

												<!-- wp:template-part {"slug":"post-meta"} /-->
											</div>
											<!-- /wp:group -->
										</div>
										<!-- /wp:column -->
									</div>
									<!-- /wp:columns -->
								<!-- /wp:post-template -->

								<!-- wp:query-no-results -->
									<!-- wp:paragraph -->
									<p><?php echo esc_html_x( 'No posts were found.', 'Message explaining that there are no results returned from a search', 'bedrock' ); ?></p>
									<!-- /wp:paragraph -->
								<!-- /wp:query-no-results -->

								<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
									<!-- wp:query-pagination-previous /-->

									<!-- wp:query-pagination-next /-->
								<!-- /wp:query-pagination -->
							</div>
							<!-- /wp:query -->
						</main>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"32%"} -->
					<div class="wp-block-column" style="flex-basis:32%">
						<!-- wp:template-part {"slug":"sidebar"} /-->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
