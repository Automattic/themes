<?php
/**
 * Title: Default footer
 * Slug: exmoor/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8vw","right":"var:preset|spacing|60","bottom":"8vw","left":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:8vw;padding-right:var(--wp--preset--spacing--60);padding-bottom:8vw;padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"70%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column" style="flex-basis:70%">
			<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|base"}}}}},"textColor":"base"} /-->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"x-small","fontFamily":"raleway"} -->
			<p class="has-raleway-font-family has-x-small-font-size" style="line-height:1.5"><?php echo wp_kses_post( __( '3 Cottage Rd, Exford,<br>Minehead SA12 7TG', 'exmoor' ) ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"},"spacing":{"margin":{"top":"0"}}},"fontSize":"x-small","fontFamily":"raleway"} -->
			<p class="has-raleway-font-family has-x-small-font-size" style="margin-top:0;line-height:1.5"><?php echo esc_html_x( '01234567890', 'tel number', 'exmoor' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->

				<!-- wp:social-link {"url":"#","service":"instagram"} /-->

				<!-- wp:social-link {"url":"#","service":"tumblr"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"15%"} -->
		<div class="wp-block-column" style="flex-basis:15%">
			<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0"}},"fontSize":"x-small"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"15%"} -->
		<div class="wp-block-column" style="flex-basis:15%">
			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|base"}}}},"typography":{"lineHeight":"1.5"}},"fontSize":"x-small","fontFamily":"raleway"} -->
			<p class="has-link-color has-raleway-font-family has-x-small-font-size" style="line-height:1.5"><?php
					/* Translators: WordPress link. */
					$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'exmoor' ) ) . '" rel="nofollow">WordPress</a>';
					echo sprintf(
						esc_html__( 'Designed with %1$s', 'exmoor' ),
						$wordpress_link
					);?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
