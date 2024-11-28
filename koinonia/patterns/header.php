<?php
/**
 * Title: header
 * Slug: koinonia/header
 * Inserter: no
 */
?>
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"border":{"radius":"10px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}},"backgroundColor":"secondary"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center has-secondary-background-color has-background" style="border-radius:10px;padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"75%","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
<div class="wp-block-column is-vertically-aligned-center has-background-color has-text-color has-link-color" style="flex-basis:75%"><!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":24,"shouldSyncIcon":false} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group"><!-- wp:site-title {"level":0} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"base","icon":"menu","overlayBackgroundColor":"contrast","overlayTextColor":"secondary","style":{"spacing":{"blockGap":"var:preset|spacing|50"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"0%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:0%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e('Donate', 'koinonia');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->