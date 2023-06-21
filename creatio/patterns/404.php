<?php
/**
 * Title: A 404 page
 * Slug: creatio/404
 * Inserter: no
 */

?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|60"},"padding":{"bottom":"180px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--60);padding-bottom:180px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","fontSize":"large","anchor":"oops-that-page-can-t-be-found"} -->
<h1 class="wp-block-heading alignwide has-text-align-left has-large-font-size" id="oops-that-page-can-t-be-found">
<?php echo esc_html_x( 'Oops! That page can’t be found.', 'creatio' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'It looks like nothing was found at this location. Maybe try a search?', 'creatio' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"2px","top":{"color":"#dfdfdf","style":"solid","width":"1px"},"right":{"color":"#dfdfdf","style":"solid","width":"1px"},"bottom":{"color":"#dfdfdf","style":"solid","width":"1px"},"left":{"color":"#dfdfdf","style":"solid","width":"1px"}}},"backgroundColor":"primary","textColor":"background"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->