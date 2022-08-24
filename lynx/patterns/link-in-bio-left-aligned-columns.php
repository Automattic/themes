<?php
/**
 * Title: Link in Bio with left-aligned content
 * Slug: lynx/link-in-bio-left-aligned-columns
 * Inserter: yes
 * Categories: featured, link-in-bio
 */
?>

<!-- wp:cover {"customOverlayColor":"#f9d949","minHeight":100,"minHeightUnit":"vh","contentPosition":"top left","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"7vw","right":"7vw","bottom":"7vw","left":"7vw"}}}} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-top-left" style="padding-top:7vw;padding-right:7vw;padding-bottom:7vw;padding-left:7vw;min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim" style="background-color:#f9d949"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"contentSize":"540px"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"#00000099"}}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-link-color"><!-- wp:image {"width":152,"height":152,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/two-women.jpg'; ?>" alt="" width="152" height="152"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"style":{"typography":{"fontSize":"4rem","fontStyle":"normal","fontWeight":"500","letterSpacing":"-5px"}},"className":"has-custom-font","fontFamily":"bodoni-moda"} -->
<h2 class="has-custom-font has-bodoni-moda-font-family" style="font-size:4rem;font-style:normal;font-weight:500;letter-spacing:-5px"><?php echo  esc_html__( 'Howdy!', 'lynx' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo  esc_html__( 'Niah Jones is an artist living in New York City who has a passion for generative art in the 3D space. Currently accepting new clients.', 'lynx' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong><?php echo  esc_html__( 'Find me', 'lynx' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo  esc_html__( 'Instagram', 'lynx' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo  esc_html__( 'Blog', 'lynx' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo  esc_html__( 'Tumblr', 'lynx' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo  esc_html__( 'Twitter', 'lynx' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong><?php echo  esc_html__( 'Contact Me', 'lynx' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="#"><?php echo  esc_html__( 'Email', 'lynx' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo  esc_html__( 'LinkedIn', 'lynx' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><strong><?php echo  esc_html__( 'Projects', 'lynx' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo  esc_html__( 'Portfolio', 'lynx' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><a href="#"><?php echo  esc_html__( 'Testimonials', 'lynx' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->