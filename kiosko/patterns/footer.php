<?php
/**
 * Title: Default footer
 * Slug: kiosko/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */

declare( strict_types = 1 );
?>
<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"primary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:column {"width":"40%","fontSize":"small"} -->
		<div class="wp-block-column has-small-font-size" style="flex-basis:40%">
			<!-- wp:site-title {"level":2,"isLink":false,"style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"large"} /-->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'We are a poster shop bringing you carefully created and unique art prints. We are a curious and creative team based in Tokyo, Japan, and we believe in diversity, value and quality.', 'kiosko' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"#","service":"wordpress"} /-->

				<!-- wp:social-link {"url":"#","service":"tumblr"} /-->

				<!-- wp:social-link {"url":"#","service":"instagram"} /-->

				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"large"} -->
			<h2 class="wp-block-heading has-link-color has-large-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Location', 'kiosko' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0rem"}},"layout":{"type":"constrained"},"fontSize":"small"} -->
			<div class="wp-block-group has-small-font-size">
				<!-- wp:paragraph -->
				<p><?php echo esc_html__( '12-3 Udagawacho, Shibuya City, Tokyo 123-4567', 'kiosko' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Mon - Fri 10 am - 7 pm', 'kiosko' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Sat - Sun 12 am - 5 pm', 'kiosko' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( '0123 456 7890', 'kiosko' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"large"} -->
			<h2 class="wp-block-heading has-large-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Shop', 'kiosko' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:navigation {"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0px"}},"fontSize":"small"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"large"} -->
			<h2 class="wp-block-heading has-large-font-size" style="font-style:normal;font-weight:400;text-transform:uppercase"><?php echo esc_html__( 'Info', 'kiosko' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:navigation {"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0px"}},"fontSize":"small"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0px","bottom":"0px"},"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:0px;padding-bottom:var(--wp--preset--spacing--70)">
		<!-- wp:paragraph {"align":"right","fontSize":"small"} -->
		<p class="has-text-align-right has-small-font-size">&#169; <?php echo date("Y"); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:site-title {"level":0,"isLink":false,"style":{"typography":{"textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} /-->

		<!-- wp:paragraph {"align":"right","fontSize":"small"} -->
		<p class="has-text-align-right has-small-font-size"><?php
				/* Translators: WordPress link. */
				$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'kiosko' ) ) . '" rel="nofollow">WordPress</a>';
				echo sprintf(
					esc_html__( 'Designed with %1$s', 'kiosko' ),
					$wordpress_link
				);
		?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
