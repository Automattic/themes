<?php
/**
 * Title: Homepage with a small, rounded image
 * Slug: adonay/homepage-with-a-small-rounded-image
 * Categories: page
 * Inserter: yes
 */
?>
<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"left":"5.1vw","right":"5.1vw","top":"5.1vh","bottom":"5.1vh"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="min-height:100%;padding-top:5.1vh;padding-right:5.1vw;padding-bottom:5.1vh;padding-left:5.1vw"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:spacer {"style":{"layout":[]}} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"width":"200px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded","style":{"layout":{"flexSize":"13px","selfStretch":"fixed"}}} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/adonay_image-1-scaled.jpg" alt="" class="" style="aspect-ratio:1;object-fit:cover;width:200px"/></figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":"20px","style":{"layout":[]}} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:site-title /-->

<!-- wp:group {"tagName":"main","layout":{"type":"default"}} -->
<main class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2","fontSize":"38px"}}} -->
<p style="font-size:38px;line-height:1.2"><?php echo wp_kses_post( __ ('I’m a photographer and art director based in Manchester, United Kingdom. When I’m not shooting weddings and portraits, you can find me posting on <a href="#">Instagram</a>. Currently available for hire.', 'adonay') );?></p>
<!-- /wp:paragraph --></main>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#ffffff","size":"has-large-icon-size","className":"is-style-logos-only"} -->
<ul class="wp-block-social-links has-large-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:spacer {"style":{"layout":[]}} -->
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
<p style="font-size:14px"><?php echo wp_kses_post( __ ('Designed with <a href="https://wordpress.org" rel="nofollow">WordPress</a> ', 'adonay') );?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"100px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
