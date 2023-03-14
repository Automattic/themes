<?php
/**
 * Title: About
 * Slug: adventurer/about
 * Inserter: yes
 */

?>

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/adventurer_about.jpg'; ?>","dimRatio":50,"overlayColor":"primary","minHeight":630,"minHeightUnit":"px","isDark":false,"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|70","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70);min-height:630px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/adventurer_about.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%"></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"40%","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"primary","textColor":"background"} -->
		<div class="wp-block-column has-background-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);flex-basis:40%">
			<!-- wp:heading -->
			<h2 class="wp-block-heading"><?php echo esc_html__( 'About Me', 'adventurer' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Hi, I’m Austin. I love exploring and writing about the world and getting lost with my camera. This blog is where I write about the things I find, and I hope it gives you some inspiration to go and have your own adventures.', 'adventurer' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"background","textColor":"primary"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-background-background-color has-text-color has-background wp-element-button" href=""><?php echo esc_html__( 'Read Full Bio', 'adventurer' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div></div>
<!-- /wp:cover -->
