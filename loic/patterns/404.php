<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: A 404 page
 * Slug: loic/404
 * Inserter: no
 */

?>

<!-- wp:cover {"overlayColor":"background","minHeight":100,"minHeightUnit":"vh","textColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-primary-color has-text-color" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"fontSize":"large"} -->
<h1 class="wp-block-heading has-large-font-size"><?php echo esc_html__( 'The page you\'re looking for could not be found.', 'loic' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/"><?php echo  esc_html__( 'Return to homepage', 'loic' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->