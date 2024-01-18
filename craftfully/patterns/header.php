<?php
/**
 * Title: Default header
 * Slug: craftfully/header
 * Categories: header
 * Block Types: core/template-part/header
 */
declare( strict_types = 1 );
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"backgroundColor":"accent-3","textColor":"foreground","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-foreground-color has-accent-3-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:navigation {"overlayMenu":"never","overlayBackgroundColor":"accent-5","overlayTextColor":"contrast","style":{"typography":{"letterSpacing":"0px","fontSize":"14px"},"spacing":{"blockGap":"var:preset|spacing|40"}},"fontFamily":"system-font"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"},"blockGap":{"left":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:site-title /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:social-links {"iconBackgroundColor":"foreground","iconBackgroundColorValue":"#404040","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-background-color"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"pinterest"} /-->

<!-- wp:social-link {"url":"#","service":"tiktok"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Shop →', 'craftfully' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"top":{"style":"dashed","width":"1px","color":"var:preset|color|foreground"},"right":{"style":"none","width":"0px"},"bottom":{"style":"dashed","width":"1px","color":"var:preset|color|foreground"},"left":{"style":"none","width":"0px"}}},"textColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-primary-color has-text-color has-link-color" style="border-top-color:var(--wp--preset--color--foreground);border-top-style:dashed;border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--foreground);border-bottom-style:dashed;border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:navigation {"icon":"menu","hasIcon":false,"overlayBackgroundColor":"secondary","align":"wide","layout":{"type":"flex"},"style":{"typography":{"textTransform":"uppercase","fontSize":"16px","fontStyle":"normal","fontWeight":"400"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->