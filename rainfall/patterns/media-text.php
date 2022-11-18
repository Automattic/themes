<?php
/**
 * Title: Media & Text
 * slug: rainfall/media-text
 * categories: featured, images
 */
?>

<!-- wp:columns {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"overlayColor":"light-orange","minHeight":80,"minHeightUnit":"vh","contentPosition":"bottom left","isDark":false,"style":{"spacing":{"padding":{"right":"30%","left":"5%"}}}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left" style="padding-right:30%;padding-left:5%;min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-light-orange-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":4} -->
<h4><?php echo esc_html__( '"Every year about the end of the rains and before the strength of the sun had come upon us, we\'d notice the city glow."', 'rainfall' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase"}}} -->
<p style="text-transform:uppercase"><?php echo esc_html__( 'John Thompson', 'rainfall' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/rainfall-background.jpg'; ?>","dimRatio":50,"minHeight":80,"minHeightUnit":"vh","contentPosition":"center center","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
<div class="wp-block-cover" style="min-height:80vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/rainfall-background.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:image {"align":"center","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#000000","#ffffff"]}}} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/rainfall-foreground.jpg'; ?>" alt=""/></figure>
<!-- /wp:image --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
