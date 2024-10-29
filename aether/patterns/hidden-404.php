<?php
/**
 * Title: 404
 * Slug: aether/hidden-404
 * Inserter: no
 */
declare( strict_types = 1 );
?>

<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"main","align":"wide","layout":{"type":"default"}} -->
<main class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","fontSize":"medium"} -->
<h2 class="wp-block-heading has-text-align-center has-medium-font-size" id="oops-that-page-can-t-be-found"><?php echo esc_html_x( 'Oops! That page can’t be found.', 'Heading for a web page that is not found', 'aether' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'It looks like nothing was found at this location. Maybe try a search?', 'aether' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"Search...","width":50,"widthUnit":"%","buttonText":"Search","align":"center","style":{"typography":{"textTransform":"none"},"border":{"radius":"0px"}},"fontSize":"x-small"} /--></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:spacer {"height":"var:preset|spacing|70"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->