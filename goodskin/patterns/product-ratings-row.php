<?php
/**
 * Title: Product Ratings in a Row
 * Slug: goodskin/product-ratings-row
 * Categories: featured
 * Inserter: yes
 */
declare( strict_types = 1 );
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size">Product Reviews</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":231,"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/skin-blog-product-1-1.jpg" alt="" class="wp-image-231" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Sunsai SPF50+  Lightweight Sunscreen</p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/rating-star {"rating":3,"className":"is-style-filled","align":"center"} -->
<figure class="wp-block-jetpack-rating-star is-style-filled" style="text-align:center"><span>★</span><span>★</span><span>★</span></figure>
<!-- /wp:jetpack/rating-star --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":234,"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/skin-blog-product-2-1.jpg" alt="" class="wp-image-234" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">ULing Wonderberry Instant Facial</p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/rating-star {"rating":5,"className":"is-style-filled","align":"center"} -->
<figure class="wp-block-jetpack-rating-star is-style-filled" style="text-align:center"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></figure>
<!-- /wp:jetpack/rating-star --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":232,"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/skin-blog-product-3-1.jpg" alt="" class="wp-image-232" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Yiae Kize-Rouk Enlighten Illuminating Serum</p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/rating-star {"rating":4,"className":"is-style-filled","align":"center"} -->
<figure class="wp-block-jetpack-rating-star is-style-filled" style="text-align:center"><span>★</span><span>★</span><span>★</span><span>★</span></figure>
<!-- /wp:jetpack/rating-star --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":233,"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/skin-blog-product-4-1-1024x1024.jpg" alt="" class="wp-image-233" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Anai Skin Perfecting Charcoal Mask</p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/rating-star {"rating":4,"className":"is-style-filled","align":"center"} -->
<figure class="wp-block-jetpack-rating-star is-style-filled" style="text-align:center"><span>★</span><span>★</span><span>★</span><span>★</span></figure>
<!-- /wp:jetpack/rating-star --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->