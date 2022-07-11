<?php
/**
 * Title: Latest Posts
 * Slug: rainfall/latest-posts
 * Categories: query
 */
?>
<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
<h1 class="has-xx-large-font-size"><?php echo esc_html__( 'Latest Posts', 'rainfall' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:query {"queryId":35,"query":{"perPage":"1","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"spacing":{"margin":{"top":"0px"}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase"}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"14px","bottom":"40px"}}},"fontSize":"huge"} /-->

<!-- wp:post-excerpt /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:query {"queryId":35,"query":{"perPage":"1","pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"backgroundColor":"black","textColor":"white"} -->
<div class="wp-block-columns has-white-color has-black-background-color has-text-color has-background" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"top","width":"50%","style":{"spacing":{"padding":{"top":"31px","right":"31px","bottom":"31px","left":"31px"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:31px;padding-right:31px;padding-bottom:31px;padding-left:31px;flex-basis:50%"><!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"14px","bottom":"40px"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"x-large"} /-->

<!-- wp:post-excerpt /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:post-featured-image {"isLink":true,"height":"100%","align":"wide"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"50px","bottom":"50px"}}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="margin-top:50px;margin-bottom:50px"/>
<!-- /wp:separator -->

<!-- wp:query {"queryId":25,"query":{"perPage":"2","pages":0,"offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":2}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"spacing":{"margin":{"top":"0px"}}}} /-->

<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase"}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"10px","bottom":"14px"}}},"fontSize":"large"} /-->

<!-- wp:post-excerpt {"style":{"spacing":{"margin":{"top":"0px"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
