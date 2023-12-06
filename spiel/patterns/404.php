<?php
/**
 * Title: A 404 page
 * Slug: spiel/404
 * Inserter: no
 */

declare( strict_types = 1 );
?>

<!-- wp:heading {"textAlign":"center","level":1,"align":"wide","fontSize":"xxx-large","anchor":"oops-that-page-can-t-be-found"} -->
<h1 class="wp-block-heading alignwide has-text-align-center has-xxx-large-font-size" id="oops-that-page-can-t-be-found"><?php echo esc_html__( 'Oops! That page can’t be found.', 'spiel' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo  esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'spiel' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"spiel/search"} /-->
