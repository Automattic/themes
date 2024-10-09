<?php
/**
 * Title: home
 * Slug: tiebreak/home
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","align":"wide","layout":{"type":"default"}} -->
<main class="wp-block-group alignwide">

<!-- wp:pattern {"slug":"tiebreak/two-column-blog-posts"} /-->

<!-- wp:spacer {"height":"8vh"} -->
<div style="height:8vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"6vw","left":"6vw"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:6vw;padding-left:6vw"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|tertiary","width":"4px"},"right":[],"bottom":{"color":"var:preset|color|tertiary","width":"4px"},"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--tertiary);border-top-width:4px;border-bottom-color:var(--wp--preset--color--tertiary);border-bottom-width:4px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:image {"width":"80px","height":"70px","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/4_post_images-1024x723.jpg" alt="" style="object-fit:cover;width:80px;height:70px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __ ( '<a href="#">Watch</a> Djokovic vs. Alcaraz with live commentary', 'tiebreak' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"8vh"} -->
<div style="height:8vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:pattern {"slug":"tiebreak/row-blog-posts"} /-->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:spacer {"height":"8vh"} -->
<div style="height:8vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":11,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"default","columnCount":4}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"textAlign":"center","isLink":true,"style":{"typography":{"fontSize":"38px","fontStyle":"italic","fontWeight":"300"}}} /-->

<!-- wp:post-author-name /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"8vh"} -->
<div style="height:8vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"tiebreak/categories"} /-->

<!-- wp:spacer {"height":"8vh"} -->
<div style="height:8vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"6vw","left":"6vw"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-style:none;border-width:0px;padding-right:6vw;padding-left:6vw"><!-- wp:group {"align":"wide","style":{"border":{"width":"0px","style":"none"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="border-style:none;border-width:0px"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}},"border":{"bottom":{"color":"var:preset|color|contrast","width":"4px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:4px;padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" style="font-style:italic;font-weight:400"><?php esc_html_e('Search the blog', 'tiebreak');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:search {"showLabel":false,"placeholder":"Wimbledon","buttonText":"Search","buttonUseIcon":true} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
