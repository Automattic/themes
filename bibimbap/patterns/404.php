<?php
/**
 * Title: A 404 page
 * Slug: bibimbap/404
 * Inserter: no
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"padding":{"top":"24vh","right":"var:preset|spacing|50","bottom":"24vh","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-top:24vh;padding-right:var(--wp--preset--spacing--50);padding-bottom:24vh;padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","style":{"typography":{"fontSize":"72px"}}} -->
<h1 class="alignwide has-text-align-left" style="font-size:72px"><?php echo esc_html__( 'Oops! That page can’t be found.', 'bibimbap' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'bibimbap' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
