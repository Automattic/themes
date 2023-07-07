<?php
/**
 * Title: A 404 page
 * Slug: grammerone/404
 * Categories: hidden
 * Inserter: no
 */

?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-top:6rem;padding-bottom:6rem"><!-- wp:columns {"verticalAlignment":"top","align":"wide"} -->
<div class="wp-block-columns alignwide are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"align":"wide","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"left","level":1,"align":"wide","style":{"typography":{"fontSize":"4rem","lineHeight":1.2},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<h1 class="wp-block-heading alignwide has-text-align-left" id="oops-that-page-can-t-be-found" style="margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;font-size:4rem;line-height:1.2"><?php echo esc_html__( 'Oops! That page', 'grammerone' ); ?><br><?php echo esc_html__( 'can’t be found.', 'grammerone' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"1rem","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:1rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top"} -->
<div class="wp-block-column is-vertically-aligned-top"><!-- wp:group {"style":{"spacing":{"padding":{"top":"1rem","right":"0rem","bottom":"2rem","left":"0rem"},"blockGap":"1rem"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group" style="padding-top:1rem;padding-right:0rem;padding-bottom:2rem;padding-left:0rem"><!-- wp:paragraph {"style":{"typography":{"fontSize":"1.1rem","lineHeight":"1.5"}}} -->
<p style="font-size:1.1rem;line-height:1.5"><?php echo esc_html__( 'It looks like nothing was found at this location.', 'grammerone' ); ?><br><?php echo esc_html__( 'Maybe try a search?', 'grammerone' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html__( 'Search', 'grammerone' ); ?>","showLabel":false,"buttonText":"<?php echo esc_html__( 'Search', 'grammerone' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"radius":"0px","width":"0px","style":"none"}},"backgroundColor":"foreground","textColor":"background"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->