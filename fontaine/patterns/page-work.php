<?php
/**
 * Title: Work Page
 * Slug: fontaine/page-work
 * Categories: page
 * Viewport width: 1600
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"className":"blending-mode","layout":{"type":"default"}} -->
<div class="wp-block-group blending-mode">
	<!-- wp:template-part {"slug":"header","tagName":"header"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:0;padding-bottom:var(--wp--preset--spacing--70);padding-left:0">

	<!-- wp:pattern {"slug":"fontaine/gallery-project"} /-->

	<!-- wp:spacer {"height":"var:preset|spacing|60","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
	<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--60)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:group {"tagName":"section","metadata":{"name":"Project","categories":["gallery"]},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0px","bottom":"0px"}},"dimensions":{"minHeight":""},"position":{"type":""}},"layout":{"type":"default"}} -->
	<section class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
			<div class="wp-block-column is-vertically-aligned-bottom">
				<!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1"}},"fontSize":"xx-large"} -->
				<h1 class="wp-block-heading has-xx-large-font-size" style="line-height:1"><?php echo esc_html__( 'Jungle Beat Ensemble', 'fontaine' ); ?></h1>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
			<div class="wp-block-column">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"media"} -->
				<figure class="wp-block-image size-full"><a href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Whimsical-Panda-on-Turntable.jpg"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Whimsical-Panda-on-Turntable.jpg" alt="" /></a></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column {"width":"33.34%"} -->
			<div class="wp-block-column" style="flex-basis:33.34%">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><a href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Vintage-inspired-Red-Turntable-and-Panda-Speaker-Setup.jpg"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Vintage-inspired-Red-Turntable-and-Panda-Speaker-Setup.jpg" alt="" /></a></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"33.34%"} -->
			<div class="wp-block-column" style="flex-basis:33.34%">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"media"} -->
				<figure class="wp-block-image size-full"><a href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Tiger-Themed-Kids-Portable-Radio.jpg"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Tiger-Themed-Kids-Portable-Radio.jpg" alt="" /></a></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:image {"sizeSlug":"full","linkDestination":"media"} -->
				<figure class="wp-block-image size-full"><a href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Playful-Panda-Boombox.jpg"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Playful-Panda-Boombox.jpg" alt="" /></a></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns -->
		<div class="wp-block-columns">
			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"fontSize":"medium"} -->
					<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Delivery', 'fontaine' ); ?>_</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p><?php echo esc_html__( 'Art Direction', 'fontaine' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><?php echo esc_html__( 'Product Design', 'fontaine' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph -->
					<p><?php echo esc_html__( 'Visual Identity', 'fontaine' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"fontSize":"medium"} -->
					<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Year', 'fontaine' ); ?>_</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p><?php echo esc_html__( '2023', 'fontaine' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"fontSize":"medium"} -->
					<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'About', 'fontaine' ); ?>_</h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p><?php echo esc_html__( 'The Jungle Beats Ensemble merges whimsical animal designs with high-quality sound, creating an engaging audio experience for all ages. Each piece, from the roaring tiger radio to the charming panda turntable, is engineered for durability and clear acoustics. This collection isn&rsquo;t just about listening to music—it&rsquo;s about playful interaction, a touch of nature, and the joy of shared moments.', 'fontaine' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"fontSize":"medium"} -->
						<h2 class="wp-block-heading has-medium-font-size"><?php echo esc_html__( 'Design', 'fontaine' ); ?>_</h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p><?php echo esc_html__( 'The design of the "Jungle Beats Ensemble" takes center stage with its bold colors and endearing animal motifs that invite interaction and storytelling. The tiger radio, with its striking orange hue and playful features, captures the essence of the jungle&rsquo;s vibrant energy. The panda turntable setups, in classic monochrome with heartwarming details, echo the gentle nature of these beloved creatures. Every curve and contour is intentional, crafted not only for visual impact but also for ergonomic handling by its users, young and old.', 'fontaine' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:paragraph -->
					<p><?php echo esc_html__( 'Attention to detail is evident in the tactile elements and user-friendly interfaces of each piece. The products boast a sturdy build, ready to withstand the eager touches of a child&rsquo;s exploration. From the portable radio&rsquo;s easy-to-grip handle to the turntable&rsquo;s smooth, vinyl-spinning surface, the design invites users to engage with both sight and touch. The "Jungle Beats Ensemble" stands as a testament to design that goes beyond aesthetics, offering a multisensory experience that harmonizes the natural charm of the wild with the rhythms of modern life.', 'fontaine' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</section>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"position":{"type":""}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">
	<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
</div>
<!-- /wp:group -->
