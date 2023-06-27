<?php
/**
 * Title: Default footer
 * Slug: tenaz/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|50","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center"><?php echo esc_html__( 'Tenaz celebrates the very best in independent journalism. Through the online content we publish, we share our opinions and thoughts on the various problems that the world is facing right now.', 'tenaz' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}}} -->
		<p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--70)"><?php echo esc_html__( 'Subscribe to our newsletters. We’ll keep you in the loop.', 'tenaz' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:jetpack/subscriptions {"submitButtonText":"➔","buttonBackgroundColor":"contrast","textColor":"base","borderColor":"secondary","successMessage":"An email was just sent to confirm your subscription.","className":"is-style-compact","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} /-->

		<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
		<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--70)">
			<!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram"} /-->

			<!-- wp:social-link {"url":"#","service":"youtube"} /-->
		</ul>
		<!-- /wp:social-links -->

		<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"}} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","right":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"2px"}},"border":{"top":{"color":"var:preset|color|secondary","style":"solid","width":"1px"}}}} -->
	<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--secondary);border-top-style:solid;border-top-width:1px;margin-top:2px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
		<p class="has-text-align-center has-x-small-font-size"><?php
			/* Translators: WordPress link. */
			$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'tenaz' ) ) . '" rel="nofollow">WordPress</a>';
			echo sprintf(
				esc_html__( 'Designed with %1$s', 'tenaz' ),
				$wordpress_link
			);
		?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
