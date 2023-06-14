<?php
/**
 * Title: A 404 page
 * Slug: jaida/404
 * Inserter: no
 */

?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"16vh","bottom":"16vh"}}},"layout":{"type":"constrained","wideSize":"1400px"}} -->
<main class="wp-block-group" style="margin-top:16vh;margin-bottom:16vh"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","className":"wp-block-heading","anchor":"oops-that-page-can-t-be-found"} -->
<h1 class="wp-block-heading alignwide has-text-align-left" id="oops-that-page-can-t-be-found"><?php echo esc_html__( 'Oops! That page can’t be found.', 'jaida' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'jaida' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false} /--></main>
<!-- /wp:group -->

