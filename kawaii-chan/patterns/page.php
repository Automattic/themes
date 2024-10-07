<?php
/**
 * Title: page
 * Slug: kawaii-chan/page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header-lean"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"5vh","bottom":"15vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:5vh;padding-bottom:15vh"><!-- wp:group {"tagName":"main","lock":{"move":false,"remove":false},"align":"wide","style":{"spacing":{"blockGap":"2.5vh"}}} -->
<main class="wp-block-group alignwide"><!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:post-title {"textAlign":"center","level":1,"align":"wide"} /-->

<!-- wp:image {"width":"auto","height":"15px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":"var:preset|duotone|cottoncandy"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/separator_dots.png" alt="" class="" style="width:auto;height:15px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:post-content {"lock":{"move":false,"remove":true},"layout":{"type":"constrained"}} /--></main>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->