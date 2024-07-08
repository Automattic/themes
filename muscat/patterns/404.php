<?php
/**
 * Title: 404
 * Slug: muscat/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:cover {"overlayColor":"primary","minHeight":100,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"right":"5vw","left":"5vw"}}}} -->
<div class="wp-block-cover alignfull" style="padding-right:5vw;padding-left:5vw;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"0","bottom":"var:preset|spacing|60","left":"0"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide has-background-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:site-title {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"medium"} /-->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"space-between"},"style":{"spacing":{"blockGap":"30px"}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"18rem","lineHeight":1,"letterSpacing":"-8px","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"8rem","right":"0","bottom":"var:preset|spacing|60","left":"0"}}},"textColor":"background"} -->
<h1 class="wp-block-heading alignwide has-background-color has-text-color" style="padding-top:8rem;padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0;font-size:18rem;font-style:normal;font-weight:500;letter-spacing:-8px;line-height:1"><?php echo __('Well, this isn’t cool.', 'muscat');?></h1>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"textColor":"background"} -->
<p class="has-background-color has-text-color"><?php echo __('The page you’re looking doesn’t seem to exist. Maybe try a search?', 'muscat');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"width":75,"widthUnit":"%","buttonText":"Search","style":{"border":{"width":"0px","style":"none"}},"backgroundColor":"background","textColor":"foreground"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->