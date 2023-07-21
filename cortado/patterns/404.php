<?php
/**
 * Title: 404
 * Slug: cortado/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:image {"align":"center","id":314,"width":400,"height":400,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"0px"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/StockSnap_8B74455531-e1668601658378.jpg" alt="" class="wp-image-314" style="border-radius:0px;width:400px;height:400px" width="400" height="400"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"1rem"} -->
<div style="height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center">Oops! That page can’t be found.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">It looks like nothing was found at this location. Maybe try a search?</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"width":75,"widthUnit":"%","buttonUseIcon":true,"align":"center","style":{"border":{"radius":"3px","width":"1px"}},"borderColor":"primary"} /-->

<!-- wp:spacer {"height":"8rem"} -->
<div style="height:8rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
