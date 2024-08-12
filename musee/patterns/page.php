<?php
/**
 * Title: page
 * Slug: musee/page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"5%"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%"><!-- wp:post-content {"lock":{"move":false,"remove":false},"layout":{"type":"constrained"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0"},"blockGap":"0px"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="margin-top:0;font-style:normal;font-weight:700;line-height:1;text-transform:uppercase"><?php echo __('Archive', 'musee');?></h2>
<!-- /wp:heading -->

<!-- wp:archives {"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0"},"blockGap":"0px"},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","lineHeight":"1"}},"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size" style="margin-top:0;font-style:normal;font-weight:700;line-height:1;text-transform:uppercase"><?php echo __('Categories', 'musee');?></h2>
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
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->