<?php
/**
 * Title: Two Column Gallery
 * Slug: goodskin/two-column-gallery
 * Categories: gallery
 * Inserter: yes
 */
declare( strict_types = 1 );
?>

<!-- wp:columns {"verticalAlignment":"center","metadata":{"name":"Gallery"},"style":{"spacing":{"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-full is-style-default"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/skin-blog-home-image-2-2.jpg" alt="<?php esc_html_e('', 'goodskin');?>" style="object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:image {"scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"8vw"}},"borderColor":"base"} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/skin-blog-home-image-3-1.jpg" alt="<?php esc_html_e('', 'goodskin');?>" class="has-border-color has-base-border-color" style="border-width:8vw;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
 