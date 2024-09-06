<?php
/**
 * Title: Masthead
 * Slug: margarethe/masthead
 * Categories: featured, banners
 */
declare( strict_types = 1 );
?>

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"width":""} -->
	<div class="wp-block-column">
		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.04em"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"small"} -->
		<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);letter-spacing:0.04em;text-transform:uppercase"><?php esc_html_e( 'What I do', 'margarethe' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"65.16%"} -->
	<div class="wp-block-column" style="flex-basis:65.16%">
		<!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"uppercase","lineHeight":"0.89"}},"fontSize":"xxxx-large"} -->
		<h1 class="wp-block-heading has-xxxx-large-font-size" style="line-height:0.89;text-transform:uppercase"><?php esc_html_e( 'Mindset performance coaching', 'margarethe' ); ?></h1>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->


<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"width":"65.16%"} -->
	<div class="wp-block-column" style="flex-basis:65.16%">
		<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/StockSnap_YIPAMY1N5F.jpg" alt="" class=""/></figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":""} -->
	<div class="wp-block-column">
		<!-- wp:paragraph {"style":{"typography":{"textTransform":"none"}}} -->
		<p style="text-transform:none"><?php esc_html_e( 'Hi, I&rsquo;m Margarethe, your partner on this exciting journey to self-discovery and success.', 'margarethe' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'With personalized mindset coaching, we&rsquo;ll work together to break through barriers, harness your unique potential, and help you achieve your personal and professional goals. I&rsquo;m here to guide you every step of the way. Let&rsquo;s embark on this adventure together.', 'margarethe' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><a href="#"><?php esc_html_e( 'More about me', 'margarethe' ); ?></a></p>
		<!-- /wp:paragraph -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size"><?php esc_html_e( 'Connect with me:', 'margarethe' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"base","iconColorValue":"#ffffff","iconBackgroundColor":"primary","iconBackgroundColorValue":"#000000","size":"has-small-icon-size","className":"is-style-default"} -->
			<ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color is-style-default">
				<!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->

				<!-- wp:social-link {"url":"https://instagram.com/","service":"instagram"} /-->

				<!-- wp:social-link {"url":"https://tumblr.com/","service":"tumblr"} /-->

				<!-- wp:social-link {"url":"https://tiktok.com/","service":"tiktok"} /-->

				<!-- wp:social-link {"url":"https://twitter.com/","service":"twitter"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
