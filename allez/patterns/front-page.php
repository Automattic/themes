<?php
/**
 * Title: front-page
 * Slug: allez/front-page
 * Categories: hidden
 * Inserter: no
 */

declare( strict_types = 1 );
?>
<!-- wp:template-part {"slug":"header-with-sticky-post","tagName":"header","align":"full"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"10vh","bottom":"5vh"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:10vh;margin-bottom:5vh"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":0,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"enhancedPagination":true,"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y","style":{"typography":{"fontSize":"0.8rem","letterSpacing":"0.02rem","textTransform":"uppercase"}}} /-->

<!-- wp:post-title {"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":18} /-->

<!-- wp:read-more {"content":"Continue reading →","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"5vh","bottom":"10vh"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:5vh;margin-bottom:10vh"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.6%"} -->
<div class="wp-block-column" style="flex-basis:66.6%"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}}} -->
<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--50)">Next matches</h3>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"1.6rem","right":"1.6rem"}},"border":{"radius":"10px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:10px;padding-top:0.8rem;padding-right:1.6rem;padding-bottom:0.8rem;padding-left:1.6rem"><!-- wp:site-logo {"width":48} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<p class="has-text-align-center">x</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"1.6rem","right":"1.6rem"}},"border":{"radius":"10px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:10px;padding-top:0.8rem;padding-right:1.6rem;padding-bottom:0.8rem;padding-left:1.6rem"><!-- wp:image {"id":125,"width":"48px","height":"48px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-2"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/club-logo_2.png" alt="" class="wp-image-125" style="object-fit:cover;width:48px;height:48px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0rem"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null},"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500">THIS IS US FC  vs  AC THEM</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Sonnet Park — 12/01/2024Add to Cal</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"1.6rem","right":"1.6rem"}},"border":{"radius":"10px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:10px;padding-top:0.8rem;padding-right:1.6rem;padding-bottom:0.8rem;padding-left:1.6rem"><!-- wp:image {"id":125,"width":"48px","height":"48px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|duotone-3"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/club-logo_2.png" alt="" class="wp-image-125" style="object-fit:cover;width:48px;height:48px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<p class="has-text-align-center">x</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"1.6rem","right":"1.6rem"}},"border":{"radius":"10px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:10px;padding-top:0.8rem;padding-right:1.6rem;padding-bottom:0.8rem;padding-left:1.6rem"><!-- wp:site-logo {"width":48} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0rem"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null},"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500">AC THEM vs THIS IS US FC</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Hackney Marches Pitch III — 18/01/2024</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"1.6rem","right":"1.6rem"}},"border":{"radius":"10px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:10px;padding-top:0.8rem;padding-right:1.6rem;padding-bottom:0.8rem;padding-left:1.6rem"><!-- wp:site-logo {"width":48} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<p class="has-text-align-center">x</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"1.6rem","right":"1.6rem"}},"border":{"radius":"10px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:10px;padding-top:0.8rem;padding-right:1.6rem;padding-bottom:0.8rem;padding-left:1.6rem"><!-- wp:image {"id":125,"width":"48px","height":"48px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/club-logo_2.png" alt="" class="wp-image-125" style="object-fit:cover;width:48px;height:48px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0rem"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null},"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500">THIS IS US FC  vs  AC THEM</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Sonnet Park — 12/01/2024Add to Cal</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}}} -->
<h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--50)">Get to Know Us</h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p>Beyond the pitch, the Bards actively engage in community initiatives.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>From 'Playwrights for Playgrounds' to 'Literacy Goals,' explore our commitment to making a positive impact.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:read-more {"content":"About us →","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /-->