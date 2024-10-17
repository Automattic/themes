<?php
/**
 * Title: Video
 * Slug: nausicaa/video
 * Categories: featured, banners
 */
?>

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"width":"%"} -->
	<div class="wp-block-column">
		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.04em"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"small"} -->
		<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);letter-spacing:0.04em;text-transform:uppercase"><?php echo esc_html__( 'Course preview', 'nausicaa' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"65.16%"} -->
	<div class="wp-block-column" style="flex-basis:65.16%">
		<!-- wp:heading {"style":{"typography":{"textTransform":"none","lineHeight":"1.05"}},"fontSize":"xxx-large"} -->
		<h2 class="wp-block-heading has-xxx-large-font-size" style="line-height:1.05;text-transform:none"><?php echo esc_html__( 'Success Synergy: Bridging passion, purpose, and performance', 'nausicaa' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"},"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">
	<!-- wp:column {"width":"65.16%"} -->
	<div class="wp-block-column" style="flex-basis:65.16%">
		<!-- wp:embed {"url":"https://videopress.com/v/Ozp4y2Qm","type":"video","providerNameSlug":"videopress","responsive":true,"className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
		<figure class="wp-block-embed is-type-video is-provider-videopress wp-block-embed-videopress wp-embed-aspect-16-9 wp-has-aspect-ratio">
			<div class="wp-block-embed__wrapper">
				https://videopress.com/v/Ozp4y2Qm
			</div>
		</figure>
		<!-- /wp:embed -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":""} -->
	<div class="wp-block-column">
		<!-- wp:paragraph -->
		<p><?php echo esc_html__( 'This snippet showcases our course, merging passion with purpose for peak performance. Discover techniques empowering many to elevate their life and work. Experience success synergy and see the potential ahead.', 'nausicaa' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"width":100} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Start course', 'nausicaa' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
