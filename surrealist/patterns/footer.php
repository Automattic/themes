<?php
/**
 * Title: Default Footer
 * Slug: surrealist/footer
 * Categories: footer, featured
 * Block Types: core/template-part/footer
 * Viewport width: 1600
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"full","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity"/>
			<!-- /wp:separator -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group">
				<!-- wp:site-title {"textAlign":"center"} /-->

				<!-- wp:paragraph {"align":"center","lock":{"move":false,"remove":false},"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.04em"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"small","fontFamily":"kame-poster"} -->
				<p class="has-text-align-center has-link-color has-kame-poster-font-family has-small-font-size" style="letter-spacing:0.04em;text-transform:uppercase"><?php
					/* Translators: WordPress link. */
					$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'surrealist' ) ) . '" rel="nofollow">WordPress</a>';
					echo sprintf(
						esc_html__( 'Designed with %1$s', 'surrealist' ),
						$wordpress_link
					);
				?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:separator {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity"/>
			<!-- /wp:separator -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
