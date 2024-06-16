<?php
/**
 * Title: Footer Front Page
 * Slug: kansei/footer-front-page
 * Categories: footer
 * Block Types: core/template-part/footer
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"3rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:3rem">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column {"width":"16.7%"} -->
				<div class="wp-block-column" style="flex-basis:16.7%"></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"33.3%"} -->
				<div class="wp-block-column" style="flex-basis:33.3%"></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"50%"} -->
				<div class="wp-block-column" style="flex-basis:50%">
					<!-- wp:paragraph -->
					<p><?php
						/* Translators: WordPress link. */
						$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'kansei' ) ) . '" rel="nofollow">WordPress</a>';
						echo sprintf(
							esc_html__( 'Designed with %1$s', 'kansei' ),
							$wordpress_link
						);?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
