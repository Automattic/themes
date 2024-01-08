<?php
/**
 * Title: Home
 * Slug: vivre/home
 * Categories: featured
 */

declare( strict_types = 1 );
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/vivre_cover_image-scaled.jpg","id":8,"hasParallax":true,"dimRatio":20,"overlayColor":"foreground","minHeight":100,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background"} -->
<div class="wp-block-cover alignfull has-parallax has-background-color has-text-color has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-20 has-background-dim"></span><div role="img" class="wp-block-cover__image-background wp-image-8 has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/vivre_cover_image-scaled.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"top"}} -->
<div class="wp-block-group alignfull" style="min-height:100vh;padding-right:0;padding-left:0"><!-- wp:template-part {"slug":"header-inverted"} /-->

<!-- wp:spacer {"height":"220px","style":{"layout":{"flexSize":"120px","selfStretch":"fixed"}}} -->
<div style="height:220px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"5rem","bottom":"2rem"}}},"layout":{"type":"constrained","contentSize":"800px"}} -->
<div class="wp-block-group alignfull" style="margin-top:5rem;margin-bottom:2rem"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"7rem"}}} -->
<h2 class="wp-block-heading has-text-align-center" style="font-size:7rem"><?php echo esc_html__( 'Cult Objects', 'vivre' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.3","fontSize":"22px"}}} -->
<p class="has-text-align-center" style="font-size:22px;line-height:1.3"><?php echo esc_html__( 'The Cult Collection by Joan Wilson. A classic collection by the traditional Swedish manufacturer in collaboration with contemporary designer Marianne Lewis.', 'vivre' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"large","fontFamily":"work-sans"} -->
<p class="has-text-align-center has-work-sans-font-family has-large-font-size" style="font-style:normal;font-weight:900"><a href="#"><?php echo esc_html__( 'READ MORE', 'vivre' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"2rem","bottom":"3rem"}}}} -->
<div class="wp-block-group alignwide" style="padding-top:2rem;padding-bottom:3rem"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php echo esc_html__( 'Recent posts', 'vivre' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"perPage":3}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:post-title {"level":1,"isLink":true,"style":{"typography":{"lineHeight":1}}} /-->

<!-- wp:separator {"className":"alignfull"} -->
<hr class="wp-block-separator has-alpha-channel-opacity alignfull"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><?php echo esc_html__( 'Recent photos', 'vivre' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:query {"queryId":1,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"perPage":2}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:post-featured-image {"height":"770px"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->