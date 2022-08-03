<?php
/**
 * Title: Header with image and gradient background
 * Slug: varese/header-with-image-and-gradient-bg
 * Categories: headers
 */
?>

<!-- wp:group {"style":{"color":{"gradient":"linear-gradient(135deg,rgb(159,148,143) 0%,rgb(55,40,23) 100%)"},"spacing":{"padding":{"top":"60px","bottom":"0px"}}},"className":"gapless-group","layout":{"inherit":true}} -->
<div class="wp-block-group gapless-group has-background" style="background:linear-gradient(135deg,rgb(159,148,143) 0%,rgb(55,40,23) 100%);padding-top:60px;padding-bottom:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var(--wp--custom--gap--vertical)","top":"var(--wp--custom--gap--vertical)"},"margin":{"bottom":"60px"}}},"className":"site-header","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide site-header" style="margin-bottom:60px;padding-top:var(--wp--custom--gap--vertical);padding-bottom:var(--wp--custom--gap--vertical)"><!-- wp:group {"className":"site-brand","layout":{"type":"flex"}} -->
<div class="wp-block-group site-brand"><!-- wp:site-logo {"width":64} /-->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase","letterSpacing":"12px"}},"textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:navigation {"textColor":"white","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"},"blockGap":"40px"},"typography":{"textTransform":"uppercase"}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"60px"}}},"layout":{"contentSize":"680px"}} -->
<div class="wp-block-group" style="padding-bottom:60px"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"white","fontSize":"huge"} -->
<h1 class="has-text-align-center has-white-color has-text-color has-huge-font-size"><?php echo esc_html__( 'The best flavors from the mediterranian.', 'varese' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":"center","style":{"color":{"text":"#ffffffcc"}}} -->
<div class="wp-block-columns are-vertically-aligned-center has-text-color" style="color:#ffffffcc"><!-- wp:column {"verticalAlignment":"center","width":"15%","layout":{"contentSize":"100%"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:separator {"style":{"color":{"background":"#ffffff33"}},"className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-default" style="background-color:#ffffff33;color:#ffffff33"/>
<!-- /wp:separator --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":""} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"8px"}}} -->
<p class="has-text-align-center" style="letter-spacing:8px;text-transform:uppercase"><?php echo esc_html__( 'The Varese Restaurant', 'varese' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"15%","layout":{"contentSize":"100%"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:15%"><!-- wp:separator {"style":{"color":{"background":"#ffffff33"}},"className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-default" style="background-color:#ffffff33;color:#ffffff33"/>
<!-- /wp:separator --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:image {"align":"full","sizeSlug":"full","linkDestination":"none","style":{"color":{}}} -->
<figure class="wp-block-image alignfull size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/main-hero.jpg'; ?>" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->