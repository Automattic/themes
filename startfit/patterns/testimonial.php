<?php
/**
 * Title: Testimonials
 * Slug: startfit/testimonial
 * Categories: featured
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|50","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-color has-secondary-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"20%"} -->
		<div class="wp-block-column" style="flex-basis:20%">
			<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.04em"},"spacing":{"margin":{"top":"11px"}}},"textColor":"contrast","fontSize":"small","fontFamily":"system-font"} -->
			<h2 class="wp-block-heading has-contrast-color has-text-color has-system-font-font-family has-small-font-size" style="margin-top:11px;font-style:normal;font-weight:700;letter-spacing:0.04em;text-transform:uppercase"><?php echo esc_html__( 'What People Say', 'startfit' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"80%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column" style="flex-basis:80%">
			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"xx-large"} -->
			<p class="has-xx-large-font-size" style="font-style:normal;font-weight:400"><?php echo esc_html__( 'StartFit didn&rsquo;t just change my workout routine, it revolutionised my entire lifestyle. I&rsquo;ve never felt stronger, healthier or happier!', 'startfit' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"align":"center","width":48,"height":48,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"50%"}},"className":"is-style-default"} -->
				<figure class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-default">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/user-avatar.png" alt="" class="" style="border-radius:50%;width:48px;height:48px" width="48" height="48"/>
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
					<p class="has-text-align-left has-small-font-size" style="font-style:normal;font-weight:700"><?php echo esc_html__( 'Kate Williams', 'startfit' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1.1"}},"fontSize":"small"} -->
					<p class="has-text-align-left has-small-font-size" style="line-height:1.1"><?php echo esc_html__( 'in Hove', 'startfit' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
