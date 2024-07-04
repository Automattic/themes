<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: header
 * Slug: mymenu/header
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"border":{"bottom":{"width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-bottom-width:1px"><!-- wp:columns {"align":"wide","style":{"border":{"right":{"width":"1px"},"left":{"width":"1px"}},"spacing":{"blockGap":{"top":"1px","left":"1px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"primary"} -->
<div class="wp-block-columns alignwide has-primary-background-color has-background" style="border-right-width:1px;border-left-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"stretch","width":"30%","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-stretch has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);flex-basis:30%"><!-- wp:image {"width":"auto","height":"100px","sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/logo_menuuuu_blk.png" alt="<?php echo __('', 'mymenu');?>" style="width:auto;height:100px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"70%","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-stretch has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);flex-basis:70%"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:navigation {"icon":"menu","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center","orientation":"horizontal"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->