<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: A 404 page
 * Slug: partygurl/404
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"x-large"} -->
<h1 class="wp-block-heading has-text-align-center has-x-large-font-size" id="oops-that-page-can-t-be-found"><?php echo esc_html__( 'wth?! nothing was found', 'partygurl' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"<?php echo esc_html__( 'type something...', 'partygurl' ); ?>","width":100,"widthUnit":"%","buttonText":"<?php echo esc_html__( 'show me the good stuff', 'partygurl' ); ?>","align":"center","style":{"border":{"radius":"0px","width":"0px","style":"none"},"typography":{"textTransform":"lowercase"}}} /--></main>
<!-- /wp:group -->
