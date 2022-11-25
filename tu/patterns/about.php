<?php
/**
 * Title: About
 * Slug: tu/about
 * Categories: featured
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px">
	<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"left":"0px"}}}} -->
	<div class="wp-block-columns alignfull">
		<!-- wp:column {"width":"66.5%","style":{"spacing":{"padding":{"right":"0px","left":"0px"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-column" style="padding-right:0px;padding-left:0px;flex-basis:66.5%">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/micah-williams-hTmaobx98Ro-unsplash.jpg" alt="<?php _e( 'A picture of a woman', 'tu' ); ?>"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"bottom","width":"33.5%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:33.5%">
			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"max(48px, 5.5vw)","lineHeight":0.9,"fontStyle":"normal","fontWeight":"700"}}} -->
			<h1 style="font-size:max(48px, 5.5vw);font-style:normal;font-weight:700;line-height:0.9"><?php echo wp_kses_post( __( 'Wang<br>Cheung', 'tu' ) ); ?></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"align":"full","style":{"spacing":{"blockGap":{"left":"0px"}}}} -->
	<div class="wp-block-columns alignfull">
		<!-- wp:column {"width":"67%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","justifyContent":"right"}} -->
		<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:67%">
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Born and raised in New York, Wang Cheung was exposed to a myriad of cultures and design expressions. She developed an interest in graphic and audiovisual design from a young age but it was Fashion Design the one that stole her heart and took her to Parsons as soon as she finished school. She has since then worked with many renowned brands and artists and has very recently created her own label, &ldquo;Stillness&rdquo;.', 'tu' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33%","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50);flex-basis:33%"></div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"2rem"} -->
	<div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
