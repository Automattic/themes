<?php
/**
 * Title: Default footer
 * Slug: catalog/footer
 * Block Types: core/template-part/footer
 * inserter: no
 */
?>

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textDecoration":"none"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="text-decoration:none"><em><a href=""><?php echo esc_html__( 'Instagram', 'catalog' ); ?></a></em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><em><a href=""><?php echo esc_html__( 'Twitter', 'catalog' ); ?></a></em></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size"><em><a href=""><?php echo esc_html__( 'Facebook', 'catalog' ); ?></a></em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size"><?php echo esc_html__( 'Designed with', 'catalog' ); ?><a rel="nofollow" href="https://wordpress.org"><?php echo esc_html__( 'WordPress', 'catalog' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
