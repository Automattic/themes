<?php
/**
 * Title: Link in Bio with image at the bottom
 * Slug: lynx/link-in-bio-image-bottom
 * Inserter: yes
 * Categories: featured, link-in-bio
 */
?>

<!-- wp:group {"layout":{"inherit":true,"type":"constrained"},"align":"full"} -->
<div class="wp-block-group alignfull"><!-- wp:group {"style":{"spacing":{"margin":{"top":"128px","bottom":"128px"},"blockGap":"28px"}}} -->
<div class="wp-block-group" style="margin-top:128px;margin-bottom:128px"><!-- wp:site-title {"isLink":false,"style":{"typography":{"fontSize":"3rem","fontStyle":"normal","fontWeight":"700"}}} /-->

<!-- wp:site-tagline {"style":{"typography":{"lineHeight":"1.4"}},"fontSize":"medium"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000080"}}}},"fontSize":"small"} -->
<p class="has-link-color has-small-font-size"><a href="#"><?php echo  esc_html__( 'Instagram', 'lynx' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000080"}}}},"fontSize":"small"} -->
<p class="has-link-color has-small-font-size"><a href="#"><?php echo  esc_html__( 'Blog', 'lynx' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000080"}}}},"fontSize":"small"} -->
<p class="has-link-color has-small-font-size"><a href="#"><?php echo  esc_html__( 'Tumblr', 'lynx' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000080"}}}},"fontSize":"small"} -->
<p class="has-link-color has-small-font-size"><a href="#"><?php echo  esc_html__( 'Twitter', 'lynx' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/man-bw-portrait.jpg'; ?>","dimRatio":0,"focalPoint":{"x":"0.51","y":"0.34"},"minHeight":75,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light" style="min-height:75vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/man-bw-portrait.jpg'; ?>" style="object-position:51% 34%" data-object-fit="cover" data-object-position="51% 34%"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->