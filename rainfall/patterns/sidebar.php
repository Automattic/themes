<?php
/**
 * Title: Sidebar Content
 * Slug: rainfall/sidebar
 * Categories: columns
 */
?>
<!-- wp:group {"tagName":"aside","layout":{"type":"constrained"}} -->
<aside class="wp-block-group"><!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}}} -->
<h6 style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Search for a Topic', 'rainfall' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:search {"label":"<?php echo esc_html__( 'Search for a Topic', 'rainfall' ); ?>","showLabel":false,"buttonText":"<?php echo esc_html__( 'Search', 'rainfall' ); ?>"} /-->

<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
<h6 style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Categories', 'rainfall' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:categories /-->

<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
<h6 style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Posted Recently', 'rainfall' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":3} /-->

<!-- wp:heading {"level":6,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
<h6 style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html__( 'Submissions', 'rainfall' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Would you like to contribute as an editor or a writer to our blog? Let us know all the details about yourself and send us a message.', 'rainfall' ); ?></p>
<!-- /wp:paragraph --></aside>
<!-- /wp:group -->
