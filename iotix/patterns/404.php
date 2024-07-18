<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: 404
 * Slug: iotix/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"right":"5vw","left":"5vw"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-right:5vw;padding-left:5vw"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide","style":{"border":{"radius":"30px"}}} -->
<figure class="wp-block-image alignwide size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/404_Image.webp" alt="<?php esc_html_e('', 'iotix');?>" class="" style="border-radius:30px"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-left has-x-large-font-size" id="oops-that-page-can-t-be-found"><?php esc_html_e('Page not found.', 'iotix');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'iotix');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"Search...","widthUnit":"%","buttonText":"Search","style":{"border":{"radius":"100px"}},"backgroundColor":"foreground"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->
