<?php
/**
 * Title: footer-news
 * Slug: conference/footer-news
 * Inserter: no
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-primary-color has-text-color has-link-color" style="padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"align":"wide","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05rem","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} -->
<h2 class="wp-block-heading alignwide has-primary-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.05rem;text-transform:uppercase"><?php esc_html_e('News', 'conference');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05rem","fontStyle":"normal","fontWeight":"700","textDecoration":"none"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.05rem;text-decoration:none;text-transform:uppercase"><?php esc_html_e('View all', 'conference');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05rem","fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.05rem;text-transform:uppercase"><?php esc_html_e('↗', 'conference');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"taxQuery":null,"parents":[],"format":[]},"enhancedPagination":true,"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"1.5rem"}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->