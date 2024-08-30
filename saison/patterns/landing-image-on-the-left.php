<?php
/**
 * Title: Landing with image on the left
 * Slug: saison/landing-image-left
 * Categories: featured, page
 * Inserter: yes
 */
?>

<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"top":"8vh","bottom":"8vh","left":"8vh","right":"8vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="min-height:100vh;padding-top:8vh;padding-right:8vh;padding-bottom:8vh;padding-left:8vh"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:image {"id":518,"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/pattern-image-1.jpg" alt="" class="wp-image-518" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:site-title {"style":{"typography":{"fontSize":"4rem"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"1.6rem"}}} -->
<h2 class="wp-block-heading" style="font-size:1.6rem">Opening Soon</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.1em"}}} -->
<p style="font-size:0.9rem;letter-spacing:0.1em">92 St. Faiths Lane,<br>Norwich NR1 1NE</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#ffffff","size":"has-small-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"yelp"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->