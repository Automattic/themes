<?php
/**
 * Title: Single Post Hero
 * Slug: curator/post-hero
 * Inserter: no
 */

?>

<?php if ( has_post_thumbnail() ): ?>
<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"overlayColor":"foreground","minHeight":100,"minHeightUnit":"vh"} -->
<div class="wp-block-cover" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"post_tag","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"background","className":"curator-post-tags","fontSize":"medium"} /-->

<!-- wp:post-date {"textColor":"background","fontSize":"medium"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"center","level":1} /--></div></div>
<!-- /wp:cover -->

<?php else: ?>
<!-- wp:cover {"overlayColor":"background","minHeight":50,"minHeightUnit":"vh","isDark":false} -->
<div class="wp-block-cover is-light" style="min-height:50vh"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"post_tag","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"foreground","className":"curator-post-tags-noimage","fontSize":"medium"} /-->

<!-- wp:post-date {"textColor":"foreground","fontSize":"medium"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"center","level":1,"textColor":"foreground"} /--></div></div>
<!-- /wp:cover -->

<?php endif; ?>
