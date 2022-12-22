<?php
/**
 * Title: Newsletter signup with media on the left
 * Slug: lettre/newsletter-media-text
 * Categories: featured, newsletter
 */
?>

<!-- wp:media-text {"align":"full","mediaType":"image","mediaWidth":42,"verticalAlignment":"center","style":{"color":{"background":"#ffe030"}}} -->
<div class="wp-block-media-text alignfull is-stacked-on-mobile is-vertically-aligned-center has-background" style="background-color:#ffe030;grid-template-columns:42% auto"><figure class="wp-block-media-text__media"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/flowers-vase.jpg" alt="<?php echo esc_attr__( 'Illustration of flowers in a vase.', 'lettre' ); ?>"/></figure><div class="wp-block-media-text__content"><!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
<div class="wp-block-group"><!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"textColor":"black","fontSize":"large"} -->
<p class="has-black-color has-text-color has-large-font-size"><?php echo esc_html__( 'Subscribe to our newsletter to get the latest stories in your inbox.', 'lettre' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:jetpack/subscriptions {"buttonOnNewLine":true,"buttonWidth":"100%","submitButtonText":"<?php echo esc_html__( 'Subscribe', 'lettre' ); ?>","buttonBackgroundColor":"black","customTextColor":"#ffe030","fontSize":"1.75rem","customFontSize":"1.75rem","borderRadius":50,"borderWeight":1,"borderColor":"black","padding":24,"spacing":15,"className":"is-style-split"} /--></div></div>
<!-- /wp:media-text -->
