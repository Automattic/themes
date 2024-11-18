<?php
/**
 * Title: footer
 * Slug: casthub/footer
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Footer wrapper"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80"}},"backgroundColor":"secondary","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-secondary-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Links for Players"},"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"0"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
<div class="wp-block-group alignwide" style="padding-right:0;padding-left:0"><!-- wp:group {"metadata":{"name":"Player Title and Logo"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"32px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon_pocketcasts.png" alt="" style="width:32px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","className":"no-underline","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
<p class="has-text-align-left no-underline has-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('PocketCasts', 'casthub');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Player Title and Logo"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"32px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon_youtube.png" alt="" style="width:32px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","className":"no-underline","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
<p class="has-text-align-left no-underline has-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('YouTube', 'casthub');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Player Title and Logo"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"32px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon_apple.png" alt="" style="width:32px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","className":"no-underline","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
<p class="has-text-align-left no-underline has-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('ApplePods', 'casthub');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Player Title and Logo"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"32px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon_spotify.png" alt="" style="width:32px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","className":"no-underline","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
<p class="has-text-align-left no-underline has-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('Spotify', 'casthub');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Player Title and Logo"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"32px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|secondary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon_rss.png" alt="" style="width:32px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","className":"no-underline","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} -->
<p class="has-text-align-left no-underline has-small-font-size" style="font-style:normal;font-weight:700"><?php esc_html_e('RSS', 'casthub');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"61.66%"} -->
<div class="wp-block-column" style="flex-basis:61.66%"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.03rem","fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.03rem;text-transform:uppercase"><?php esc_html_e('About the podcast', 'casthub');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"About copy"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph -->
<p><?php esc_html_e('Welcome to The Houseplant Podcast, your ultimate guide to houseplants! Join us as we explore the wonders and importance of plants in our lives. From plant-based lifestyles to their well-being qualities, we\'ll cover everything related to these green treasures.', 'casthub');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Let\'s dive into the joy of indoor gardening, learn about plant care, and discover how houseplants can transform our homes into lush sanctuaries. Get ready to be inspired and enchanted by the magic of plants on THP.', 'casthub');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.03rem","fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.03rem;text-transform:uppercase"><?php esc_html_e('Subscribe for updates', 'casthub');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e('Join our mailing list and get notified when we release new episodes and blog posts. No spam, we guarantee.', 'casthub');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:jetpack/subscriptions {"submitButtonText":"<strong><?php esc_html_e('SUBSCRIBE', 'casthub');?></strong>","fontSize":"x-small","customFontSize":"x-small","borderRadius":4,"borderWeight":0,"className":"is-style-compact"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"61.66%"} -->
<div class="wp-block-column" style="flex-basis:61.66%"><!-- wp:group {"style":{"spacing":{"blockGap":""}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:site-title {"fontSize":"x-small"} /-->

<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|50"}},"fontSize":"x-small","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right","orientation":"horizontal"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"5%"} -->
<div class="wp-block-column" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","fontSize":"x-small"} -->
<p class="has-text-align-left has-x-small-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Designed with %1$sWordPress%2$s ', 'casthub' ), '<a href="' . esc_url( '//wordpress.org/)' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"tertiary","iconColorValue":"#afb6b6","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"http://wordpress.org","service":"linkedin"} /-->

<!-- wp:social-link {"url":"http://wordpress.org","service":"tumblr"} /-->

<!-- wp:social-link {"url":"http://wordpress.org","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->