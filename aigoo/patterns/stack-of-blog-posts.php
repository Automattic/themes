<?php
/**
 * Title: A Stack of Blog Posts
 * Slug: aigoo/stack-blog-posts
 * Categories: posts
 * Insterter: yes
 */
?>
<!-- wp:query {"queryId":47,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"default"}} -->
<!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60"}},"border":{"bottom":{"color":"var:preset|color|contrast","style":"dotted","width":"2px"},"top":[],"right":[],"left":[]}}} -->
<div class="wp-block-columns" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-style:dotted;border-bottom-width:2px;padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"22px","lineHeight":"1.3"}}} /-->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0.2rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignfull"><!-- wp:post-author {"showAvatar":false} /-->

<!-- wp:post-date {"isLink":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-no-results {"align":"wide"} -->
<!-- wp:pattern {"slug":"aigoo/hidden-no-results-content"} /-->
<!-- /wp:query-no-results -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->
