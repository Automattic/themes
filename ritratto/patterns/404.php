<?php
/**
 * Title: A 404 page
 * Slug: ritratto/404
 * Inserter: no
 */

?>

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"blockGap":"0rem","margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0px;margin-bottom:0px"><!-- wp:template-part {"slug":"header-pages","align":"full"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2rem","bottom":"0rem","right":"2rem","left":"2rem"},"blockGap":"2rem"}},"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-background-color has-background" style="padding-top:2rem;padding-right:2rem;padding-bottom:0rem;padding-left:2rem"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"1rem","padding":{"bottom":"4rem","top":"0rem","right":"0rem","left":"0rem"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:0rem;padding-right:0rem;padding-bottom:4rem;padding-left:0rem"><!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"6rem","fontStyle":"normal","fontWeight":"400"}},"textColor":"base","fontFamily":"instrument-serif","anchor":"oops-that-page-can-t-be-found"} -->
<h1 class="wp-block-heading has-text-align-center has-base-color has-text-color has-link-color has-instrument-serif-font-family" id="oops-that-page-can-t-be-found" style="font-size:6rem;font-style:normal;font-weight:400"><?php echo esc_html__( 'Oh, sorry... 404.', 'ritratto' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"3rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'That page can’t be found.', 'ritratto' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'ritratto' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2rem","padding":{"bottom":"4rem","top":"2rem","right":"0rem","left":"0rem"},"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"top"}} -->
<div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:2rem;padding-right:0rem;padding-bottom:4rem;padding-left:0rem"><!-- wp:search {"showLabel":false,"width":100,"widthUnit":"%","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none","radius":"2px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->