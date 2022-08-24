<?php
/**
 * Title: Link in Bio with image at the bottom
 * Slug: lynx/link-in-bio-image-bottom
 * Inserter: yes
 * Categories: featured, link-in-bio
 */
?>

<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"style":{"spacing":{"margin":{"top":"128px","bottom":"128px"},"blockGap":"32px"}}} -->
<div class="wp-block-group" style="margin-top:128px;margin-bottom:128px"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"3rem"}}} -->
<h2 style="font-size:3rem;font-style:normal;font-weight:700"><?php echo  esc_html__( 'Hi, I’m Matt', 'lynx' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.4"}},"fontSize":"large"} -->
<p class="has-large-font-size" style="line-height:1.4"><?php echo  esc_html__( 'Matt Jones is an artist living in New York City who has a passion for generative art in the 3D space. Currently accepting new clients.', 'lynx' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000080"}}}}} -->
<p class="has-link-color"><a href="#"><?php echo  esc_html__( 'Instagram', 'lynx' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000080"}}}}} -->
<p class="has-link-color"><a href="#"><?php echo  esc_html__( 'Blog', 'lynx' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000080"}}}}} -->
<p class="has-link-color"><a href="#"><?php echo  esc_html__( 'Tumblr', 'lynx' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#00000080"}}}}} -->
<p class="has-link-color"><a href="#"><?php echo  esc_html__( 'Twitter', 'lynx' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/man-bw-portrait.jpg'; ?>","dimRatio":0,"focalPoint":{"x":"0.51","y":"0.34"},"minHeight":75,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light" style="min-height:75vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/man-bw-portrait.jpg'; ?>" style="object-position:51% 34%" data-object-fit="cover" data-object-position="51% 34%"/><div class="wp-block-cover__inner-container"></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->