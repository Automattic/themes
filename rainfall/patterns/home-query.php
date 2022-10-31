<?php
/**
 * Title: Home Query
 * Slug: rainfall/home-query
 * Categories: featured, columns
 */
?>

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"xx-large"} -->
<h2 class="has-xx-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php esc_html_e( 'Issues', 'rainfall' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","inherit":false,"perPage":4},"displayLayout":{"type":"flex","columns":2}} -->
<div class="wp-block-query">
    <!-- wp:post-template -->

        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"},"align":"wide","style":{"spacing":{"blockGap":"1rem"}}} -->
        <div class="wp-block-group alignwide">
            <!-- wp:post-featured-image {"width":"100%","height":"max(32vw, 50vh)"} /-->

            <!-- wp:post-date {"format":"M j","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /-->

            <!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.1","textTransform":"uppercase","fontStyle":"normal","fontWeight":"400"},"color":{"text":"#ffffff","link":"#ffffff"}},"fontSize":"large"} /-->

            <!-- wp:post-excerpt /-->
        </div>
        <!-- /wp:group -->
    <!-- /wp:post-template -->

    <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
        <!-- wp:query-pagination-previous /-->
        <!-- wp:query-pagination-next /-->
    <!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
