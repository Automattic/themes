<?php
/**
 * Title: sidebar
 * Slug: musee/sidebar
 * Categories: hidden
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"metadata":{"categories":["hidden"],"patternName":"musee/sidebar","name":"sidebar"},"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0"},"blockGap":"0px"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="margin-top:0;font-style:normal;font-weight:700;line-height:1;text-transform:uppercase">Archive</h2>
<!-- /wp:heading -->

<!-- wp:archives {"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0"},"blockGap":"0px"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="margin-top:0;font-style:normal;font-weight:700;line-height:1;text-transform:uppercase">Categories</h2>
<!-- /wp:heading -->

<!-- wp:categories {"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0"},"blockGap":"0px"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="margin-top:0;font-style:normal;font-weight:700;line-height:1;text-transform:uppercase"><?php echo __('Newsletter', 'musee');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('Would you like to subscribe to our newsletter? <a href="#">Sign up</a>.', 'musee');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->