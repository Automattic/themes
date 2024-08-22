<?php
/**
 * Title: Testimonials
 * Slug: cakely/text-testimonials
 * Categories: text
 * Viewport width: 1488
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"accent-two","layout":{"type":"default"}} -->
<div class="wp-block-group has-accent-two-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">
	<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/cake-pattern.png","isRepeated":true,"dimRatio":0,"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-cover is-repeated" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
		<div role="img" class="wp-block-cover__image-background is-repeated" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/cake-pattern.png)"></div>
		<div class="wp-block-cover__inner-container">
			<!-- wp:heading {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"letterSpacing":"0.1em","textTransform":"uppercase"}},"textColor":"primary","fontSize":"medium"} -->
			<h2 class="wp-block-heading alignwide has-primary-color has-text-color has-link-color has-medium-font-size" style="letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html__( 'Happy Customers', 'cakely' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:columns {"align":"wide"} -->
			<div class="wp-block-columns alignwide">
				<!-- wp:column {"width":"33.33%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
				<div class="wp-block-column" style="flex-basis:33.33%">
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"width":"1px","color":"#E40982","radius":"8px"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="wp-block-group has-border-color has-base-background-color has-background" style="border-color:#E40982;border-width:1px;border-radius:8px;min-height:100%;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
						<!-- wp:jetpack/rating-star {"rating":5,"color":"#E40982"} -->
						<figure class="wp-block-jetpack-rating-star" style="text-align:left"><span style="color:#E40982">★</span><span style="color:#E40982">★</span><span style="color:#E40982">★</span><span style="color:#E40982">★</span><span style="color:#E40982">★</span></figure>
						<!-- /wp:jetpack/rating-star -->

						<!-- wp:paragraph -->
						<p><?php echo esc_html__( '"I&rsquo;m always skeptical about ordering cakes online, but you&rsquo;ve changed my mind. The lemon drizzle cake was simply divine – tangy, sweet, and beautifully presented. It was the star of our tea party. Can&rsquo;t wait to order again!"', 'cakely' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph -->
						<p><?php echo esc_html__( '— Sophie, Haywards Heath', 'cakely' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"33.33%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
				<div class="wp-block-column" style="flex-basis:33.33%">
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"width":"1px","color":"#E40982","radius":"8px"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="wp-block-group has-border-color has-base-background-color has-background" style="border-color:#E40982;border-width:1px;border-radius:8px;min-height:100%;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
						<!-- wp:jetpack/rating-star {"rating":5,"color":"#E40982"} -->
						<figure class="wp-block-jetpack-rating-star" style="text-align:left"><span style="color:#E40982">★</span><span style="color:#E40982">★</span><span style="color:#E40982">★</span><span style="color:#E40982">★</span><span style="color:#E40982">★</span></figure>
						<!-- /wp:jetpack/rating-star -->

						<!-- wp:paragraph -->
						<p><?php echo esc_html__( '"I ordered a chocolate fudge cake for my wife&rsquo;s birthday and it was a hit! The cake was rich, moist, and delivered right on time. Everyone asked where it was from. Thank you for making our celebration extra special!"', 'cakely' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph -->
						<p><?php echo esc_html__( '— James, Scaynes Hill', 'cakely' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"33.33%","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
				<div class="wp-block-column" style="flex-basis:33.33%">
					<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}},"border":{"width":"1px","color":"#E40982","radius":"8px"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
					<div class="wp-block-group has-border-color has-base-background-color has-background" style="border-color:#E40982;border-width:1px;border-radius:8px;min-height:100%;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
						<!-- wp:jetpack/rating-star {"rating":5,"color":"#E40982"} -->
						<figure class="wp-block-jetpack-rating-star" style="text-align:left"><span style="color:#E40982">★</span><span style="color:#E40982">★</span><span style="color:#E40982">★</span><span style="color:#E40982">★</span><span style="color:#E40982">★</span></figure>
						<!-- /wp:jetpack/rating-star -->

						<!-- wp:paragraph -->
						<p><?php echo esc_html__( '"As a busy mom, I rarely have time to bake. Your brownies were a lifesaver for my son&rsquo;s school event. They were deliciously gooey and the kids loved them. Thank you for your prompt service and for saving the day!"', 'cakely' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph -->
						<p><?php echo esc_html__( '— Emily, Lindfield', 'cakely' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
	</div>
	<!-- /wp:cover -->
</div>
<!-- /wp:group -->
