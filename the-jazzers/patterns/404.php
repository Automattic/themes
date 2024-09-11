<?php
/**
 * Title: 404
 * Slug: the-jazzers/404
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"7.5vh","bottom":"15vh"},"margin":{"top":"0rem","bottom":"0rem"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0rem;margin-bottom:0rem;padding-top:7.5vh;padding-bottom:15vh"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"5vh"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","level":1,"align":"wide","style":{"typography":{"lineHeight":"1"}}} -->
<h1 class="wp-block-heading alignwide has-text-align-center" id="oops-that-page-can-t-be-found" style="line-height:1"><?php esc_html_e('Oops! The page can’t be found.', 'the-jazzers');?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'the-jazzers');?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"Search","buttonUseIcon":true,"style":{"border":{"radius":"2px","width":"0px","style":"none"}}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->