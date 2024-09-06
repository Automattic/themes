<?php
/**
 * Title: post-meta
 * Slug: sprinkler/post-meta
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0.2em"},"typography":{"letterSpacing":"0em","fontSize":"0.8rem","textTransform":"uppercase"}},"fontFamily":"lato","layout":{"type":"default"}} -->
<div class="wp-block-group has-lato-font-family" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:0.8rem;letter-spacing:0em;text-transform:uppercase"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"0"},"blockGap":"var:preset|spacing|20"},"border":{"bottom":{"style":"none","width":"0px"}}},"layout":{"type":"flex"}} -->
<div class="wp-block-group alignfull" style="border-bottom-style:none;border-bottom-width:0px;padding-bottom:0"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","fontSize":"0.8rem"}}} -->
<p style="font-size:0.8rem;letter-spacing:0.06em"><?php esc_html_e('CategorIes:', 'sprinkler');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"typography":{"fontSize":"0.8rem","letterSpacing":"0.02em"},"spacing":{"blockGap":"var:preset|spacing|20","padding":{"bottom":"var:preset|spacing|40"}},"border":{"color":null,"style":null,"width":null,"top":[],"right":[],"bottom":{"color":"var:preset|color|secondary","style":"solid","width":"1px"},"left":[]}},"fontFamily":"fira-code","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group has-fira-code-font-family" style="border-bottom-color:var(--wp--preset--color--secondary);border-bottom-style:solid;border-bottom-width:1px;padding-bottom:var(--wp--preset--spacing--40);font-size:0.8rem;letter-spacing:0.02em"><!-- wp:group {"style":{"spacing":{"blockGap":"0.3rem"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0.2em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"}}} -->
<p style="font-size:0.8rem"><?php esc_html_e('By', 'sprinkler');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author {"showAvatar":false} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem"}},"fontFamily":"fira-code"} -->
<p class="has-fira-code-font-family" style="font-size:0.8rem"><?php esc_html_e('·', 'sprinkler');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0"},"blockGap":"0.2rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group" style="padding-bottom:0"><!-- wp:post-time-to-read /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->