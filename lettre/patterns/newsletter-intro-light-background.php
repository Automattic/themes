<?php
/**
 * Title: Newsletter intro with light background image
 * Slug: lettre/newsletter-into-light-background
 * Categories: featured, newsletter
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/envelope.jpg","dimRatio":50,"overlayColor":"secondary","minHeight":90,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light" style="min-height:90vh"><span aria-hidden="true" class="wp-block-cover__background has-secondary-background-color has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr__( 'A photograph of an envelope.', 'lettre' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/envelope.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"contentSize":"360px"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":120,"shouldSyncIcon":true,"align":"center","className":"is-style-rounded"} /-->

<!-- wp:site-title {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}},"fontSize":"x-large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"40px"}}} -->
<div class="wp-block-group"><!-- wp:site-tagline {"textAlign":"center","fontSize":"small"} /-->

<!-- wp:jetpack/subscriptions {"buttonBackgroundColor":"primary","textColor":"secondary","borderRadius":50,"borderColor":"primary","className":"is-style-compact"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><a href="#posts"><?php echo esc_html__( 'Read all posts', 'lettre' ); ?> ↓</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
