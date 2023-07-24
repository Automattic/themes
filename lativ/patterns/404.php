<?php
/**
 * Title: 404 Content
 * Slug: lativ/404
 */
?>

<!-- wp:cover {"overlayColor":"primary","minHeight":100,"minHeightUnit":"vh","textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-background-color has-text-color" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-100 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">404</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Page not found', 'lativ' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"16px","right":"30px","bottom":"16px","left":"30px"}},"border":{"radius":"100px"}},"backgroundColor":"custom-green","textColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-color has-custom-green-background-color has-text-color has-background" style="border-radius:100px;padding-top:16px;padding-right:30px;padding-bottom:16px;padding-left:30px"><!-- wp:paragraph -->
<p><a href="/"><?php echo esc_html__( 'Go Home', 'lativ' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
