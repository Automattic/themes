<?php
/**
 * Title: index
 * Slug: alleyoop/index
 * Categories: hidden
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header-with-sticky-post","tagName":"header","align":"full"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2vh","margin":{"top":"10vh","bottom":"10vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:10vh;margin-bottom:10vh"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0rem","bottom":"0rem"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide" style="padding-top:0rem;padding-bottom:0rem"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Latest Posts', 'alleyoop' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","letterSpacing":"0.02rem","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color" style="font-size:0.8rem;letter-spacing:0.02rem;text-transform:uppercase"><a href="#" data-type="page" data-id="25"><?php echo esc_html__( 'View all', 'alleyoop' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"enhancedPagination":true,"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"5vh"}},"border":{"bottom":{"width":"2px","style":"dotted"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-bottom-style:dotted;border-bottom-width:2px;padding-top:0;padding-bottom:5vh"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:post-title {"level":3,"isLink":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":40} /-->

<!-- wp:post-date {"format":"M j, Y","style":{"typography":{"fontSize":"0.8rem","letterSpacing":"0.02rem","textTransform":"uppercase"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"default"},"fontSize":"x-large"} -->
<div class="wp-block-group has-x-large-font-size" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:query-pagination-previous {"label":"<?php echo esc_html__( 'Prev', 'alleyoop' ); ?>"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"<?php echo esc_html__( 'Next', 'alleyoop' ); ?>"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2vh","margin":{"top":"10vh","bottom":"10vh"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:10vh;margin-bottom:10vh"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Coming Fixtures', 'alleyoop' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.8rem","letterSpacing":"0.02rem","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color" style="font-size:0.8rem;letter-spacing:0.02rem;text-transform:uppercase"><a href="#" data-type="page" data-id="25"><?php echo esc_html__( 'View', 'alleyoop' ); ?></a><a href="#" data-type="page" data-id="33"> </a><a href="#" data-type="page" data-id="25"><?php echo esc_html__( 'all', 'alleyoop' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"5vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"5.37rem"}}} -->
<h1 class="wp-block-heading" style="font-size:5.37rem"><?php echo esc_html__( 'The 2024 Season', 'alleyoop' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Get to know the upcoming challenges we are about to face next.', 'alleyoop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"bottom":{"width":"2px","style":"dotted"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-bottom-style:dotted;border-bottom-width:2px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"0.8rem","right":"0.8rem"}},"border":{"radius":"10px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:10px;padding-top:0.8rem;padding-right:0.8rem;padding-bottom:0.8rem;padding-left:0.8rem"><!-- wp:image {"id":124,"width":"48px","height":"48px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/club-logo_1.png" alt="" class="wp-image-124" style="object-fit:cover;width:48px;height:48px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
<p><?php echo esc_html__( 'This is Us F.C', 'alleyoop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
<p class="has-text-align-center"><?php echo esc_html__( 'x', 'alleyoop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
<p class="has-text-align-right"><?php echo esc_html__( 'A.C. Them', 'alleyoop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"0.8rem","right":"0.8rem"}},"border":{"radius":"10px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:10px;padding-top:0.8rem;padding-right:0.8rem;padding-bottom:0.8rem;padding-left:0.8rem"><!-- wp:image {"id":125,"width":"48px","height":"48px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/club-logo_2.png" alt="" class="wp-image-125" style="object-fit:cover;width:48px;height:48px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Sonnet Park — 12/01/2024', 'alleyoop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"0.8rem","letterSpacing":"0.02rem","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-text-align-right has-primary-color has-text-color has-link-color" style="font-size:0.8rem;letter-spacing:0.02rem;text-transform:uppercase"><?php echo esc_html__( 'Add to Cal', 'alleyoop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"bottom":{"width":"2px","style":"dotted"},"top":[],"right":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="border-bottom-style:dotted;border-bottom-width:2px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"0.8rem","right":"0.8rem"}},"border":{"radius":"10px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:10px;padding-top:0.8rem;padding-right:0.8rem;padding-bottom:0.8rem;padding-left:0.8rem"><!-- wp:image {"id":125,"width":"48px","height":"48px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/club-logo_2.png" alt="" class="wp-image-125" style="object-fit:cover;width:48px;height:48px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
<p><?php echo esc_html__( 'A.C. Them', 'alleyoop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
<p class="has-text-align-center"><?php echo esc_html__( 'x', 'alleyoop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
<p class="has-text-align-right"><?php echo esc_html__( 'This is Us F.C', 'alleyoop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"0.8rem","right":"0.8rem"}},"border":{"radius":"10px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:10px;padding-top:0.8rem;padding-right:0.8rem;padding-bottom:0.8rem;padding-left:0.8rem"><!-- wp:image {"id":124,"width":"48px","height":"48px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/club-logo_1.png" alt="" class="wp-image-124" style="object-fit:cover;width:48px;height:48px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Hackney Marches Pitch III — 18/01/2024', 'alleyoop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"0.8rem","letterSpacing":"0.02rem","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-text-align-right has-primary-color has-text-color has-link-color" style="font-size:0.8rem;letter-spacing:0.02rem;text-transform:uppercase"><?php echo esc_html__( 'Add to Cal', 'alleyoop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"0.8rem","right":"0.8rem"}},"border":{"radius":"10px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:10px;padding-top:0.8rem;padding-right:0.8rem;padding-bottom:0.8rem;padding-left:0.8rem"><!-- wp:image {"id":124,"width":"48px","height":"48px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/club-logo_1.png" alt="" class="wp-image-124" style="object-fit:cover;width:48px;height:48px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
<p><?php echo esc_html__( 'This is Us F.C', 'alleyoop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
<p class="has-text-align-center"><?php echo esc_html__( 'x', 'alleyoop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","style":{"layout":{"selfStretch":"fill","flexSize":null}}} -->
<p class="has-text-align-right"><?php echo esc_html__( 'A.C. Them', 'alleyoop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"0.8rem","right":"0.8rem"}},"border":{"radius":"10px"}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="border-radius:10px;padding-top:0.8rem;padding-right:0.8rem;padding-bottom:0.8rem;padding-left:0.8rem"><!-- wp:image {"id":125,"width":"48px","height":"48px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/club-logo_2.png" alt="" class="wp-image-125" style="object-fit:cover;width:48px;height:48px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Sonnet Park — 12/01/2024', 'alleyoop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","style":{"typography":{"fontSize":"0.8rem","letterSpacing":"0.02rem","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
<p class="has-text-align-right has-primary-color has-text-color has-link-color" style="font-size:0.8rem;letter-spacing:0.02rem;text-transform:uppercase"><?php echo esc_html__( 'Add to Cal', 'alleyoop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"full"} /-->