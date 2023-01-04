<?php
/**
 * Title: Newsletter intro with dark background image
 * Slug: lettre/newsletter-into-dark-background
 * Categories: featured, newsletter
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/envelopes.jpg","dimRatio":70,"overlayColor":"foreground","minHeight":90,"minHeightUnit":"vh","align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:90vh"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" alt="<?php echo esc_attr__( 'A photograph of vintage envelopes.', 'lettre' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/envelopes.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","className":"has-secondary-color has-text-color has-link-color","layout":{"wideSize":"360px"}} -->
<div class="wp-block-group has-secondary-color has-text-color has-link-color"><!-- wp:site-logo {"width":120,"shouldSyncIcon":true,"align":"center","className":"is-style-rounded"} /-->

<!-- wp:site-title {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700","lineHeight":"1.3"}},"fontSize":"x-large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"40px"}}} -->
<div class="wp-block-group"><!-- wp:site-tagline {"textAlign":"center","fontSize":"small"} /-->

<!-- wp:jetpack/subscriptions {"buttonBackgroundColor":"background","textColor":"foreground","borderRadius":50,"borderColor":"secondary","className":"is-style-compact"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><a href="#posts"><?php echo esc_html__( 'Read all posts', 'lettre' ); ?> ↓</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
