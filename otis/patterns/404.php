<?php
/**
 * Title: A 404 page
 * Slug: otis/404
 * Categories: 404
 * Block Types: core/template/404
 * Inserter: yes
 */

?>

<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"x-large"} -->
<h1 class="has-text-align-center has-x-large-font-size" id="oops-that-page-can-t-be-found"><?php echo esc_html__( 'Oops! That page can&rsquo;t be found.', 'otis' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo  esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'otis' ); ?></p>
<!-- /wp:paragraph -->
