<?php
/**
 * Title: Sidebar
 * Slug: bedrock/sidebar-with-recent-posts
 * Inserter: no
 */
declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"borderColor":"contrast","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-border-color has-contrast-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"className":"wp-block-heading"} -->
		<h3 class="wp-block-heading" style="text-transform:uppercase"><?php echo esc_html__( 'Hey!', 'bedrock' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"has-small-font-size","fontSize":"small"} -->
		<p class="has-small-font-size"><?php echo esc_html__( 'I&rsquo;m Bedrock. Discover the ultimate Minetest resource - your go-to guide for expert tutorials, stunning mods, and exclusive stories. Elevate your game with insider knowledge and tips from seasoned Minetest enthusiasts.', 'bedrock' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
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

	<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"borderColor":"contrast","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-border-color has-contrast-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"className":"wp-block-heading"} -->
		<h3 class="wp-block-heading" style="text-transform:uppercase"><?php echo esc_html__( 'Join the club', 'bedrock' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"fontSize":"small"} -->
		<p class="has-small-font-size"><?php echo esc_html__( 'Stay updated with our latest tips and other news by joining our newsletter.', 'bedrock' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:jetpack/subscriptions {"submitButtonText":"→","fontSize":"13px","customFontSize":"13px","borderWeight":0,"padding":8,"spacing":4} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"borderColor":"contrast","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-border-color has-contrast-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"className":"wp-block-heading"} -->
		<h3 class="wp-block-heading" style="text-transform:uppercase"><?php echo esc_html__( 'Categories', 'bedrock' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:categories /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"borderColor":"contrast","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-border-color has-contrast-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"className":"wp-block-heading"} -->
		<h3 class="wp-block-heading" style="text-transform:uppercase"><?php echo esc_html__( 'Tags', 'bedrock' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:tag-cloud {"largestFontSize":"8pt","className":"is-style-outline"} /--></div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"borderColor":"contrast","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-border-color has-contrast-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"className":"wp-block-heading"} -->
		<h3 class="wp-block-heading" style="text-transform:uppercase"><?php echo esc_html__( 'Recent Posts', 'bedrock' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
		<div class="wp-block-query">
			<!-- wp:post-template -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:post-featured-image {"isLink":true} /-->
					<!-- wp:post-title {"level":4,"isLink":true,"fontSize":"medium"} /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"borderColor":"contrast","layout":{"type":"constrained"}} -->
	<div class="wp-block-group has-border-color has-contrast-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase"}},"className":"wp-block-heading"} -->
		<h3 class="wp-block-heading" style="text-transform:uppercase"><?php echo esc_html__( 'Blogroll', 'bedrock' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><a href="#"><?php echo esc_html__( 'Minetest Blog', 'bedrock' ); ?></a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><a href="#"><?php echo esc_html__( 'Minetest', 'bedrock' ); ?></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
