<?php
/**
 * Title: single
 * Slug: professio/single
 * Inserter: no
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/StockSnap_ESDCTK2C7Z_web.png","hasParallax":true,"dimRatio":0,"isUserOverlayColor":true,"isDark":false,"sizeSlug":"full","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"color":{"duotone":"var:preset|duotone|duo-secondary"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><div class="wp-block-cover__image-background size-full has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/StockSnap_ESDCTK2C7Z_web.png)"></div><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"blockGap":"var:preset|spacing|70","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"dimensions":{"minHeight":"35vh"}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background has-link-color" style="min-height:35vh;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"left":"0.5rem"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"33.3%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.3%"><!-- wp:post-date {"textAlign":"left"} /-->

<!-- wp:post-title {"textAlign":"left","level":1,"align":"wide"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"66.6%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:66.6%"><!-- wp:group {"metadata":{"name":"Time to Read"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-time-to-read /-->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"1.5"}},"fontSize":"small","fontFamily":"pt-root-ui"} -->
<p class="has-pt-root-ui-font-family has-small-font-size" style="font-style:normal;font-weight:400;line-height:1.5"><?php esc_html_e('read', 'professio');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:post-content {"layout":{"type":"default"}} /-->

<!-- wp:group {"metadata":{"name":"Categories and tags"},"style":{"spacing":{"blockGap":"0px","margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-terms {"term":"post_tag"} /--></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"comments"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /--></div></div>
<!-- /wp:cover -->
