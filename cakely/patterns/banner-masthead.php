<?php
/**
 * Title: Masthead
 * Slug: cakely/banner-masthead
 * Categories: banner
 * Viewport width: 1488
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"0.93","textTransform":"uppercase","letterSpacing":"0em"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"xxx-large"} -->
		<h1 class="wp-block-heading has-primary-color has-text-color has-link-color has-xxx-large-font-size" style="font-style:normal;font-weight:700;letter-spacing:0em;line-height:0.93;text-transform:uppercase"><?php echo esc_html__( 'Cake Delivery in Scaynes Hill', 'cakely' ); ?></h1>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
		<p style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html__( 'Savour the taste of luxury with our delectable cakes in Scaynes Hill. Perfect for any occasion, from indulgent brownies for your sweet cravings to last-minute, bespoke birthday cakes. Trust us to bring sweetness to your doorstep, every time.', 'cakely' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"0px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:0px">
		<!-- wp:heading {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"medium"} -->
		<h2 class="wp-block-heading alignwide has-primary-color has-text-color has-link-color has-medium-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html__( 'Our Specialities', 'cakely' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
			<div class="wp-block-column" style="flex-basis:25%">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
				<figure class="wp-block-image size-full"><a href="#"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/cotton-candy-cake.jpg" alt="" class="" style="aspect-ratio:3/4;object-fit:cover"/></a></figure>
				<!-- /wp:image -->

				<!-- wp:paragraph -->
				<p><a href="#"><?php echo esc_html__( 'Cakes', 'cakely' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
			<div class="wp-block-column" style="flex-basis:25%">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
				<figure class="wp-block-image size-full"><a href="#"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/wedding-cake.jpg" alt="" style="aspect-ratio:3/4;object-fit:cover"/></a></figure>
				<!-- /wp:image -->

				<!-- wp:paragraph -->
				<p><a href="#"><?php echo esc_html__( 'Weddings &amp; Events', 'cakely' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
			<div class="wp-block-column" style="flex-basis:25%">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
				<figure class="wp-block-image size-full"><a href="#"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/macarons.jpg" alt="" class="" style="aspect-ratio:3/4;object-fit:cover"/></a></figure>
				<!-- /wp:image -->

				<!-- wp:paragraph -->
				<p><a href="#"><?php echo esc_html__( 'Macarons', 'cakely' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
			<div class="wp-block-column" style="flex-basis:25%">
				<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
				<figure class="wp-block-image size-full"><a href="#"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/cupcakes.jpg" alt="" class="" style="aspect-ratio:3/4;object-fit:cover"/></a></figure>
				<!-- /wp:image -->

				<!-- wp:paragraph -->
				<p><a href="#"><?php echo esc_html__( 'Cupcakes', 'cakely' ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
