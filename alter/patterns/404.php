<?php
/**
 * Title: A 404 page
 * Slug: alter/404
 * Inserter: no
 */

?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"anchor":"oops-that-page-can-t-be-found"} -->
<h1 class="wp-block-heading has-text-align-center" id="oops-that-page-can-t-be-found"><?php echo esc_html__( 'Oops!', 'alter' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":1,"anchor":"oops-that-page-can-t-be-found"} -->
<h1 class="wp-block-heading has-text-align-center" id="oops-that-page-can-t-be-found"><?php echo esc_html__( 'That page can’t be found.', 'alter' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'alter' ); ?></p>
<!-- /wp:paragraph --></main>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:4rem"><!-- wp:search {"showLabel":false,"width":50,"widthUnit":"%","buttonPosition":"button-inside","buttonUseIcon":true,"align":"center","style":{"border":{"width":"0px","style":"none","radius":"4px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->