<?php
/**
 * Title: Link in Bio with image at the bottom
 * Slug: lynx/link-in-bio-image-bottom
 * Inserter: yes
 * Categories: featured, link-in-bio
 */
?>

<!-- wp:group {"layout":{"inherit":true,"type":"constrained"},"align":"full"} -->
<div class="wp-block-group alignfull"><!-- wp:group {"style":{"spacing":{"padding":{"top":"128px","bottom":"16px"}}}} -->
<div class="wp-block-group" style="padding-top:128px;padding-bottom:16px"><!-- wp:site-title {"isLink":false,"style":{"typography":{"fontSize":"3rem","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"8px"}}}} /-->

<!-- wp:site-tagline {"style":{"typography":{"lineHeight":"1.4"},"spacing":{"margin":{"top":"8px"}}},"fontSize":"medium"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000080"}}}}} -->
<p class="has-link-color"><a href="#"><?php echo  esc_html__( 'Instagram', 'lynx' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000080"}}}}} -->
<p class="has-link-color"><a href="#"><?php echo  esc_html__( 'Instagram', 'lynx' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000080"}}}}} -->
<p class="has-link-color"><a href="#"><?php echo  esc_html__( 'Instagram', 'lynx' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000080"}}}}} -->
<p class="has-link-color"><a href="#"><?php echo  esc_html__( 'Instagram', 'lynx' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/man-bw-portrait-2.jpg'; ?>","id":180,"dimRatio":0,"minHeight":75,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light" style="min-height:75vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-180" alt="" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/man-bw-portrait-2.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->