<?php
/**
 * Title: Default footer
 * Slug: spiel/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"border":{"top":{"color":"var:preset|color|secondary","width":"1px"}}},"backgroundColor":"black","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-black-background-color has-text-color has-background has-link-color" style="border-top-color:var(--wp--preset--color--secondary);border-top-width:1px">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html__( 'At Spiel, every click is an adventure in the gaming world. Whether you&rsquo;re a casual or hardcore gamer, we&rsquo;re your go-to for the latest news, tips, and trends.', 'spiel' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
		<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--70)"><?php echo esc_html__( 'Subscribe to our newsletters. We’ll keep you in the loop.', 'spiel' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:jetpack/subscriptions {"submitButtonText":"➔","buttonBackgroundColor":"contrast","textColor":"base","borderColor":"secondary","successMessage":"An email was just sent to confirm your subscription.","className":"is-style-compact","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} /-->

		<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
		<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--70)">
			<!-- wp:social-link {"url":"#","service":"facebook"} /-->
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
			<!-- wp:social-link {"url":"#","service":"tiktok"} /-->
			<!-- wp:social-link {"url":"#","service":"mastodon"} /-->
			<!-- wp:social-link {"url":"#","service":"youtube"} /-->
			<!-- wp:social-link {"url":"#","service":"x"} /-->
			<!-- wp:social-link {"url":"#","service":"twitch"} /-->
		</ul>
		<!-- /wp:social-links -->

		<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0px"}},"border":{"top":{"color":"var:preset|color|secondary","style":"solid","width":"1px"}}}} -->
	<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--secondary);border-top-style:solid;border-top-width:1px;margin-top:0px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
		<p class="has-text-align-center has-x-small-font-size">
		<?php
			$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'spiel' ) ) . '" rel="nofollow">WordPress</a>';
			echo sprintf(
				/* Translators: WordPress link. */
				esc_html__( 'Designed with %1$s', 'spiel' ),
				$wordpress_link
			);
			?>
		</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
