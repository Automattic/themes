<?php
/**
 * Title: Blog posts
 * Slug: skatepark/blog-posts
 * Categories: featured, query
 */
?>

<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:30px">
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var( --wp--style--block-gap )"}}}} -->
<div class="wp-block-group" style="padding-bottom:var( --wp--style--block-gap )">
<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"var(--wp--custom--font-sizes--normal)"},"spacing":{"margin":{"bottom":"calc( 0.5 * var(--wp--custom--gap--vertical) )"}}}} /-->

<!-- wp:post-excerpt {"moreText":"<?php echo esc_html__( 'Continue reading', 'skatepark' ); ?>","style":{"spacing":{"margin":{"top":"calc( 0.5 * var(--wp--custom--gap--vertical) )","bottom":"calc( 0.5 * var(--wp--custom--gap--vertical) )"}}}} /-->

<!-- wp:post-date {"style":{"typography":{"fontSize":"16px","fontWeight":"500"}},"isLink":true} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
