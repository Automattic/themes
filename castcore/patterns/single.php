<?php
/**
 * Title: single
 * Slug: castcore/single
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","area":"header","align":"full"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:cover {"isUserOverlayColor":true,"minHeight":340,"gradient":"default-gradient","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}},"border":{"left":{"color":"var:preset|color|base","width":"20px"},"top":[],"right":{"color":"var:preset|color|base","width":"20px"},"bottom":[]},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}},"heading":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-contrast-color has-text-color has-link-color" style="border-right-color:var(--wp--preset--color--base);border-right-width:20px;border-left-color:var(--wp--preset--color--base);border-left-width:20px;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;min-height:340px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-default-gradient-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":{"top":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"63.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:63.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":1,"isLink":true} /-->

<!-- wp:group {"metadata":{"name":"Date and category"},"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y"} /-->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="line-height:1"><?php esc_html_e('·', 'castcore');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"2.5%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:2.5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","height":"","style":{"color":[],"spacing":{"padding":{"top":"0","bottom":"0"}}}} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content wrapper"},"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"61.66%"} -->
<div class="wp-block-column" style="flex-basis:61.66%"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"padding":{"right":"1.5rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60);padding-right:1.5rem"><!-- wp:post-content {"lock":{"move":false,"remove":false},"layout":{"type":"constrained"}} /--></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"also-available"} /-->

<!-- wp:template-part {"slug":"comments"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:template-part {"slug":"sidebar"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->