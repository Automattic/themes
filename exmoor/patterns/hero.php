<?php
/**
 * Title: Hero
 * Slug: exmoor/hero
 * Categories: featured
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/StockSnap_K6K80SHQJO-cropped.jpg","dimRatio":0,"focalPoint":{"x":0.7,"y":1},"minHeight":480,"minHeightUnit":"px","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","bottom":"8vw","top":"8vw"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:8vw;padding-right:var(--wp--preset--spacing--60);padding-bottom:8vw;padding-left:var(--wp--preset--spacing--60);min-height:480px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/StockSnap_K6K80SHQJO-cropped.jpg" style="object-position:70% 100%" data-object-fit="cover" data-object-position="70% 100%"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"align":"wide","textColor":"base","layout":{"type":"constrained","contentSize":"","justifyContent":"right"}} -->
			<div class="wp-block-group alignwide has-base-color has-text-color">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"textColor":"base","layout":{"type":"constrained","contentSize":"470px","justifyContent":"left"}} -->
				<div class="wp-block-group has-base-color has-text-color">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}}} -->
					<p style="font-style:italic;font-weight:400"><?php echo esc_html__( '&ldquo;Travel changes you. As you move through this life and this world, you change things slightly, you leave marks behind, however small. And in return, life and travel leaves marks on you.&rdquo;', 'exmoor' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size"><?php echo esc_html__( '—Anthony Bourdain', 'exmoor' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
