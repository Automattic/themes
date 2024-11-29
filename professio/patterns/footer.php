<?php
/**
 * Title: footer
 * Slug: professio/footer
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Footer wrapper"},"align":"full","style":{"border":{"bottom":{"width":"2px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|70"},"blockGap":"var:preset|spacing|60","margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-color has-base-background-color has-text-color has-background has-link-color" style="border-bottom-width:2px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"top","width":"46.6%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:46.6%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"lineHeight":"0.9","textTransform":"uppercase"}},"fontSize":"xxxx-large"} -->
<h2 class="wp-block-heading has-xxxx-large-font-size" style="line-height:0.9;text-transform:uppercase"><?php esc_html_e('Meet Nausicaä Rossi', 'professio');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Are you ready for your language journey, or do you need expert translation services? Do you have questions or want to schedule a class? Contact me, and let\'s start this exciting adventure together!', 'professio');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"33.3%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:33.3%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/StockSnap_J633WD7BAR_web.jpg","dimRatio":0,"customOverlayColor":"#443523","isUserOverlayColor":false,"contentPosition":"top left","sizeSlug":"full","style":{"dimensions":{"aspectRatio":"3/4"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-left"><img class="wp-block-cover__image-background size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/StockSnap_J633WD7BAR_web.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#443523"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…"} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"name":"Links and credit"},"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Links"},"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"Link"},"className":"no-underline","style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"textTransform":"uppercase"}},"fontSize":"x-small","fontFamily":"pt-root-ui"} -->
<p class="no-underline has-pt-root-ui-font-family has-x-small-font-size" style="text-transform:uppercase"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sTumblr%2$s.', 'professio' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"name":"Link"},"className":"no-underline","style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"textTransform":"uppercase"}},"fontSize":"x-small","fontFamily":"pt-root-ui"} -->
<p class="no-underline has-pt-root-ui-font-family has-x-small-font-size" style="text-transform:uppercase"><?php esc_html_e('TikTok.', 'professio');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"name":"Link"},"className":"no-underline","style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"textTransform":"uppercase"}},"fontSize":"x-small","fontFamily":"pt-root-ui"} -->
<p class="no-underline has-pt-root-ui-font-family has-x-small-font-size" style="text-transform:uppercase"><?php esc_html_e('Instgrm.', 'professio');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"name":"Link"},"className":"no-underline","style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"textTransform":"uppercase"}},"fontSize":"x-small","fontFamily":"pt-root-ui"} -->
<p class="no-underline has-pt-root-ui-font-family has-x-small-font-size" style="text-transform:uppercase"><?php esc_html_e('BlueSky', 'professio');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"right","metadata":{"name":"Designed with WordPress"},"fontSize":"small"} -->
<p class="has-text-align-right has-small-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Designed with %1$sWordPress%2$s', 'professio' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->