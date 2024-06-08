<?php
/**
 * Title: A 404 page
 * Slug: hall/404
 * Inserter: no
 */
declare( strict_types = 1 );
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:8rem;padding-bottom:8rem"><!-- wp:group {"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","lineHeight":"1.2"}},"fontSize":"small","anchor":"oops-that-page-can-t-be-found"} -->
<h1 class="wp-block-heading alignwide has-text-align-left has-small-font-size" id="oops-that-page-can-t-be-found" style="font-style:normal;font-weight:600;line-height:1.2;text-transform:uppercase"><?php echo esc_html__( 'Oops! That page can’t be found.', 'hall' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'It looks like nothing was found at this location.', 'hall' ); ?><br><?php echo esc_html__( 'Maybe try a search?', 'hall' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"2rem","bottom":"4rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:2rem;padding-bottom:4rem"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"right":"33%"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="padding-right:33%"><!-- wp:search {"showLabel":false,"width":100,"widthUnit":"%","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
