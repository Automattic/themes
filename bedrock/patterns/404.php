<?php
/**
 * Title: 404
 * Slug: bedrock/404
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
						<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
						<main class="wp-block-group">
							<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"center"} -->
							<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Unknown_Object.png" alt=""/></figure>
							<!-- /wp:image -->

							<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
							<p class="has-text-align-center has-large-font-size"><?php echo esc_html__( 'LuaEntity not found.', 'bedrock' ); ?></p>
							<!-- /wp:paragraph -->
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
