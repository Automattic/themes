<?php
/**
 * Title: A 404 page
 * Slug: poesis/404
 * Inserter: no
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}}} -->
<h2 class="wp-block-heading" style="font-style:normal;font-weight:400"><?php echo esc_html__( 'Page not found.', 'poesis' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'This page doesn\'t exist. Maybe try a search?', 'poesis' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"20px"} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"<?php echo esc_html__( 'Search', 'poesis' ); ?>","showLabel":false,"buttonText":"<?php echo esc_html__( 'Search', 'poesis' ); ?>","buttonPosition":"button-inside"} /-->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
