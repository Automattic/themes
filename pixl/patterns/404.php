<?php
/**
 * Title: A 404 page
 * Slug: pixl/404
 * Inserter: no
 */

?>

<!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="has-text-align-center"><?php echo esc_html__( 'Oh, nooooooooooooooooo!', 'pixl' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo  esc_html__( 'The page you’re looking doesn’t seem to exist. Maybe try a search?', 'pixl' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"<?php echo esc_attr__( 'Type Something...', 'pixl' ); ?>"} /-->

<!-- wp:spacer {"height":60} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
