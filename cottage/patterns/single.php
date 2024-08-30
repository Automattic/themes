<?php
/**
 * Title: single
 * Slug: cottage/single
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/cottage_background-scaled.jpg","id":31,"source":"file","title":"cottage_background"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull"><!-- wp:template-part {"slug":"header-with-cover","tagName":"header","align":"full"} /-->

<!-- wp:group {"tagName":"main","lock":{"move":false,"remove":true},"style":{"spacing":{"margin":{"top":"0px","bottom":"var:preset|spacing|60"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0px;margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:post-content {"lock":{"move":false,"remove":true},"layout":{"type":"constrained","justifyContent":"center"}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0px"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|secondary","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--secondary);border-top-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:avatar {"size":56} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('Published by', 'cottage');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true} /-->

<!-- wp:post-author-biography /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}},"border":{"top":{"color":"var:preset|color|secondary","width":"1px"},"right":[],"bottom":{"color":"var:preset|color|secondary","width":"1px"},"left":[]}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--secondary);border-top-width:1px;border-bottom-color:var(--wp--preset--color--secondary);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-terms {"term":"category","prefix":"Categories: "} /-->

<!-- wp:post-terms {"term":"post_tag","prefix":"Tags: "} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"comments"} /--></main>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->