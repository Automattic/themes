<?php
/**
 * Title: Home Page - Featured Post
 * Slug: carnation/home-featured
 * Categories: Hidden
 * Inserter: no
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"border":{"color":null,"style":null,"width":null,"bottom":{"color":"#0000001a","style":"solid","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:#0000001a;border-bottom-style:solid;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"level":6,"align":"wide","textColor":"foreground"} -->
<h6 class="wp-block-heading alignwide has-foreground-color has-text-color"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">●</mark> Featured Article</h6>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":"1","pages":"0","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"6px"}}} /-->

<!-- wp:columns {"style":{"spacing":{"margin":{"top":"40px"},"blockGap":{"left":"80px"}}}} -->
<div class="wp-block-columns" style="margin-top:40px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-title {"isLink":true} /--></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:post-excerpt {"moreText":"","excerptLength":50,"style":{"spacing":{"padding":{"top":"20px"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->