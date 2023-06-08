<?php
/**
 * Title: Featured Categories
 * Slug: aldente/featured-categories
 * Categories: featured
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"spacing":{"padding":{"bottom":"0"}}}} -->
		<div class="wp-block-column" style="padding-bottom:0">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"custom"} -->
			<figure class="wp-block-image size-large"><a href="#"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/dish-meal-food-cooking-produce-vegetable-1280952-pxhere.com-cropped-1024x1024.jpg" alt="" /></a></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"medium","fontFamily":"raleway"} -->
			<h2 class="wp-block-heading has-text-align-center has-raleway-font-family has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:600;text-transform:uppercase"><?php echo  esc_html__( 'Main Dishes', 'aldente' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"bottom":"0"}}}} -->
		<div class="wp-block-column" style="padding-bottom:0">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><a href="#"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/flower-meal-food-produce-vegetable-season-1281011-pxhere.com_-1024x1024.jpg" alt="" /></a></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"medium","fontFamily":"raleway"} -->
			<h2 class="wp-block-heading has-text-align-center has-raleway-font-family has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:600;text-transform:uppercase"><?php echo  esc_html__( 'Lunch', 'aldente' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"bottom":"0"}}}} -->
		<div class="wp-block-column" style="padding-bottom:0">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
			<figure class="wp-block-image size-large"><a href="#"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/food-chocolate-dessert-flavor-chocolate-brownie-frozen-dessert-1416667-pxhere.com_-1024x1024.jpg" alt="" /></a></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"medium","fontFamily":"raleway"} -->
			<h2 class="wp-block-heading has-text-align-center has-raleway-font-family has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:600;text-transform:uppercase"><?php echo  esc_html__( 'Ice Pops', 'aldente' ); ?></h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
