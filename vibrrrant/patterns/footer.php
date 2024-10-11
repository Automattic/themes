<?php
/**
 * Title: footer
 * Slug: vibrrrant/footer
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-text-color has-link-color"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"medium","fontFamily":"ojuju"} -->
<p class="has-ojuju-font-family has-medium-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><?php echo __('<a href="#">Airbnb</a>/<a href="#">Booking</a>/<a href="#">TripAdvisor</a>', 'vibrrrant');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php echo wp_kses_post( __ ( 'Designed with <a href="https://wordpress.org" rel="nofollow">WordPress</a>', 'vibrrrant' ) );?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
