<?php
/**
 * Title: In-post article promo
 * Slug: lettre/query-related-post
 * Categories: featured, query
 */
?>

<!-- wp:paragraph {"fontSize":"small","style":{"typography":{"textTransform":"uppercase"}}} -->
<p class="has-small-font-size" style="text-transform:uppercase"><?php echo esc_html__( 'Related post', 'lettre' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"query":{"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"perPage":"1"},"displayLayout":{"type":"list"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:separator {"color":"tertiary","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-background has-tertiary-background-color has-tertiary-color is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:cover {"overlayColor":"secondary","minHeight":124,"isDark":false,"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-cover is-light" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:124px"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"calc(var( --wp--style--block-gap ) - 0.25em)","bottom":"0.25em"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:calc(var( --wp--style--block-gap ) - 0.25em);margin-bottom:0.25em;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-title {"textAlign":"left","isLink":true,"style":{"typography":{"lineHeight":"1.1","fontStyle":"normal","fontWeight":"700"},"color":{"text":"#ffffff","link":"#ffffff"},"spacing":{"margin":{"top":"0px","bottom":"0.5rem"}}},"fontSize":"large"} /-->

<!-- wp:post-date {"format":"M n","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"100px"} -->
<div class="wp-block-column" style="flex-basis:100px"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"100px","style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template -->

<!-- wp:separator {"color":"tertiary","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-background has-tertiary-background-color has-tertiary-color is-style-wide"/>
<!-- /wp:separator --></div>
<!-- /wp:query -->
