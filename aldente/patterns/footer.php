<?php
/**
 * Title: Default footer
 * Slug: aldente/footer
 * Categories: featured, footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|50","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:site-title {"fontSize":"large"} /-->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php echo esc_html__( 'Stay up to date with our latest, recipes, videos and other news by joining our newsletter.', 'aldente' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:jetpack/subscriptions {"fontSize":"0.938rem","customFontSize":"0.938rem","padding":7,"successMessage":""} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column"></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0px"}},"fontSize":"x-small"} /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0"}},"fontSize":"x-small"} /-->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0"}},"fontSize":"x-small"} /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"0"},"margin":{"top":"0px"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="margin-top:0px;padding-top:var(--wp--preset--spacing--60);padding-bottom:0">
		<!-- wp:paragraph {"fontSize":"x-small"} -->
		<p class="has-x-small-font-size"><?php
		/* Translators: WordPress link. */
		$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'aldente' ) ) . '" rel="nofollow">WordPress</a>';
		echo sprintf(
			esc_html__( 'Designed with %1$s', 'aldente' ),
			$wordpress_link
		);?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

