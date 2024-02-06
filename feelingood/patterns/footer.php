<?php
/**
 * Title: Default footer
 * Slug: feelingood/footer
 * Categories: featured, footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group alignfull" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
			<p class="has-text-align-center has-medium-font-size"><?php echo esc_html__( 'Find me on:', 'feelingood' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:image {"width":"auto","height":"90px","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized">
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/nicehand.png" alt="" class="" style="width:auto;height:90px"/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->

		<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#ffffff","size":"has-normal-icon-size","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
		<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"https://www.twitch.tv/","service":"twitch"} /-->

			<!-- wp:social-link {"url":"https://twitter.com/","service":"x"} /-->

			<!-- wp:social-link {"url":"https://www.tiktok.com/","service":"tiktok"} /-->

			<!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->

			<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide has-link-color" style="margin-top:var(--wp--preset--spacing--60)">
		<!-- wp:paragraph {"align":"center","lock":{"move":false,"remove":true},"className":"has-small-font-size","fontSize":"x-small"} -->
		<p class="has-text-align-center has-small-font-size has-x-small-font-size"><?php
			/* Translators: WordPress link. */
			$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'feelingood' ) ) . '" rel="nofollow">WordPress</a>';
			echo sprintf(
				esc_html__( 'Designed with %1$s', 'feelingood' ),
				$wordpress_link
		);?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
