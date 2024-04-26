<?php
/**
 * Title: home
 * Slug: cookbook/home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-secondary-background-color has-background" style="margin-top:0;margin-bottom:0"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"1px","bottom":"1px","left":"1px","right":"1px"}},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"0px","bottomRight":"0px"}}},"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-contrast-background-color has-background" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:1px;padding-right:1px;padding-bottom:1px;padding-left:1px"><!-- wp:query {"queryId":0,"query":{"perPage":8,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"constrained"}} -->
<main class="wp-block-query alignwide"><!-- wp:group {"align":"wide","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|50"}},"border":{"radius":{"bottomLeft":"2px","bottomRight":"2px"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="border-bottom-left-radius:2px;border-bottom-right-radius:2px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:search {"label":"Search","showLabel":false,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true} /-->

<!-- wp:query-pagination {"align":"wide"} -->
<!-- wp:query-pagination-previous {"label":"↤"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"↦"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"1px"}},"layout":{"type":"grid","columnCount":"4","minimumColumnWidth":null}} -->
<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"spacing":{"margin":{"top":"0rem","bottom":"0rem","left":"0rem","right":"0rem"}}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|60"},"blockGap":"0"},"dimensions":{"minHeight":""},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group has-base-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /-->

<!-- wp:post-title {"isLink":true} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","style":{"border":{"radius":"16px","style":"dotted","width":"1px","color":"#ee5b2b"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-border-color" style="border-color:#ee5b2b;border-style:dotted;border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"0"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":86,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/pexels-yaroslav-shuraev-8845419.jpg" alt="" class="wp-image-86" style="aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"right":"var:preset|spacing|70","left":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="min-height:100%;padding-right:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center"><?php echo  esc_html__( 'The Chef', 'cookbook' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo  esc_html__( 'Emma is a dedicated home chef who finds joy in cooking and sharing her favorite recipes with others. With a background in recipe development and food blogging, she enjoys exploring diverse cuisines and techniques to create mouthwatering dishes. Emma is eager to connect with fellow food lovers and create a community centered around delicious homemade meals.', 'cookbook' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-link-color" style="font-style:normal;font-weight:600"><?php echo  esc_html__( 'About Emma Johnson', 'cookbook' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->