<?php
/**
 * Title: home
 * Slug: handy/home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"header","area":"header","align":"wide"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","lock":{"move":false,"remove":false},"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"style":{"spacing":{"blockGap":"4vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"right":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php esc_html_e('News', 'handy');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Check our latest articles about news, tips, tricks, and lifestyle.', 'handy');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:query {"queryId":151,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"2vh","bottom":"4vh"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:2vh;margin-bottom:4vh"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group alignwide"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-date {"format":"M j, Y","style":{"typography":{"textTransform":"uppercase"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-pages","align":"full"} /-->