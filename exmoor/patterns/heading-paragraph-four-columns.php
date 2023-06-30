<?php
/**
 * Title: Heading, Paragraph, and Four Columns
 * Slug: exmoor/heading-paragraph-four-columns
 * Categories: featured
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"8vw","bottom":"8vw","right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:8vw;padding-right:var(--wp--preset--spacing--60);padding-bottom:8vw;padding-left:var(--wp--preset--spacing--60)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"900","lineHeight":"0.9"}},"fontSize":"xxx-large"} -->
		<h2 class="wp-block-heading has-text-align-left has-xxx-large-font-size" style="font-style:normal;font-weight:900;line-height:0.9;text-transform:uppercase"><?php echo wp_kses_post( __( 'Upcoming<br>Tours', 'exmoor' ) ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
		<p style="margin-top:var(--wp--preset--spacing--40)"><?php echo esc_html__( 'Embark on a journey of discovery with us, where every destination is a new door to a diverse world of people, cultures, traditions, and landscapes.', 'exmoor' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"id":3549,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/StockSnap_RUKEU2R518-768x1024.jpg" alt="" class="wp-image-3549"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php echo esc_html__( 'Muscat', 'exmoor' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Thu 25 Sep  – Tue, 30 Sep', 'exmoor' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"small"} -->
			<p class="has-link-color has-small-font-size" style="font-style:italic;font-weight:400"><a href="#"><?php echo esc_html__( 'Full Details', 'exmoor' ); ?></a>→</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"id":3563,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/sea-water-nature-ocean-sky-sport-682791-pxhere.com_-768x1024.jpg" alt="" class="wp-image-3563"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php echo esc_html__( 'The French Riviera', 'exmoor' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Thu 25 June  – Tue, 30 June', 'exmoor' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"small"} -->
			<p class="has-link-color has-small-font-size" style="font-style:italic;font-weight:400"><a href="#"><?php echo esc_html__( 'Full Details', 'exmoor' ); ?></a>→</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"id":3585,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/beach-landscape-sea-coast-water-sand-892271-pxhere.com_-1-768x1024.jpg" alt="" class="wp-image-3585"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php echo esc_html__( 'Noordhoek Beach', 'exmoor' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Thu 25 Sep  – Tue, 30 Sep', 'exmoor' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"small"} -->
			<p class="has-link-color has-small-font-size" style="font-style:italic;font-weight:400"><a href="#"><?php echo esc_html__( 'Full Details', 'exmoor' ); ?></a>→</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
		<div class="wp-block-column">
			<!-- wp:image {"id":3632,"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/StockSnap_YPSVD8SDXM-1-768x1024.jpg" alt="" class="wp-image-3632"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"level":3} -->
				<h3 class="wp-block-heading"><?php echo esc_html__( 'Newquay', 'exmoor' ); ?></h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Thu, 13 Jul – Wed, 19 Jul', 'exmoor' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"fontSize":"small"} -->
			<p class="has-link-color has-small-font-size" style="font-style:italic;font-weight:400"><a href="#"><?php echo esc_html__( 'Full Details', 'exmoor' ); ?></a>→</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
