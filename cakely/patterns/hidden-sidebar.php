<?php
/**
 * Title: Sidebar
 * Slug: cakely/hidden-sidebar
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"tagName":"aside","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<aside class="wp-block-group">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","className":"wp-block-heading","fontSize":"medium"} -->
		<h3 class="wp-block-heading has-primary-color has-text-color has-link-color has-medium-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html__( 'Welcome!', 'cakely' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"className":"has-small-font-size","fontSize":"medium"} -->
		<p class="has-small-font-size has-medium-font-size"><?php echo esc_html__( 'Dive into a world of inventive recipes and simple, step-by-step guides to crafting your own delightful treats. Your feedback and messages are always cherished. Enjoy exploring these delicious creations.', 'cakely' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#ffffff","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
		<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->

			<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

			<!-- wp:social-link {"url":"https://www.tiktok.com/","service":"tiktok"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","className":"wp-block-heading","fontSize":"medium"} -->
		<h3 class="wp-block-heading has-primary-color has-text-color has-link-color has-medium-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html__( 'Subscribe', 'cakely' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html__( 'Stay updated with our latest news and recipes by joining our newsletter.', 'cakely' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:jetpack/subscriptions {"submitButtonText":"→","fontSize":"13px","customFontSize":"13px","borderWeight":1,"padding":11,"spacing":4} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","className":"wp-block-heading","fontSize":"medium"} -->
		<h3 class="wp-block-heading has-primary-color has-text-color has-link-color has-medium-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html__( 'Categories', 'cakely' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:categories /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"level":3,"style":{"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","className":"wp-block-heading","fontSize":"medium"} -->
		<h3 class="wp-block-heading has-primary-color has-text-color has-link-color has-medium-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html__( 'Tags', 'cakely' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:tag-cloud {"largestFontSize":"8pt","className":"is-style-outline"} /-->
	</div>
	<!-- /wp:group -->
</aside>
<!-- /wp:group -->
