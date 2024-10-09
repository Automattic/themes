<?php
/**
 * Title: A 404 page
 * Slug: tiebreak/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"6vw","left":"6vw"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:6vw;padding-left:6vw"><!-- wp:spacer {"height":"8vh"} -->
<div style="height:8vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"2vh"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:2vh"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"x-large"} -->
<h1 class="wp-block-heading has-text-align-left has-x-large-font-size" id="oops-that-page-can-t-be-found" style="font-style:italic;font-weight:400"><?php echo  esc_html__( 'Oops! That page can’t be found.', 'tiebreak' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo  esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'tiebreak' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"<?php echo esc_attr_x( 'Wimbledon', 'Search input field placeholder text.', 'tiebreak' ); ?>","width":100,"widthUnit":"%","buttonUseIcon":true} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"8vh"} -->
<div style="height:8vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
