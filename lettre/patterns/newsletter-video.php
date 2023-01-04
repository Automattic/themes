<?php
/**
 * Title: Newsletter signup with video background
 * Slug: lettre/newsletter-video
 * Categories: featured, newsletter
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/car.mp4","dimRatio":50,"overlayColor":"foreground","backgroundType":"video","minHeight":100,"minHeightUnit":"vh","contentPosition":"center right","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"70px","right":"70px","bottom":"70px","left":"70px"}}}} -->
  <div class="wp-block-cover alignfull is-light has-custom-content-position is-position-center-right" style="padding-top:70px;padding-right:70px;padding-bottom:70px;padding-left:70px;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span><video class="wp-block-cover__video-background intrinsic-ignore" autoplay muted loop playsinline src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/car.mp4" data-object-fit="cover"></video><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"wideSize":"480px"}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"40px"} --><div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer --><!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"layout":{"type":"flex","orientation":"vertical"}} --><div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"textColor":"secondary","fontSize":"x-large"} -->
<p class="has-secondary-color has-text-color has-x-large-font-size" style="line-height:1.2"><?php echo esc_html__( 'Get our latest posts in your inbox.', 'lettre' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/subscriptions {"subscribePlaceholder":"<?php echo esc_html__( 'Email Address', 'lettre' ); ?>","buttonWidth":"","submitButtonText":"<?php echo esc_html__( 'Subscribe', 'lettre' ); ?>","buttonBackgroundColor":"secondary","textColor":"foreground","fontSize":"1.3rem","customFontSize":"1.3rem","borderRadius":50,"borderWeight":2,"borderColor":"secondary","padding":20,"className":"is-style-compact"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
