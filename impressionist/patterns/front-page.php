<?php
/**
 * Title: front-page
 * Slug: impressionist/front-page
 * Categories: hidden
 * Inserter: no
 */

declare( strict_types = 1 );
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/impressionist-home-bg.jpg","hasParallax":true,"dimRatio":20,"overlayColor":"base","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","isDark":false,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-parallax" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__image-background  has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/impressionist-home-bg.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<main class="wp-block-group"><!-- wp:site-title {"textAlign":"center","fontSize":"x-large"} /-->

<!-- wp:navigation {"hasIcon":false,"layout":{"type":"flex","justifyContent":"center"}} /--></div>
<!-- /wp:group --></main></div>
<!-- /wp:cover -->
