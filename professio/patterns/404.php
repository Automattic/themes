<?php
/**
 * Title: 404
 * Slug: professio/404
 * Inserter: no
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/StockSnap_ESDCTK2C7Z_web.png","hasParallax":true,"dimRatio":0,"isUserOverlayColor":true,"isDark":false,"sizeSlug":"full","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"color":{"duotone":"var:preset|duotone|duo-secondary"}},"layout":{"type":"default"}} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><div class="wp-block-cover__image-background size-full has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/StockSnap_ESDCTK2C7Z_web.png)"></div><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"style":{"spacing":{"blockGap":"var:preset|spacing|70","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"dimensions":{"minHeight":"30vh"}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background has-link-color" style="min-height:30vh;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","width":"66.6%","style":{"spacing":{"padding":{"bottom":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-bottom:0;flex-basis:66.6%"><!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"uppercase","lineHeight":"0.9"}},"fontSize":"xxxx-large"} -->
<h1 class="wp-block-heading has-xxxx-large-font-size" id="oops-that-page-can-t-be-found" style="line-height:0.9;text-transform:uppercase"><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'Oops! page%1$snot found.', 'professio' ), '<br>' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.3%","style":{"spacing":{"padding":{"bottom":"0","top":"10px"}}}} -->
<div class="wp-block-column" style="padding-top:10px;padding-bottom:0;flex-basis:33.3%"><!-- wp:paragraph -->
<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'professio');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /--></div></div>
<!-- /wp:cover -->