<?php
/**
 * Title: Default Header
 * Slug: stitchery/header
 * Categories: header
 * Block Types: core/template-part/header
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"2px"},"position":{"type":""}},"backgroundColor":"theme-2","layout":{"type":"constrained"},"metadata":{"name":"Header Container"}} -->
<div class="wp-block-group alignfull has-theme-2-background-color has-background" style="border-radius:2px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"style":{"typography":{"lineHeight":"1.5"}},"fontSize":"medium"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:navigation {"overlayBackgroundColor":"theme-1","overlayTextColor":"theme-4","className":"order-1 md:order-0","layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} /-->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Shop', 'stitchery' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->