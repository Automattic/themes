<?php
/**
 * Title: A 404 page
 * Slug: overlaid/404
 * Inserter: no
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:4rem"><!-- wp:group {"style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}}} -->
<div class="wp-block-group" style="padding-top:4rem;padding-bottom:4rem"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"2rem","top":"4px"},"blockGap":"0rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="padding-top:4px;padding-bottom:2rem"><!-- wp:heading {"textAlign":"center","level":1,"align":"wide","anchor":"oops-that-page-can-t-be-found"} -->
<h1 class="wp-block-heading alignwide has-text-align-center" id="oops-that-page-can-t-be-found"><?php echo esc_html__( 'Oops!', 'overlaid' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":1,"align":"wide","anchor":"oops-that-page-can-t-be-found"} -->
<h1 class="wp-block-heading alignwide has-text-align-center" id="oops-that-page-can-t-be-found"><?php echo esc_html__( 'That page can\'t be found.', 'overlaid' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'It looks like nothing was found at this location.', 'overlaid' ); ?><br><?php echo esc_html__( 'Maybe try a search?', 'overlaid' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0rem","right":"0rem","bottom":"2rem","left":"0rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0rem;padding-right:0rem;padding-bottom:2rem;padding-left:0rem"><!-- wp:search {"showLabel":false,"placeholder":"<?php echo esc_attr__( 'SEARCH', 'overlaid' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none"}}} /-->

<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
