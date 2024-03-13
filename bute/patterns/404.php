<?php
/**
 * Title: A 404 page
 * Slug: bute/404
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:heading {"textAlign":"left","level":1,"fontSize":"medium","anchor":"oops-that-page-can-t-be-found"} -->
<h1 class="wp-block-heading has-text-align-left has-medium-font-size" id="oops-that-page-can-t-be-found"><?php echo esc_html__( 'Oops! That page can’t be found.', 'bute' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo  esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'bute' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"bute/search"} /-->
