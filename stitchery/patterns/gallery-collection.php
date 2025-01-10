<?php
/**
 * Title: Gallery Collection
 * Slug: stitchery/gallery-collection
 * Categories: gallery, featured
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"theme-2","className":"lace-border","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull lace-border has-theme-2-background-color has-background" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"level":3,"align":"wide"} -->
<h3 class="wp-block-heading alignwide"><?php echo esc_html__( 'Forest creatures collection', 'stitchery' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Shop all', 'stitchery' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/product_rabbit.jpeg" alt="" class="" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"fontSize":"small","fontFamily":"hanken-grotesk"} -->
<h4 class="wp-block-heading has-text-align-center has-hanken-grotesk-font-family has-small-font-size"><a href="#"><?php echo esc_html__( 'Rabbit', 'stitchery' ); ?></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">$40.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/product_hedgehog.jpeg" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"fontSize":"small","fontFamily":"hanken-grotesk"} -->
<h4 class="wp-block-heading has-text-align-center has-hanken-grotesk-font-family has-small-font-size"><a href="#"><?php echo esc_html__( 'Hedgehog', 'stitchery' ); ?></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">$45.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/product_mouse.jpeg" alt="" class=""/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"fontSize":"small","fontFamily":"hanken-grotesk"} -->
<h4 class="wp-block-heading has-text-align-center has-hanken-grotesk-font-family has-small-font-size"><a href="#"><?php echo esc_html__( 'Mouse', 'stitchery' ); ?></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">$45.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"8px"}}} -->
<div class="wp-block-column"><!-- wp:image {"aspectRatio":"2/3","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/product_squirrel.jpeg" alt="" class="" style="aspect-ratio:2/3;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"fontSize":"small","fontFamily":"hanken-grotesk"} -->
<h4 class="wp-block-heading has-text-align-center has-hanken-grotesk-font-family has-small-font-size"><a href="#"><?php echo esc_html__( 'Squirrel', 'stitchery' ); ?></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">$40.00</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
