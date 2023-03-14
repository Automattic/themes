<?php
/**
 * Title: Header Home
 * slug: iotix/header-home
 * inserter: no
 */

?>

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Hero-Image.png","id":474,"dimRatio":0,"overlayColor":"primary","contentPosition":"center center"} -->
<div class="wp-block-cover"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-474" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Hero-Image.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"0","bottom":"var:preset|spacing|60","left":"0"}}}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|tertiary"}}}}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}}} -->
<div class="wp-block-group has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:navigation {"fontSize":"medium"} /-->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foreground","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-foreground-color has-tertiary-background-color has-text-color has-background wp-element-button"><?php echo esc_html__( 'Sign In', 'iotix' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"11rem","bottom":"11rem"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:11rem;padding-bottom:11rem"><!-- wp:column {"width":"33.34%"} -->
<div class="wp-block-column" style="flex-basis:33.34%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"80%"} -->
<div class="wp-block-column" style="flex-basis:80%"><!-- wp:heading {"textAlign":"center","level":1,"align":"wide","style":{"typography":{"lineHeight":1},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"},"padding":{"bottom":"0","right":"0"}}},"textColor":"tertiary","fontSize":"x-large"} -->
<h1 class="alignwide has-text-align-center has-tertiary-color has-text-color has-x-large-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-right:0;padding-bottom:0;line-height:1"><?php echo esc_html__( 'Machine learning for designers, made easy.', 'iotix' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"},"padding":{"right":"0vw","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"textColor":"background","fontSize":"medium"} -->
<p class="has-text-align-center has-background-color has-text-color has-medium-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--50);padding-right:0vw;padding-bottom:var(--wp--preset--spacing--50)"><?php echo esc_html__( 'Speed up your design process by creating realistic mockups with AI-driven content, all through the power of machine learning.', 'iotix' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground","textColor":"tertiary","className":"is-style-fill","fontSize":"medium"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-medium-font-size"><a class="wp-block-button__link has-tertiary-color has-foreground-background-color has-text-color has-background wp-element-button"><?php echo esc_html__( 'Get Started', 'iotix' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->