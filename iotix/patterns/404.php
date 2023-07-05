<?php
/**
 * Title: 404
 * Slug: iotix/404
 * Categories: hidden
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"main","layout":{"type":"constrained"}} -->
<main class="wp-block-group"><!-- wp:image {"align":"wide","id":45,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"30px"}}} -->
<figure class="wp-block-image alignwide size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/404_Image.webp" alt="" class="wp-image-45" style="border-radius:30px"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","fontSize":"x-large","anchor":"oops-that-page-can-t-be-found"} -->
<h2 class="wp-block-heading has-text-align-left has-x-large-font-size" id="oops-that-page-can-t-be-found"><?php echo esc_html__( 'Page not found.', 'iotix' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'iotix' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"widthUnit":"%","style":{"border":{"radius":"100px"}},"backgroundColor":"foreground"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->