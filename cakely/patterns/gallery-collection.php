<?php
/**
 * Title: Collection
 * Slug: cakely/gallery-collection
 * Categories: gallery
 * Viewport width: 1488
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"medium"} -->
	<h2 class="wp-block-heading alignwide has-primary-color has-text-color has-link-color has-medium-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html__( 'Cake collection', 'cakely' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"16.67%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column" style="flex-basis:16.67%">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
			<figure class="wp-block-image size-full"><a href="#"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/cotton-candy-cake.jpg" alt="" class="" style="aspect-ratio:3/4;object-fit:cover"/></a></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p><a href="#"><?php echo esc_html__( 'Cotton Candy Cake', 'cakely' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( '£45.00', 'cakely' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"16.67%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column" style="flex-basis:16.67%">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
			<figure class="wp-block-image size-full"><a href="#"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/chocolate-lovers-cake.jpg" alt="" class="" style="aspect-ratio:3/4;object-fit:cover"/></a></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p><a href="#"><?php echo esc_html__( 'Chocolate Lovers Cake', 'cakely' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( '£45.00', 'cakely' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"16.67%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column" style="flex-basis:16.67%">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
			<figure class="wp-block-image size-full"><a href="#"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/lemon-raspberry-cake.jpg" alt="" class="" style="aspect-ratio:3/4;object-fit:cover"/></a></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group"><!-- wp:paragraph -->
				<p><a href="#"><?php echo esc_html__( 'Lemon Raspberry Cake', 'cakely' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( '£45.00', 'cakely' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"16.67%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column" style="flex-basis:16.67%">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
			<figure class="wp-block-image size-full"><a href="#"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/macaron-crown-cake.jpg" alt="" class="" style="aspect-ratio:3/4;object-fit:cover"/></a></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p><a href="#"><?php echo esc_html__( 'Macaron Crown Cake', 'cakely' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( '£45.00', 'cakely' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"16.67%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
		<div class="wp-block-column" style="flex-basis:16.67%">
			<!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
			<figure class="wp-block-image size-full"><a href="#"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/caramel-crunch-cake.jpg" alt="" class="" style="aspect-ratio:3/4;object-fit:cover"/></a></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p><a href="#"><?php echo esc_html__( 'Caramel Crunch Cake', 'cakely' ); ?></a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( '£45.00', 'cakely' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"16.67%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:16.67%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"typography":{"textTransform":"none","lineHeight":"1.1","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"36px"}}}} -->
				<p style="margin-bottom:36px;font-style:normal;font-weight:600;line-height:1.1;text-transform:none"><a href="#"><?php echo wp_kses_post( __( 'See<br>More<br>Cakes &rarr;', 'cakely' ) ); ?></a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
