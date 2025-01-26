<?php
/**
 * Title: Masthead
 * Slug: stitchery/banner-masthead
 * Categories: intro, featured
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"background":{"backgroundSize":"auto"},"dimensions":{"minHeight":"8px"}},"backgroundColor":"theme-2","className":"lace-border","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull lace-border has-theme-2-background-color has-background" style="min-height:8px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:0px">
<!-- wp:site-title {"level":2,"textAlign":"center","style":{"typography":{"letterSpacing":"-2px"}},"fontSize":"xx-large"} /-->
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Crochet Animals And Handmade Gifts', 'stitchery' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"isStackedOnMobile":false,"align":"wide"} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:image {"align":"center","width":"292px","height":"auto","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"250px","topRight":"250px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/christmas_bear.jpeg" alt="" class="" style="border-top-left-radius:250px;border-top-right-radius:250px;object-fit:cover;width:292px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:50%"><!-- wp:image {"align":"center","width":"425px","height":"auto","sizeSlug":"full","style":{"border":{"radius":{"topLeft":"250px","topRight":"250px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/christmas_bunny.jpeg" alt="" class="" style="border-top-left-radius:250px;border-top-right-radius:250px;width:425px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:image {"align":"center","width":"292px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":{"topLeft":"250px","topRight":"250px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/christmas_fox.jpeg" alt="" class="" style="border-top-left-radius:250px;border-top-right-radius:250px;width:292px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
