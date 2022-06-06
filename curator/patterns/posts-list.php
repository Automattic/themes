<?php
/**
 * Title: Posts list
 * Slug: curator/posts-list
 * Inserter: no
 */

?>

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide">

<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"perPage":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"border":{"bottom":{"width":"1px"}}}} -->
<div class="wp-block-group">
<!-- wp:pattern {"slug":"curator/post-terms-and-date"} /-->  

<!-- wp:post-title {"level":1,"isLink":true,"style":{"typography":{"lineHeight":1},"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /-->

<!-- wp:separator {"className":"alignfull"} -->
<hr class="wp-block-separator has-alpha-channel-opacity alignfull"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->