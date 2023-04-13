<?php
/**
 * Title: Front Page
 * Slug: kigen/front-page
 * Categories: featured
 */
?>
<!-- wp:template-part {"slug":"header","theme":"kigen","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:gallery {"columns":4,"imageCrop":false,"linkTo":"media","sizeSlug":"full","align":"wide"} -->
	<figure class="wp-block-gallery alignwide has-nested-images columns-4">
		<!-- wp:image {"sizeSlug":"full","linkDestination":"media"} -->
		<figure class="wp-block-image size-full"><a href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/11410posdl6.jpg"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/11410posdl6.jpg" alt="" /></a></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"full","linkDestination":"media"} -->
		<figure class="wp-block-image size-full"><a href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/11410posdl3.jpg"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/11410posdl3.jpg" alt="" /></a></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"full","linkDestination":"media"} -->
		<figure class="wp-block-image size-full"><a href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/11410posdl5.jpg"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/11410posdl5.jpg" alt="" /></a></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"full","linkDestination":"media"} -->
		<figure class="wp-block-image size-full"><a href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/11410posdl4.jpg"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/11410posdl4.jpg" alt="" /></a></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image size-full"><a href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/11410posdl0.jpg"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/11410posdl0.jpg" alt="" /></a></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"full","linkDestination":"media"} -->
		<figure class="wp-block-image size-full"><a href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/11410posdl7.jpg"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/11410posdl7.jpg" alt="" /></a></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"full","linkDestination":"media"} -->
		<figure class="wp-block-image size-full"><a href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/11410posdl2.jpg"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/11410posdl2.jpg" alt="" /></a></figure>
		<!-- /wp:image -->

		<!-- wp:image {"sizeSlug":"full","linkDestination":"media"} -->
		<figure class="wp-block-image size-full"><a href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/11410posdl1.jpg"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/11410posdl1.jpg" alt="" /></a></figure>
		<!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
			<div class="wp-block-group" style="min-height:100%">
				<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph -->
					<p><?php echo esc_html__( 'Get in touch:', 'kigen' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
						<!-- wp:navigation {"ref":449,"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"0px"}}} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:template-part {"slug":"footer-2","theme":"kigen"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( "Hi, my name is Augustus Jansson, born in 1866 in Somerville, Massachusetts. As a passionate illustrator, I pursued a career in greeting cards and advertisements. By 1903, I was known for my original poster work and also excelled as a postcard artist, table designer, cartoonist, and children's book author.", 'kigen' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'In 1903, I began a seven-year collaboration with Queen City Publishing, creating full-page layouts like the renowned Ink Beasts Parade, feakigenring the orange-yellow Ibexiakigencus and Magenta Ponies. I designed a series of doll-like figures and advertisements that were striking and ahead of their time, with an art deco feel. My style resembled playing card figures, which I used in a series of American Revolution stories published in The Sunday Herald around 1904.', 'kigen' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph -->
			<p><?php echo esc_html__( "As an artist, I pushed boundaries and left a lasting impact on illustration and design. My journey taught me the importance of perseverance, creativity, and staying true to one's unique vision.", 'kigen' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"kigen/border"} /-->
