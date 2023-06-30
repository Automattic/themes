<?php
/**
 * Title: Masthead
 * Slug: exmoor/masthead
 * Categories: featured
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0">
	<!-- wp:spacer {"height":"64px"} -->
	<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:columns {"verticalAlignment":"bottom","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-bottom">
		<!-- wp:column {"verticalAlignment":"bottom","width":"72%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:72%">
			<!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"lineHeight":"0.8","textTransform":"uppercase","fontStyle":"normal","fontWeight":"900"}},"fontSize":"huge","fontFamily":"raleway"} -->
			<h1 class="wp-block-heading alignwide has-raleway-font-family has-huge-font-size" style="font-style:normal;font-weight:900;line-height:0.8;text-transform:uppercase"><?php echo wp_kses_post( __( 'Your<br>journey<br>begins', 'exmoor' ) ); ?></h1>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"bottom","width":"28%"} -->
		<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:28%">
			<!-- wp:paragraph {"align":"right","style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"large"} -->
			<p class="has-text-align-right has-link-color has-large-font-size" style="font-style:italic;font-weight:400"><a href="#"><?php echo esc_html__( 'Explore Our Offers', 'exmoor' ); ?></a>→
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:spacer {"height":"32px"} -->
	<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
</div>
<!-- /wp:group -->
