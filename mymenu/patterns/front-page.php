<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: front-page
 * Slug: mymenu/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","align":"full"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"6vh","bottom":"6vh"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:6vh;padding-bottom:6vh"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":1,"align":"wide"} -->
<h1 class="wp-block-heading alignwide"><?php echo __('Burgers', 'mymenu');?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"3vh","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:3vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"metadata":{"name":"Menu option 1st"},"align":"wide","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group alignwide" style="border-bottom-width:1px;padding-top:0;padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"1px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"left":{"width":"1px"},"right":{"width":"1px"}}},"backgroundColor":"primary"} -->
<div class="wp-block-columns has-primary-background-color has-background" style="border-right-width:1px;border-left-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:30%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('Veggie Hoagie', 'mymenu');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:60%"><!-- wp:paragraph -->
<p><?php echo __('Grilled onions, mushrooms, and green peppers with provolone cheese on a toasted hoagie bun.', 'mymenu');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:10%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"border":{"bottom":{"width":"3px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"3px","top":"0px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-bottom-width:3px;margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:3px"><!-- wp:paragraph {"style":{"typography":{"textDecoration":"none"}}} -->
<p style="text-decoration:none"><?php echo __('6.99', 'mymenu');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Menu option"},"align":"wide","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group alignwide" style="border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"1px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"left":{"width":"1px"},"right":{"width":"1px"}}},"backgroundColor":"primary"} -->
<div class="wp-block-columns has-primary-background-color has-background" style="border-right-width:1px;border-left-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:30%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('The Humus Pila', 'mymenu');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:60%"><!-- wp:paragraph -->
<p><?php echo __('Chopped greens, avocado, olives, tomatoes &amp; cucumbers with homemade hummus in a pita.', 'mymenu');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:10%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"border":{"bottom":{"width":"3px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"3px","top":"0px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-bottom-width:3px;margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:3px"><!-- wp:paragraph {"style":{"typography":{"textDecoration":"none"}}} -->
<p style="text-decoration:none"><?php echo __('6.99', 'mymenu');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Menu option"},"align":"wide","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group alignwide" style="border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"1px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"left":{"width":"1px"},"right":{"width":"1px"}}},"backgroundColor":"primary"} -->
<div class="wp-block-columns has-primary-background-color has-background" style="border-right-width:1px;border-left-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:30%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('Brisket Classic Burger', 'mymenu');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:60%"><!-- wp:paragraph -->
<p><?php echo __('Brisket and Short Rib blend, American cheese, Lettuce, Tomato, Onions, Pickles, and Crispy Onion Rings. Served with fries.', 'mymenu');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:10%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"border":{"bottom":{"width":"3px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"3px","top":"0px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-bottom-width:3px;margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:3px"><!-- wp:paragraph {"style":{"typography":{"textDecoration":"none"}}} -->
<p style="text-decoration:none"><?php echo __('14.99', 'mymenu');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Menu option"},"align":"wide","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group alignwide" style="border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"1px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"left":{"width":"1px"},"right":{"width":"1px"}}},"backgroundColor":"primary"} -->
<div class="wp-block-columns has-primary-background-color has-background" style="border-right-width:1px;border-left-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:30%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('Brisket &amp; Jalapeño Burger', 'mymenu');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:60%"><!-- wp:paragraph -->
<p><?php echo __('Brisket &amp; Short Rib blend topped with 16h Brisket, Lettuce, Tomato, Pickles, Cheddar, Jalapeño, and Crispy Onion Rings. Served with fries.', 'mymenu');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:10%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"border":{"bottom":{"width":"3px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"3px","top":"0px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-bottom-width:3px;margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:3px"><!-- wp:paragraph {"style":{"typography":{"textDecoration":"none"}}} -->
<p style="text-decoration:none"><?php echo __('15.99', 'mymenu');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Menu option"},"align":"wide","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group alignwide" style="border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"1px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"left":{"width":"1px"},"right":{"width":"1px"}}},"backgroundColor":"primary"} -->
<div class="wp-block-columns has-primary-background-color has-background" style="border-right-width:1px;border-left-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:30%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('The Local Burger', 'mymenu');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:60%"><!-- wp:paragraph -->
<p><?php echo __('Local Special Brisket, BBQ Sauce, Pickles, and White Onions. Served with fries.', 'mymenu');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:10%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"border":{"bottom":{"width":"3px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"3px","top":"0px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-bottom-width:3px;margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:3px"><!-- wp:paragraph {"style":{"typography":{"textDecoration":"none"}}} -->
<p style="text-decoration:none"><?php echo __('11.99', 'mymenu');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Menu option"},"align":"wide","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group alignwide" style="border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"1px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"left":{"width":"1px"},"right":{"width":"1px"}}},"backgroundColor":"primary"} -->
<div class="wp-block-columns has-primary-background-color has-background" style="border-right-width:1px;border-left-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:30%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('The Local Chicken Burger', 'mymenu');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:60%"><!-- wp:paragraph -->
<p><?php echo __('Marinated chicken breast, American cheese, Jalapeño, Honey Slaw, and Pickles. Served with fries.', 'mymenu');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:10%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"border":{"bottom":{"width":"3px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"3px","top":"0px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-bottom-width:3px;margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:3px"><!-- wp:paragraph {"style":{"typography":{"textDecoration":"none"}}} -->
<p style="text-decoration:none"><?php echo __('9.99', 'mymenu');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Menu option"},"align":"wide","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group alignwide" style="border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"1px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"left":{"width":"1px"},"right":{"width":"1px"}}},"backgroundColor":"primary"} -->
<div class="wp-block-columns has-primary-background-color has-background" style="border-right-width:1px;border-left-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:30%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('Cheese Burger', 'mymenu');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:60%"><!-- wp:paragraph -->
<p><?php echo __('Lean ground beef blended burgers, Cheddar cheese, and Pickles. Served with fries.', 'mymenu');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:10%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"border":{"bottom":{"width":"3px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"3px","top":"0px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-bottom-width:3px;margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:3px"><!-- wp:paragraph {"style":{"typography":{"textDecoration":"none"}}} -->
<p style="text-decoration:none"><?php echo __('8.99', 'mymenu');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Menu option"},"align":"wide","style":{"border":{"bottom":{"width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group alignwide" style="border-bottom-width:1px;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"1px"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"left":{"width":"1px"},"right":{"width":"1px"}}},"backgroundColor":"primary"} -->
<div class="wp-block-columns has-primary-background-color has-background" style="border-right-width:1px;border-left-width:1px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:30%"><!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo __('Classic Burger', 'mymenu');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:60%"><!-- wp:paragraph -->
<p><?php echo __('Lean ground beef, blended burgers, and Pickles. Served with fries.', 'mymenu');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"10%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-column has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--40);flex-basis:10%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"border":{"bottom":{"width":"3px"},"top":[],"right":[],"left":[]},"spacing":{"padding":{"bottom":"3px","top":"0px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-bottom-width:3px;margin-top:0;margin-bottom:0;padding-top:0px;padding-bottom:3px"><!-- wp:paragraph {"style":{"typography":{"textDecoration":"none"}}} -->
<p style="text-decoration:none"><?php echo __('7.99', 'mymenu');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"6vh","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:6vh" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"1px","left":"1px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"31%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:31%"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"media","style":{"color":[]}} -->
<figure class="wp-block-image size-full"><a href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/young-lady-holding-huge-burger.jpg"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/young-lady-holding-huge-burger.jpg" alt="<?php echo __('Young lady holding huge burger', 'mymenu');?>" style="aspect-ratio:1;object-fit:cover"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"59%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:59%"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"media","style":{"color":[]}} -->
<figure class="wp-block-image size-full"><a href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/girl-holding-a-juicy-beef-burger.jpg"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/girl-holding-a-juicy-beef-burger.jpg" alt="<?php echo __('Girl holding a juicy beef burger', 'mymenu');?>" style="aspect-ratio:4/3;object-fit:cover"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"12%","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}}} -->
<div class="wp-block-column" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:12%"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"media","style":{"color":[]}} -->
<figure class="wp-block-image size-full"><a href="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/haloumi-burger-with-french-fries.jpg"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/haloumi-burger-with-french-fries.jpg" alt="<?php echo __('Haloumi burger with french fries', 'mymenu');?>" style="aspect-ratio:3/4;object-fit:cover"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->