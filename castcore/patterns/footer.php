<?php
/**
 * Title: footer
 * Slug: castcore/footer
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"1rem","left":"1rem"}}},"backgroundColor":"quaternary","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-quaternary-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-right:1rem;padding-left:1rem"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"61.66%"} -->
<div class="wp-block-column" style="flex-basis:61.66%"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"1.5rem"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-bottom:1.5rem"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.025rem"}},"fontSize":"x-small","fontFamily":"barlow"} -->
<h3 class="wp-block-heading has-barlow-font-family has-x-small-font-size" style="letter-spacing:0.025rem;text-transform:uppercase"><?php esc_html_e('About the podcast', 'castcore');?></h3>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( 'Welcome to %1$sOf Human Lives%2$s, a journey through the incredible lives that have shaped our world. Join host Naomi Ellis as she uncovers the fascinating stories of those who dared to dream, challenge norms, and inspire generations. From innovators to revolutionaries, each episode brings a new perspective on the resilience, vision, and humanity behind history’s most impactful figures.', 'castcore' ), '<em>', '</em>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( 'Step into the lives of remarkable people and see how their legacies still touch us today. Discover the history with a heart on %1$sOf Human Lives%2$s.', 'castcore' ), '<em>', '</em>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"align":"left","className":"no-underline","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<p class="has-text-align-left no-underline" style="font-style:normal;font-weight:700"><?php esc_html_e('PocketCasts', 'castcore');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","className":"no-underline","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<p class="has-text-align-left no-underline" style="font-style:normal;font-weight:700"><?php esc_html_e('Spotify', 'castcore');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","className":"no-underline","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<p class="has-text-align-left no-underline" style="font-style:normal;font-weight:700"><?php esc_html_e('Youtube', 'castcore');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","className":"no-underline","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<p class="has-text-align-left no-underline" style="font-style:normal;font-weight:700"><?php esc_html_e('Apple', 'castcore');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","className":"no-underline","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
<p class="has-text-align-left no-underline" style="font-style:normal;font-weight:700"><?php esc_html_e('RSS Feed', 'castcore');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.025rem"}},"fontSize":"x-small","fontFamily":"barlow"} -->
<h3 class="wp-block-heading has-barlow-font-family has-x-small-font-size" style="letter-spacing:0.025rem;text-transform:uppercase"><?php esc_html_e('Subscribe for updates', 'castcore');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Join our mailing list and get notified when we release new episodes and blog posts. No spam, we guarantee.', 'castcore');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:jetpack/subscriptions {"submitButtonText":"\u003cstrong\u003eSUBSCRIBE\u003c/strong\u003e","fontSize":"0.8rem","customFontSize":"0.8rem","borderRadius":4,"borderWeight":0,"className":"is-style-compact"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"61.66%"} -->
<div class="wp-block-column" style="flex-basis:61.66%"><!-- wp:group {"style":{"spacing":{"blockGap":""}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:site-title /-->

<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"lineHeight":"1"}}} -->
<p class="has-text-align-left" style="line-height:1"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Designed with %1$sWordPress%2$s ', 'castcore' ), '<a href="' . esc_url( '//wordpress.org/)' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#1a171c","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"0.5rem"}}}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"http://wordpress.org","service":"linkedin"} /-->

<!-- wp:social-link {"url":"http://wordpress.org","service":"tumblr"} /-->

<!-- wp:social-link {"url":"http://wordpress.org","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->