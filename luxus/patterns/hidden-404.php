<?php
/**
 * Title: 404
 * Slug: luxus/hidden-404
 * Inserter: no
 */
declare( strict_types = 1 );
?>

<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","align":"wide"} -->
<h2 class="wp-block-heading alignwide has-text-align-center" id="page-not-found"><?php echo esc_html_x( 'Page Not Found', 'Heading for a web page that is not found', 'luxus' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'The page you are looking for does not exist.', 'luxus' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->