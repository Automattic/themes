<?php
/**
 * Title: Default footer
 * Slug: bute/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8vw","right":"var:preset|spacing|60","bottom":"8vw","left":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:8vw;padding-right:var(--wp--preset--spacing--60);padding-bottom:8vw;padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}}} -->
			<h3 class="wp-block-heading" style="text-transform:uppercase"><?php echo esc_html__( 'About the Blog', 'bute' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php echo esc_html__( 'We’re dedicated to sharing enchanting tales from our globe-trotting adventures, bringing you authentic experiences, hidden gems, and practical travel tips.', 'bute' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->

				<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->

				<!-- wp:social-link {"url":"https://tumblr.com/","service":"tumblr"} /-->
			</ul>
			<!-- /wp:social-links -->

			<!-- wp:paragraph {"lock":{"move":false,"remove":true},"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|base"}}}}},"fontSize":"x-small"} -->
			<p class="has-link-color has-x-small-font-size"><?php
				/* Translators: WordPress link. */
				$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'bute' ) ) . '" rel="nofollow">WordPress</a>';
				echo sprintf(
					esc_html__( 'Designed with %1$s', 'bute' ),
					$wordpress_link
				);?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}}} -->
			<h3 class="wp-block-heading" style="text-transform:uppercase"><?php echo esc_html__( 'Newsletter', 'bute' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php echo esc_html__( 'Subscribe now to fuel your wanderlust, and join our community of passionate explorers. Don’t miss out - your next adventure awaits!', 'bute' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:jetpack/subscriptions {"buttonBackgroundColor":"primary","textColor":"base","borderColor":"primary"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
