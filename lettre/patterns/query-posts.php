<?php
/**
 * Title: List of posts
 * Slug: lettre/query-posts
 * Categories: featured, query
 */
?>

<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"perPage":3},"displayLayout":{"type":"list"},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:separator {"color":"tertiary","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-background has-tertiary-background-color has-tertiary-color is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:cover {"customOverlayColor":"rgba(0,0,0,0)","minHeight":178,"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-cover" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:178px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:rgba(0,0,0,0)"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"var( --wp--style--block-gap )","bottom":"0.5em"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center has-foreground-color has-text-color has-link-color" style="margin-top:var( --wp--style--block-gap );margin-bottom:0.5em;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"><!-- wp:post-date {"format":"M n","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"70%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:70%"><!-- wp:post-title {"textAlign":"left","isLink":true,"style":{"typography":{"lineHeight":"1.1","fontSize":"xx-large","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"144px"} -->
<div class="wp-block-column" style="flex-basis:144px"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"144px","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template -->

<!-- wp:separator {"color":"tertiary","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-background has-tertiary-background-color has-tertiary-color is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:spacer {"height":"5px"} -->
<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"fontSize":"small"} /-->

<!-- wp:query-pagination-next {"fontSize":"small"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
