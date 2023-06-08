<?php
/**
 * Title: Sidebar
 * Slug: aldente/sidebar
 * Categories: featured
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><?php echo esc_html__( 'We are devoted food enthusiasts who believe in the power of a good meal to travel the world without leaving our kitchen in the heart of Manchester. We find joy in crafting, cooking, and above all, devouring delicious dishes that not only satisfy the tastebuds but also nourish the soul.', 'aldente' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><?php echo esc_html__( 'Find us on:', 'aldente' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","iconBackgroundColor":"contrast","iconBackgroundColorValue":"#020e01","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":{"left":"var:preset|spacing|30"}}}} -->
	<ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color" style="margin-top:var(--wp--preset--spacing--30)">
		<!-- wp:social-link {"url":"#","service":"facebook"} /-->

		<!-- wp:social-link {"url":"#","service":"instagram"} /-->

		<!-- wp:social-link {"url":"#","service":"tiktok"} /-->

		<!-- wp:social-link {"url":"#","service":"pinterest"} /-->

		<!-- wp:social-link {"url":"#","service":"youtube"} /-->

		<!-- wp:social-link {"url":"#","service":"twitter"} /-->
	</ul>
	<!-- /wp:social-links -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"secondary","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-secondary-background-color has-text-color has-background" style="margin-top:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
	<h3 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Join the fun!	', 'aldente' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"x-small"} -->
	<p class="has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Stay updated with our latest recipes and other news by joining our newsletter.', 'aldente' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:jetpack/subscriptions {"submitButtonText":"→","buttonBackgroundColor":"contrast","textColor":"base","fontSize":"0.938rem","customFontSize":"0.938rem","customBorderColor":"#4e4e4e","padding":7,"spacing":4,"successMessage":""} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"level":3} -->
	<h3 class="wp-block-heading"><?php echo esc_html__( 'Categories', 'aldente' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:categories {"showPostCounts":true,"fontSize":"small"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"level":3} -->
	<h3 class="wp-block-heading"><?php echo esc_html__( 'Recent Posts', 'aldente' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
	<div class="wp-block-query">
		<!-- wp:post-template -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->

			<!-- wp:post-terms {"term":"category","style":{"spacing":{"margin":{"top":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"fontSize":"x-small"} /-->

			<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"0px"}}},"fontSize":"large"} /-->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
	<!-- /wp:group -->

