<?php
/**
 * Title: Full width banner
 * Slug: jenn/full-width-banner
 * Categories: banner, call-to-action, featured
 * Viewport width: 1400
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hero-image-scaled.jpg","dimRatio":10,"overlayColor":"contrast","isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-10 has-background-dim"></span><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hero-image-scaled.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"dimensions":{"minHeight":"500px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="min-height:500px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"align":"wide","fontSize":"xx-large"} -->
<h1 class="wp-block-heading alignwide has-text-align-center has-xx-large-font-size"><?php esc_html_e('Stillness of mind, stillness of heart', 'jenn');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('I’m Jenn Hathaway, yoga enthusiast and teacher in training and this is my philosophy.', 'jenn');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('See Lessons & Retreats', 'jenn');?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('About Me', 'jenn');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
