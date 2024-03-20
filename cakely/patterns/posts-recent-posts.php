<?php
/**
 * Title: Recent Posts
 * Slug: cakely/posts-recent-posts
 * Categories: posts, banner
 * Viewport width: 1488
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"32%"} -->
		<div class="wp-block-column" style="flex-basis:32%">
			<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"medium"} -->
			<h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-medium-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html__( 'On the Blog', 'cakely' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Dive into a world of inventive recipes and simple, step-by-step guides to crafting your own delightful treats. Your feedback and messages are always cherished. Enjoy exploring these delicious creations.', 'cakely' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"600","textTransform":"none"}}} -->
			<p style="font-style:normal;font-weight:600;line-height:1.1;text-transform:none"><a href="#"><?php echo wp_kses_post( __( 'Read<br>All Posts &rarr;', 'cakely' ) ); ?></a></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%">
			<!-- wp:query {"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
			<div class="wp-block-query alignwide">
				<!-- wp:post-template {"layout":{"type":"grid","columnCount":4}} -->
					<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|30"}}},"layout":{"inherit":false}} -->
					<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
						<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"none","lineHeight":"1.33","letterSpacing":"0em"}},"fontSize":"medium","fontFamily":"lato"} /-->

						<!-- wp:post-date /-->
					</div>
					<!-- /wp:group -->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
