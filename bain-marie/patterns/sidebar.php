<?php
/**
 * Title: sidebar
 * Slug: bain-marie/sidebar
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Posts"},"style":{"spacing":{"padding":{"top":"1.5em","bottom":"1.5em","left":"1.5em","right":"1.5em"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="padding-top:1.5em;padding-right:1.5em;padding-bottom:1.5em;padding-left:1.5em"><!-- wp:heading {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em","fontStyle":"normal","fontWeight":"400"}},"fontSize":"small","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-jost-font-family has-small-font-size" style="font-style:normal;font-weight:400;letter-spacing:0.16em;text-transform:uppercase">Popular Recipes</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":10,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"style":{"border":{"top":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px"><!-- wp:post-title {"isLink":true,"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p>There are currently no posts in your site. Add some posts to see this section.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"1.5em","bottom":"1.5em","left":"1.5em","right":"1.5em"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="padding-top:1.5em;padding-right:1.5em;padding-bottom:1.5em;padding-left:1.5em"><!-- wp:image {"scale":"cover","sizeSlug":"large","linkDestination":"none","align":"center","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-large is-style-rounded"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/foodblog-aboutme-1-1024x1024.jpg" alt="" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.16em","fontStyle":"normal","fontWeight":"400"},"spacing":{"padding":{"top":"var:preset|spacing|20"}}},"fontSize":"small","fontFamily":"jost"} -->
<h2 class="wp-block-heading has-text-align-center has-jost-font-family has-small-font-size" style="padding-top:var(--wp--preset--spacing--20);font-style:normal;font-weight:400;letter-spacing:0.16em;text-transform:uppercase">About the Author</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size"><em>Jodie Young, author and creator behind Bain Marie, is passionate about sharing recipes of wholesome and delicious food.</em> <em><a href="#">Read full bio.</a></em></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->