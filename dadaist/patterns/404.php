<?php
/**
 * Title: 404
 * Slug: dadaist/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","align":"wide"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60","margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}},"dimensions":{"minHeight":"40vh"}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="min-height:40vh;margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"metadata":{"name":"Section title"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","lineHeight":"0.5"}},"fontSize":"medium","fontFamily":"urw-gothic"} -->
<h2 class="wp-block-heading has-text-align-center has-urw-gothic-font-family has-medium-font-size" style="line-height:0.5;text-transform:uppercase"><?php esc_html_e('Oops! a 404...', 'dadaist');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"metadata":{"name":"Halftone stroke"},"style":{"background":{"backgroundImage":{"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dada_haltfone-tex_1.png","id":10435,"source":"file","title":"dada_haltfone-tex_1"},"backgroundSize":"720px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"dimensions":{"minHeight":"10px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="min-height:10px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Hero"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-large","fontFamily":"urw-gothic"} -->
<h1 class="wp-block-heading has-text-align-center has-urw-gothic-font-family has-x-large-font-size" id="oops-that-page-can-t-be-found" style="text-transform:uppercase"><?php esc_html_e('There is', 'dadaist');?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"-0.1rem","lineHeight":"0.5","fontSize":"4.5rem"}},"fontFamily":"urw-gothic"} -->
<h1 class="wp-block-heading has-text-align-center has-urw-gothic-font-family" id="oops-that-page-can-t-be-found" style="font-size:4.5rem;font-style:normal;font-weight:700;letter-spacing:-0.1rem;line-height:0.5;text-transform:uppercase"><?php esc_html_e('nothing', 'dadaist');?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"x-large","fontFamily":"urw-gothic"} -->
<h1 class="wp-block-heading has-text-align-center has-urw-gothic-font-family has-x-large-font-size" id="oops-that-page-can-t-be-found" style="text-transform:uppercase"><?php esc_html_e('here.', 'dadaist');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Search block"},"style":{"spacing":{"blockGap":"var:preset|spacing|50","margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70)"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'It looks like no content was found at this location.%1$sCould you try a search?', 'dadaist' ), '<br>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"","showLabel":false,"placeholder":"Search","width":100,"widthUnit":"%","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"border":{"width":"0px","style":"none"}}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","align":"wide"} /-->