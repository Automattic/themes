<?php
/**
 * Title: A 404 page
 * Slug: carnation/404
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}},"border":{"color":null,"style":null,"width":null,"bottom":{"color":"#3333331a","style":"solid","width":"1px"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-bottom-color:#3333331a;border-bottom-style:solid;border-bottom-width:1px;margin-top:0;margin-bottom:0"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"60px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:60px"><!-- wp:heading {"level":1,"textColor":"foreground"} -->
<h1 class="wp-block-heading has-foreground-color has-text-color"><?php echo esc_html__( 'Oops! That page can’t be found.', 'carnation' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"6vh","bottom":"6vh"}},"dimensions":{"minHeight":"40vh"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="min-height:40vh;padding-top:6vh;padding-bottom:6vh"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:paragraph -->
<p><?php echo  esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'carnation' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","style":{"border":{"radius":"100px"}},"fontSize":"small"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->