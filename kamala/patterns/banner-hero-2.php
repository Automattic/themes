<?php
/**
 * Title: Hero 2
 * Slug: kamala/banner-hero-2
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"100","letterSpacing":"-0.07em","fontSize":"7rem","lineHeight":"1"}}} -->
<h1 class="wp-block-heading has-text-align-left" style="font-size:7rem;font-style:normal;font-weight:100;letter-spacing:-0.07em;line-height:1"><?php echo wp_kses_post( __('Awaken your <em>potential</em>', 'kamala') );?></h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:spacer {"height":"1.25rem"} -->
<div style="height:1.25rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('Join us in the city’s most beautiful and friendly yoga studio, where the most talented teachers are ready to help you discover, explore and develop your yoga practice.', 'kamala');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"1.25rem"} -->
<div style="height:1.25rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('About us', 'kamala');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide","className":"is-style-default","style":{"border":{"radius":{"topLeft":"400px"}}}} -->
<figure class="wp-block-image alignwide size-full has-custom-border is-style-default"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hero_image-scaled.jpg" alt="" style="border-top-left-radius:400px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
