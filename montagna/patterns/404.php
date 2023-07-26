<?php
/**
 * Title: A 404 page
 * Slug: montagna/404
 * Inserter: no
 */
?>

<!-- wp:heading {"textAlign":"left","level":1,"align":"wide","style":{"typography":{"fontSize":"4.4rem"}},"className":"wp-block-heading","anchor":"oops-that-page-can-t-be-found"} -->
    <h1 class="wp-block-heading alignwide has-text-align-left" id="oops-that-page-can-t-be-found" style="font-size:4.4rem"><?php echo esc_html__( 'Oops! That page can’t be found.', 'montagna' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo  esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'montagna' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"Search","style":{"border":{"radius":"50px"}}} /-->