<?php
/**
 * Title: archive
 * Slug: vitrum/archive
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"5vh","bottom":"10vh"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:5vh;padding-bottom:10vh"><!-- wp:query {"queryId":30,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:query-title {"type":"archive","align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->

<!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":4}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","width":"","height":""} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","margin":{"top":"var:preset|spacing|40","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:0"><!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"category","separator":" × ","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"align":"wide"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results {"align":"wide"} -->
<!-- wp:paragraph -->
<p><?php echo __('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'vitrum');?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->