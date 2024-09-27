<?php
/**
 * Title: Latest Posts
 * Slug: startorg/latest-posts
 * Categories: text
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"4rem","margin":{"top":"0rem","bottom":"0rem"},"padding":{"top":"6rem","bottom":"6rem","right":"4vw","left":"4vw"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0rem;margin-bottom:0rem;padding-top:6rem;padding-right:4vw;padding-bottom:6rem;padding-left:4vw"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.04rem"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="letter-spacing:0.04rem;text-transform:uppercase"><?php esc_html_e('Stories', 'startorg');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Latest in Community', 'startorg');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Beyond the confines of traditional academia, our organization is deeply rooted in community development.', 'startorg');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":9,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"aspectRatio":"4/3"} /-->

<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

<!-- wp:post-excerpt {"moreText":"Read Post"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
