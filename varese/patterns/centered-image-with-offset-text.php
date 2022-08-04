<?php
/**
 * Title: Centered image with offset text
 * Slug: varese/centered-image-with-offset-text
 * Categories: images, text
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","bottom":"0px"}}},"layout":{"inherit":true}} -->
<div class="wp-block-group alignfull" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"3vw","margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"style":{"spacing":{"padding":{"top":"80px","bottom":"40px"},"blockGap":"30px"}},"layout":{"contentSize":"350px"}} -->
<div class="wp-block-column" style="padding-top:80px;padding-bottom:40px"><!-- wp:heading {"level":3,"style":{"typography":{"lineHeight":1.3999999999999999}}} -->
<h3 style="line-height:1.4"><?php echo esc_html__( '8 Decades of Italian Cooking Heritage', 'varese' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'While some of our recipes have been crafted and perfected within our own walls, we offer several family recipes and use several techniques that have been handed down across four generations of chefs.', 'varese' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"380px","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:380px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/centerimg.jpg'; ?>" alt="" /></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"padding":{"bottom":"60px","top":"40px"},"blockGap":"30px"}},"layout":{"contentSize":"350px"}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-top:40px;padding-bottom:60px"><!-- wp:heading {"level":3,"style":{"typography":{"lineHeight":1.3999999999999999}}} -->
<h3 style="line-height:1.4"><?php echo esc_html__( 'Pure Comfort', 'varese' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'At Varese, we want you to enjoy the experience as much as you enjoy the food. We chose all of our funiture with comfort in mind. Kick back and enjoy small plates with friends around an open fire on our patio or sit close to that special someone as you share a meal and a bottle of wine.', 'varese' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->