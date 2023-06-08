<?php
/**
 * Title: Paragraph
 * Slug: exmoor/paragraph
 * Categories: featured
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"8vw","bottom":"8vw","right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:8vw;padding-right:var(--wp--preset--spacing--60);padding-bottom:8vw;padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"right"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"align":"left","fontSize":"large"} -->
		<p class="has-text-align-left has-large-font-size"><?php echo esc_html__( 'Enrich your life with our meticulously curated travel packages, each designed to bring you the best of the destination. Immerse yourself in the local culture, indulge in the exotic cuisine, explore the stunning landscapes, and make lasting memories with loved ones.', 'exmoor' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{":hover":{"color":{"text":"var:preset|color|primary"}},"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"large"} -->
		<p class="has-text-align-left has-link-color has-large-font-size" style="font-style:italic;font-weight:400"><a href="#"><?php echo esc_html__( 'Explore Our Offers', 'exmoor' ); ?></a>→</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
