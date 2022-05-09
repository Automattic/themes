<?php
/**
 * Title: Block patterns for home page
 * Slug: skatepark/hidden-home-patterns
 * Inserter: no
 */
?>

<!-- wp:heading {"level":1,"align":"wide","style":{"spacing":{"margin":{"bottom":"calc(var(--wp--custom--gap--vertical) * 3)"}}}} -->
<h1 class="alignwide" style="margin-bottom:calc(var(--wp--custom--gap--vertical) * 3)"><?php echo esc_html__( 'Empowering at-risk youth through skateboarding', 'skatepark' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:image {"align":"full","className":"alignfull size-large"} -->
<figure class="wp-block-image alignfull size-large"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/skatepark.jpg'; ?>" alt="<?php echo esc_attr__( 'A skateboarder does a grab trick in a bowl-shaped skate park. In the background is a watching crowd, palm trees, and the ocean.', 'skatepark' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":5,"align":"wide","style":{"spacing":{"margin":{"top":"calc(var(--wp--custom--gap--vertical) * 3)","bottom":"var(--wp--custom--gap--vertical)"}}}} -->
<h5 class="alignwide" style="margin-top:calc(var(--wp--custom--gap--vertical) * 3);margin-bottom:var(--wp--custom--gap--vertical)"><?php echo esc_html__( 'Latest posts', 'skatepark' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:30px">

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"top":"calc(2 * var( --wp--style--block-gap ))"}}},"isLink":true} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"calc(2 * var( --wp--style--block-gap ))"}},"typography":{"fontSize":"var(--wp--custom--font-sizes--normal)"}}} /-->

<!-- wp:post-excerpt {"moreText":"<?php echo esc_html__( 'Continue reading', 'skatepark' ); ?>"} /-->

<!-- wp:post-date {"style":{"typography":{"fontSize":"16px","fontWeight":"500"}},"isLink":true} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"70px"} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->
<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->
