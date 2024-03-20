<?php
/**
 * Title: Default footer
 * Slug: bedrock/footer
 * Categories: featured, footer
 * Block Types: core/template-part/footer
 */
declare( strict_types = 1 );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|50","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|contrast","width":"1px"},"right":{},"bottom":{},"left":{}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="border-top-color:var(--wp--preset--color--contrast);border-top-width:1px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group">
				<!-- wp:site-title {"level":0,"style":{"layout":{"selfStretch":"fill","flexSize":null},"typography":{"lineHeight":"1.43"}}} /-->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Discover the ultimate Minetest resource - your go-to guide for expert tutorials, stunning mods, and exclusive stories. Elevate your game with insider knowledge and tips from seasoned Minetest enthusiasts.', 'bedrock' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
				<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
					<!-- wp:social-link {"url":"https://www.twitch.tv/","service":"twitch"} /-->
					<!-- wp:social-link {"url":"https://twitter.com/","service":"x"} /-->
					<!-- wp:social-link {"url":"https://www.tiktok.com/","service":"tiktok"} /-->
					<!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->
					<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","lineHeight":"1.43"}},"className":"wp-block-heading"} -->
			<h3 class="wp-block-heading" style="font-style:normal;font-weight:700;line-height:1.43;text-transform:uppercase"><?php echo esc_html__( 'Subscribe', 'bedrock' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Enter your email to sign up for our newsletter. We promise to respect your inbox.', 'bedrock' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:jetpack/subscriptions {"fontSize":"1.125rem","customFontSize":"1.125rem","borderWeight":0,"padding":8} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide has-link-color" style="margin-top:var(--wp--preset--spacing--60)">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><a href="#"><?php echo esc_html__( 'Terms of Use', 'bedrock' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><a href="#"><?php echo esc_html__( 'Privacy and Cookies', 'bedrock' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:paragraph {"lock":{"move":false,"remove":true},"className":"has-small-font-size","fontSize":"small"} -->
		<p class="has-small-font-size"><?php
			/* Translators: WordPress link. */
			$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'bedrock' ) ) . '" rel="nofollow">WordPress</a>';
			echo sprintf(
				esc_html__( 'Designed with %1$s', 'bedrock' ),
				$wordpress_link
		);?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
