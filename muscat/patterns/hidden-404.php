<?php
/**
 * Title: A 404 page
 * Slug: muscat/hidden-404
 * Inserter: no
 */

?>

<!-- wp:group {"align":"full","backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-primary-background-color has-background"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"0","bottom":"var:preset|spacing|60","left":"0"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"backgroundColor":"primary","textColor":"background","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull has-background-color has-primary-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:site-title {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"medium"} /-->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"space-between"},"style":{"spacing":{"blockGap":"30px"}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":1,"align":"wide","style":{"typography":{"fontSize":"17rem","lineHeight":1,"letterSpacing":"-11px","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"8rem","right":"0","bottom":"var:preset|spacing|60","left":"0"}}},"textColor":"background"} -->
<h1 class="alignwide has-background-color has-text-color" style="padding-top:8rem;padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0;font-size:17rem;font-style:normal;font-weight:500;letter-spacing:-11px;line-height:1"><?php echo esc_html__( 'Well, this isn’t nice.', 'muscat' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"textColor":"background"} -->
<p class="has-background-color has-text-color"><?php echo esc_html__( 'The page you’re looking doesn’t seem to exist. Maybe try a search?', 'muscat' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"width":75,"widthUnit":"%","style":{"border":{"width":"0px","style":"none"}},"backgroundColor":"background","textColor":"foreground"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
