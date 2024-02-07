<?php
/**
 * Title: front-page
 * Slug: kaze/front-page
 * Categories: hidden
 * Inserter: no
 */

declare( strict_types = 1 );
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:template-part {"slug":"header","tagName":"header"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%">
			<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
			<main class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column {"width":"34.0137%"} -->
					<div class="wp-block-column" style="flex-basis:34.0137%">
						<!-- wp:heading -->
						<h2 class="wp-block-heading"><?php echo esc_html__( 'Architecture for Bern', 'kaze' ); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph -->
						<p><?php echo esc_html__( 'Nestled at the crossroads of heritage and modernity, Pinnacle Structurae Studio is dedicated to sculpting the skyline of Bern with architectural masterpieces that resonate with Swiss elegance and sustainable innovation. Our two-decade journey of crafting spaces is rooted in a philosophy that marries the historical charm of our city with forward-thinking design, shaping environments that are as functional as they are beautiful.', 'kaze' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph -->
						<p><?php echo esc_html__( 'Our esteemed team, guided by the renowned Lukas Steiner, takes pride in transforming visions into reality, ensuring that each project embodies the spirit of Bern while embracing global standards of architectural excellence. The landmarks we’ve created, from innovative commercial hubs to serene residential retreats, stand as pillars of our dedication to the art and science of building.', 'kaze' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph -->
						<p><?php echo esc_html__( 'We invite you to experience the Pinnacle Structurae Studio difference, where the heritage of Bern inspires structures that speak to the future. Join us in crafting a legacy of architecture that honors the past, enriches the present, and anticipates the needs of tomorrow.', 'kaze' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:heading -->
						<h2 class="wp-block-heading"><?php echo esc_html__( 'Contact', 'kaze' ); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
						<div class="wp-block-group"><!-- wp:paragraph -->
							<p><?php echo wp_kses_post( __( 'Pinnacle Structure Studio<br>Bundesplatz 4390,<br>3005 Bern, Switzerland', 'kaze' ) ); ?></p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html__( 'Phone:', 'kaze' ); ?> +41 12 345 6789</p>
							<!-- /wp:paragraph -->

							<!-- wp:paragraph -->
							<p><?php echo esc_html__( 'Email:', 'kaze' ); ?> <a href="#">info@example.com</a></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"65.9863%"} -->
					<div class="wp-block-column" style="flex-basis:65.9863%">
						<!-- wp:image {"id":90,"sizeSlug":"full","linkDestination":"none"} -->
						<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/andri-klopfenstein-cKXKBCPCgMg-unsplash-1.jpg" alt="" class="wp-image-90"/></figure>
						<!-- /wp:image -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</main>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"wide"} /-->
</div>
<!-- /wp:group -->
