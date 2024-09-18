<?php
/**
 * Title: 404
 * Slug: impressionist/404
 * Categories: hidden
 * Inserter: no
 */

declare( strict_types = 1 );
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"},"padding":{"right":"4vw","left":"4vw","bottom":"8vh"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--60);padding-right:4vw;padding-bottom:8vh;padding-left:4vw"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"textTransform":"lowercase","fontStyle":"normal","fontWeight":"400"}},"fontSize":"large","fontFamily":"beth-ellen"} -->
<h1 class="wp-block-heading has-text-align-left has-beth-ellen-font-family has-large-font-size" id="oops-that-page-can-t-be-found" style="font-style:normal;font-weight:400;text-transform:lowercase"><?php esc_html_e('Oops! That page can’t be found.', 'impressionist');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'impressionist');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"<?php echo esc_html_x( 'Search...', 'This is a placeholder text in a search field', 'impressionist' ); ?>","buttonText":"","buttonUseIcon":true,"style":{"border":{"radius":"0px"}}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
