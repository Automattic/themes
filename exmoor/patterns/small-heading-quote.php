<?php
/**
 * Title: Small Heading and a Quote
 * Slug: exmoor/small-heading-quote
 * Categories: featured
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8vw","right":"var:preset|spacing|60","bottom":"8vw","left":"var:preset|spacing|60"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:8vw;padding-right:var(--wp--preset--spacing--60);padding-bottom:8vw;padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"},"spacing":{"margin":{"top":"8px"}}},"textColor":"base","fontSize":"small"} -->
			<h2 class="wp-block-heading has-base-color has-text-color has-small-font-size" style="margin-top:8px;font-style:normal;font-weight:700;text-transform:uppercase"><?php echo esc_html__( 'What People Say', 'exmoor' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"75%","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column" style="flex-basis:75%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"xx-large"} -->
			<p class="has-xx-large-font-size" style="font-style:italic;font-weight:400"><?php echo esc_html__( '&ldquo;We booked our honeymoon with Exmoor, and it was simply incredible. They took care of everything, even our packing list. Thank you!&rdquo;', 'exmoor' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"small"} -->
			<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php echo esc_html__( '— William & Megan James', 'exmoor' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
