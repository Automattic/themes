<?php
/**
 * Title: home
 * Slug: musee/home
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"align":"full","style":{"dimensions":{"minHeight":"85vh"},"spacing":{"padding":{"bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group alignfull" style="min-height:85vh;margin-top:0;margin-bottom:0;padding-bottom:0"><!-- wp:template-part {"slug":"header","tagName":"header","align":"wide"} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"gradient":"default-gradient","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-default-gradient-gradient-background has-background" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<h2 class="wp-block-heading has-contrast-color has-text-color has-link-color"><?php echo __('In Exhibition', 'musee');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('<a href="#">View all</a>', 'musee');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"default"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30)"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":20} /--></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"400px","style":{"color":[]}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"8rem","bottom":"8rem"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0px;margin-bottom:0px;padding-top:8rem;padding-bottom:8rem"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"30px"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color has-link-color"><?php echo __('History', 'musee');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('Founded in the heart of Buenos Aires in 1896, the International Art Museum has, from its inception, housed a rich diversity of works spanning different periods and artistic movements globally. It emerged with the mission not only to safeguard the richness of international art but also to foster the flourishing of Argentine art within a context of cultural renewal.', 'musee');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('In its first decade, during the commemoration of the Centennial of the May Revolution, the museum already exhibited masterpieces by renowned artists such as Francisco de Goya, Joaquín Sorolla y Bastida, Edgar Degas, and Pierre-Auguste Renoir.', 'musee');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('A new era dawned in 1911 with the opening of the Argentine Pavilion, a monumental structure from the 1889 Paris Universal Exhibition, situated in Plaza San Martín. This marked the incorporation of notable new acquisitions, such as Édouard Manet\'s \'The surprised nymph\' and Claude Monet\'s \'Banks of the Seine.\'', 'musee');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('In 1933, the museum found its current home in the remodeled Recoleta Pump House, a work of art in itself designed by architect Alejandro Bustillo. This relocation saw the addition of valuable pieces, including \'Woman by the sea\' by Paul Gauguin, \'Le Moulin de la Galette\' by Vincent van Gogh, and \'Christ in the Garden of Olives\' by El Greco.', 'musee');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('Over the last decades of the 20th century, the museum opened its doors to the great museenents of modern art on an international level. Thus, works by geniuses such as Pablo Picasso, Amedeo Modigliani, Marc Chagall, Vassily Kandinsky, Paul Klee, Lucio Fontana, Jackson Pollock, Mark Rothko, and Henry Moore were added to its collection.', 'musee');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"8rem","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:8rem" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"1.5rem"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color"><?php echo __('Visiting the Museum', 'musee');?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php echo __('Calle de los Artistas 123', 'musee');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('Buenos Aires, Argentina', 'musee');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('+00 (000) 0000-0000', 'musee');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('info@xxx.ar', 'musee');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color"><?php echo __('Opening times', 'musee');?></h3>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php echo __('Wed/Fri: 11.00 a 20.00.', 'musee');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('Sat/Sun: 10.00 a 20.00', 'musee');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('Monday: Closed.', 'musee');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php echo __('The Museum is closed to the public on May 1, June 27, December 24, 25 and 31, 2023, and January 1, 2024.', 'musee');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo __('Admission is free of charge.', 'musee');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color"><?php echo __('Group Visits', 'musee');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('Check here the registration dates and the proposed routes for each educational level.', 'musee');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","fontSize":"small"} -->
<h3 class="wp-block-heading has-base-color has-text-color has-link-color has-small-font-size"><?php echo __('Audioguide', 'musee');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('An approach to the Museum\'s collection through thirteen audio tracks referring to great sculptural works made by pre-Hispanic, European and Argentine cultures.', 'musee');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px;padding-top:8rem;padding-bottom:8rem"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
<h2 class="wp-block-heading has-contrast-color has-text-color has-link-color"><?php echo __('Collection', 'musee');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo __('<a href="#">View all</a>', 'musee');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"2rem","top":"4rem"},"blockGap":"2rem"}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:2rem"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:query {"queryId":0,"query":{"perPage":"2","pages":0,"offset":"4","postType":"post","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"default"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem","margin":{"bottom":"1.5rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:1.5rem"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","width":"","height":""} /-->

<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30)"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":20,"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"blockGap":"0px"}}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:query {"queryId":0,"query":{"perPage":"2","pages":0,"offset":"0","postType":"post","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"default"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem","margin":{"bottom":"1.5rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:1.5rem"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:post-title {"isLink":true} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":0,"query":{"perPage":"4","pages":0,"offset":"2","postType":"post","order":"asc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"parents":[]},"tagName":"main","align":"wide","layout":{"type":"default"}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":4}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"1.5rem","margin":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30)"><!-- wp:post-title {"isLink":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-minimal"} /-->