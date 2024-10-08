<?php
/**
 * Title: Services call to action in 3 columns
 * Slug: jenn/cta-services-grid-3-col
 * Categories: call-to-action, banner, featured, services
 * Viewport width: 1400
 */
?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:0;padding-bottom:0"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":6,"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/hero-image-scaled.jpg" alt="" class="wp-image-6" style="aspect-ratio:3/2;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":3,"className":"is-style-default","fontSize":"x-large","fontFamily":"body"} -->
<h3 class="wp-block-heading has-text-align-left is-style-default has-body-font-family has-x-large-font-size">Online Yoga</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong>60 minutes</strong><br>Minimum 2 pax<br>Mon and Wed, 7 AM and 8PM</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Accessible to everyone lasting 1 hour, where we practice and build a conscious practice around different themes related to yoga and life.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Book Class</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":23,"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/jenn-post-2.jpg" alt="" class="wp-image-23" style="aspect-ratio:3/2;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":3,"className":"is-style-default","fontSize":"x-large","fontFamily":"body"} -->
<h3 class="wp-block-heading has-text-align-left is-style-default has-body-font-family has-x-large-font-size">In Person Yoga</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo wp_kses_post( __ ( '<strong>60 minutes</strong><br>Minimum 1 pax/can be individual<br>Tue, Thu, Fri and Sat, 8 AM', 'jenn' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Accessible to everyone lasting 1 hour, where we practice and build a conscious practice around different themes related to yoga and life.', 'jenn' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Book Class', 'jenn' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"id":22,"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/jenn-post-1.jpg" alt="" class="wp-image-22" style="aspect-ratio:3/2;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left","level":3,"className":"is-style-default","fontSize":"x-large","fontFamily":"body"} -->
<h3 class="wp-block-heading has-text-align-left is-style-default has-body-font-family has-x-large-font-size">Private Lessons</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo wp_kses_post( __ ( '<strong>60 minutes</strong><br>Minimum 2 pax<br>At LA Yoga Studio or your home', 'jenn' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'If you would like to have a more personalized practice completely adapted to you, your needs and your pace then this modality is for you.', 'jenn' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Contact Me', 'jenn' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
