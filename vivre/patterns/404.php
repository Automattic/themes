<?php
/**
 * Title: A 404 page
 * Slug: vivre/404
 * Inserter: no
 */

?>

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"5.875rem"}}} -->
<h1 class="has-text-align-center" id="oops-that-page-can-t-be-found" style="font-size:5.875rem"><?php echo esc_html__( 'Uh-oh.', 'vivre' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'This page could not be found. Try searching posts using the field below.', 'vivre' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"<?php echo esc_html__( 'Search', 'vivre' ); ?>","buttonUseIcon":true} /-->
