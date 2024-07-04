<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: header
 * Slug: leancv/header
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"3rem","bottom":"3rem"},"blockGap":""}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:3rem;margin-bottom:3rem"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:site-title /-->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"right"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="font-style:normal;font-weight:700"><?php echo __('Emily Jones', 'leancv');?></p>
<!-- /wp:paragraph -->

<!-- wp:site-tagline /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->