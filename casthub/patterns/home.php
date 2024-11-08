<?php
/**
 * Title: home
 * Slug: casthub/home
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header-home"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|80"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:group {"metadata":{"name":"Podcasts"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","height":"","style":{"color":[]}} /-->

<!-- wp:post-title {"isLink":true} /-->

<!-- wp:group {"metadata":{"name":"Post copy and meta"},"style":{"spacing":{"blockGap":"1.5rem","margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":25} /-->

<!-- wp:group {"metadata":{"name":"Date and category"},"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","verticalAlignment":"bottom"}} -->
<div class="wp-block-group"><!-- wp:post-date {"isLink":true} /-->

<!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"align":"wide","style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","justifyContent":"left"}} -->
<!-- wp:query-pagination-previous {"label":"Prev"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Next"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Meet the Host"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"stretch","width":"66.6%"} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:66.6%"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:heading {"level":1,"style":{"typography":{"textTransform":"none"}}} -->
<h1 class="wp-block-heading" style="text-transform:none"><?php esc_html_e('Meet Rose, our houseplant expert host', 'casthub');?></h1>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php esc_html_e('Rose’s journey into the realm of houseplants began with a small windowsill garden during her college years. What started as a few humble succulents soon blossomed into a full-fledged passion for nurturing…', 'casthub');?></p>
<!-- /wp:paragraph -->

<!-- wp:read-more {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05rem"}},"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-stretch"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hand-tree-nature-forest-grass-person.jpg" alt="" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"name":"Mentions"},"align":"wide","style":{"spacing":{"blockGap":"1.5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph {"align":"center","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.05rem"}},"fontSize":"x-small"} -->
<p class="has-text-align-center has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.05rem;text-transform:uppercase"><?php esc_html_e('Our Podcast was previously mentioned in:', 'casthub');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"160px","height":"undefinedpx","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|tertiary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon_placeholder.png" alt="" style="width:160px;height:undefinedpx"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"160px","height":"undefinedpx","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|tertiary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon_placeholder.png" alt="" style="width:160px;height:undefinedpx"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"160px","height":"undefinedpx","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|tertiary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon_placeholder.png" alt="" style="width:160px;height:undefinedpx"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"160px","height":"undefinedpx","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|tertiary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon_placeholder.png" alt="" style="width:160px;height:undefinedpx"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"160px","height":"undefinedpx","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|tertiary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon_placeholder.png" alt="" style="width:160px;height:undefinedpx"/></figure>
<!-- /wp:image -->

<!-- wp:image {"width":"160px","height":"undefinedpx","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|tertiary"}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon_placeholder.png" alt="" style="width:160px;height:undefinedpx"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Testimonials"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"1.5rem","left":"1.5rem"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"dimensions":{"minHeight":"100%"}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:10px;min-height:100%;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"1.6rem","letterSpacing":"-0.02rem"}},"textColor":"luminous-vivid-amber","fontFamily":"plus-jakarta-sans"} -->
<p class="has-text-align-left has-luminous-vivid-amber-color has-text-color has-plus-jakarta-sans-font-family" style="font-size:1.6rem;font-style:normal;font-weight:600;letter-spacing:-0.02rem"><?php esc_html_e('★★★★★', 'casthub');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('Honestly one of the best starter kits I have ever used. It\'s saved me hours of time designing layouts. One of the best investments I made.', 'casthub');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.2rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.05rem"}},"fontSize":"x-small"} -->
<p class="has-text-align-left has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.05rem;text-transform:uppercase"><?php esc_html_e('Beth Robertson', 'casthub');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"dimensions":{"minHeight":"100%"}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:10px;min-height:100%;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"1.6rem","letterSpacing":"-0.02rem"}},"textColor":"luminous-vivid-amber","fontFamily":"plus-jakarta-sans"} -->
<p class="has-text-align-left has-luminous-vivid-amber-color has-text-color has-plus-jakarta-sans-font-family" style="font-size:1.6rem;font-style:normal;font-weight:600;letter-spacing:-0.02rem"><?php esc_html_e('★★★★★', 'casthub');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('Honestly one of the best starter kits I have ever used. It\'s saved me hours of time designing layouts. One of the best investments I made.', 'casthub');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.2rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.05rem"}},"fontSize":"x-small"} -->
<p class="has-text-align-left has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.05rem;text-transform:uppercase"><?php esc_html_e('Beth Robertson', 'casthub');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"dimensions":{"minHeight":"100%"}},"backgroundColor":"white","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-radius:10px;min-height:100%;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"0.6rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"1.6rem","letterSpacing":"-0.02rem"}},"textColor":"luminous-vivid-amber","fontFamily":"plus-jakarta-sans"} -->
<p class="has-text-align-left has-luminous-vivid-amber-color has-text-color has-plus-jakarta-sans-font-family" style="font-size:1.6rem;font-style:normal;font-weight:600;letter-spacing:-0.02rem"><?php esc_html_e('★★★★★', 'casthub');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('Honestly one of the best starter kits I have ever used. It\'s saved me hours of time designing layouts. One of the best investments I made.', 'casthub');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"1.2rem"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.05rem"}},"fontSize":"x-small"} -->
<p class="has-text-align-left has-x-small-font-size" style="font-style:normal;font-weight:700;letter-spacing:0.05rem;text-transform:uppercase"><?php esc_html_e('Beth Robertson', 'casthub');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Blog Intro"},"align":"wide","style":{"spacing":{"margin":{"top":"9rem","bottom":"6rem"},"blockGap":"3rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:9rem;margin-bottom:6rem"><!-- wp:group {"metadata":{"name":"QL header"},"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php esc_html_e('Latest News', 'casthub');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"x-small"} -->
<p class="has-x-small-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sRead our Blog%2$s', 'casthub' ), '<a href="' . esc_url( '#' ) . '" data-type="page" data-id="88">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"constrained"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"3rem"}},"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:post-featured-image {"aspectRatio":"1"} /-->

<!-- wp:group {"metadata":{"name":"Date and title"},"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:post-date {"isLink":true,"style":{"typography":{"textTransform":"none"}}} /-->

<!-- wp:post-title {"isLink":true} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":25} /-->
<!-- /wp:post-template --></main>
<!-- /wp:query -->

<!-- wp:spacer {"height":"0.67rem","width":"0px","style":{"layout":[]}} -->
<div style="height:0.67rem;width:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->