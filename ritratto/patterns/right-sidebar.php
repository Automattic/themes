<?php
/**
 * Title: right-sidebar
 * Slug: ritratto/right-sidebar
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"4rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"right":"2rem","left":"1rem","top":"0rem","bottom":"2rem"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"2rem"},"dimensions":{"minHeight":"100%"},"layout":{"selfStretch":"fill","flexSize":null},"border":{"right":{"width":"2px"},"bottom":{"width":"2px"}}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-right-width:2px;border-bottom-width:2px;min-height:100%;margin-top:0px;margin-bottom:0px;padding-top:0rem;padding-right:2rem;padding-bottom:2rem;padding-left:1rem"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.4rem","lineHeight":"1"}}} -->
<h3 class="wp-block-heading" style="font-size:1.4rem;line-height:1"><?php echo esc_html__( 'The author', 'ritratto' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.2rem","lineHeight":1.6}},"fontFamily":"libre-caslon-text"} -->
<p class="has-libre-caslon-text-font-family" style="font-size:1.2rem;line-height:1.6"><a href="/" data-type="page" data-id="2"><?php echo esc_html__( 'Ernest M. Hemingway was an American novelist, short-story writer, journalist, and sportsman.', 'ritratto' ); ?></a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"width":96,"height":96,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/cropped-ritratto_image-author.jpg" alt="" width="96" height="96"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1rem","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.4rem","lineHeight":"1"},"spacing":{"padding":{"left":"1rem"}}}} -->
<h3 class="wp-block-heading" style="padding-left:1rem;font-size:1.4rem;line-height:1"><?php echo esc_html__( 'Related posts', 'ritratto' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[5]},"parents":[]},"tagName":"main","align":"wide","layout":{"type":"constrained"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"left":"1rem","right":"1rem","top":"1.5rem","bottom":"3rem"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"1rem"},"dimensions":{"minHeight":"100%"},"border":{"right":{"width":"2px"},"bottom":{"width":"2px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="border-right-width:2px;border-bottom-width:2px;min-height:100%;margin-top:0px;margin-bottom:0px;padding-top:1.5rem;padding-right:1rem;padding-bottom:3rem;padding-left:1rem"><!-- wp:post-title {"level":4,"isLink":true,"style":{"spacing":{"padding":{"right":"1rem"}},"typography":{"fontSize":"2.4rem"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"1rem","margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"stretch"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
<p style="line-height:1"><?php echo esc_html__( '/', 'ritratto' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-terms {"term":"post_tag","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->