<?php
/**
 * Title: Deafult header
 * Slug: tiebreak/header
 * Categories: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"2.25vh","top":"6vh","right":"6vw","left":"6vw"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull" style="padding-top:6vh;padding-right:6vw;padding-bottom:2.25vh;padding-left:6vw"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:site-title /-->

<!-- wp:site-tagline /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"},"typography":{"textTransform":"uppercase","fontSize":"13px","letterSpacing":"0.05em"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontFamily":"metropolis"} -->
<div class="wp-block-group has-metropolis-font-family" style="font-size:13px;letter-spacing:0.05em;text-transform:uppercase"><!-- wp:paragraph -->
<p><?php echo wp_kses_post( __ ( '<a href="#">Subscribe</a>', 'tiebreak' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __ ( '<a href="#">Newsletter</a>', 'tiebreak' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:navigation {"overlayMenu":"always","overlayBackgroundColor":"contrast","overlayTextColor":"base","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"x-large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"2vh","top":"2vh","right":"6vw","left":"6vw"}},"border":{"top":{"color":"var:preset|color|custom-dark","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull" style="border-top-color:var(--wp--preset--color--custom-dark);border-top-width:1px;padding-top:2vh;padding-right:6vw;padding-bottom:2vh;padding-left:6vw"><!-- wp:group {"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
