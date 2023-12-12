<?php
/**
 * Title: A 404 page
 * Slug: allez/404
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":1,"fontSize":"xxx-large"} -->
<h1 class="wp-block-heading has-xxx-large-font-size" id="oops-that-page-can-t-be-found"><?php echo esc_html__( 'Oops! That page can’t be found.', 'allez' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'It looks like nothing was found at this location.', 'allez' ); ?><br><?php echo esc_html__( 'Maybe try a search?', 'allez' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:search {"label":"<?php echo esc_html__( 'Search', 'allez' ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Search...', 'allez' ); ?>","width":100,"widthUnit":"%","buttonText":"<?php echo esc_html__( 'Search', 'allez' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->