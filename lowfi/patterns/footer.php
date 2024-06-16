<?php
/**
 * Title: Footer
 * Slug: lowfi/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Viewport width: 1280
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group">
		<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#316460","openInNewTab":true,"size":"has-small-icon-size","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}},"className":"is-style-logos-only"} -->
		<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->

			<!-- wp:social-link {"url":"https://twitter.com/","service":"x"} /-->

			<!-- wp:social-link {"url":"https://tumblr.com/","service":"tumblr"} /-->
		</ul>
		<!-- /wp:social-links -->

		<!-- wp:paragraph {"lock":{"move":false,"remove":false},"className":"has-small-font-size","fontSize":"small"} -->
		<p class="has-small-font-size">
			<?php
			$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'lowfi' ) ) . '" rel="nofollow">WordPress</a>';
			echo sprintf(
			/* Translators: WordPress link. */
				esc_html__( 'Designed with %1$s', 'lowfi' ),
				$wordpress_link
			);?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
