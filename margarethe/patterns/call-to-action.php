<?php
/**
 * Title: Call to action
 * Slug: margarethe/call-to-action
 * Categories: featured, call-to-action
 */
declare( strict_types = 1 );
?>

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide">
	<!-- wp:column {"width":""} -->
	<div class="wp-block-column">
		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.04em"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"fontSize":"small"} -->
		<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--30);letter-spacing:0.04em;text-transform:uppercase"><?php echo esc_html__( 'Consultation', 'margarethe' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"65.16%"} -->
	<div class="wp-block-column" style="flex-basis:65.16%">
		<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"none","lineHeight":"1.05"}},"fontSize":"xxx-large"} -->
			<h1 class="wp-block-heading has-xxx-large-font-size" style="line-height:1.05;text-transform:none"><?php echo esc_html__( 'Ready to transform your life?', 'margarethe' ); ?></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"54%"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Schedule your free consultation and find out how mindset coaching can help you.', 'margarethe' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Schedule a session', 'margarethe' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
