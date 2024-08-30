<?php
/**
 * Title: Homepage Intro
 * Slug: bark/home-intro
 * Categories: intro
 * Inserter: yes
 */
?>

<!-- wp:group {"tagName":"main","metadata":{"name":"Main"},"style":{"spacing":{"blockGap":"0","margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:0"><!-- wp:group {"metadata":{"name":"Intro"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30","left":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002droot\u002d\u002dpadding-left, var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dgap\u002d\u002dhorizontal))","right":"var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002droot\u002d\u002dpadding-right, var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dgap\u002d\u002dhorizontal))"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"theme-5","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull has-theme-5-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--style--root--padding-right, var(--wp--custom--gap--horizontal));padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--style--root--padding-left, var(--wp--custom--gap--horizontal))"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/dog_walk.jpg","dimRatio":20,"overlayColor":"theme-5","isUserOverlayColor":true,"focalPoint":{"x":0.5,"y":1},"minHeight":650,"contentPosition":"bottom left","align":"wide","style":{"border":{"radius":"20px"},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-1"}}}},"textColor":"theme-1","layout":{"type":"constrained","contentSize":"450px"}} -->
<div class="wp-block-cover alignwide has-custom-content-position is-position-bottom-left has-theme-1-color has-text-color has-link-color" style="border-radius:20px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);min-height:650px"><span aria-hidden="true" class="wp-block-cover__background has-theme-5-background-color has-background-dim-20 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/dog_walk.jpg" style="object-position:50% 100%" data-object-fit="cover" data-object-position="50% 100%" /><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"left","fontSize":"xx-large"} -->
<h2 class="wp-block-heading has-text-align-left has-xx-large-font-size">Cedar Ridge  Pet Care</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'Pet sitting and dog walking in Cedar Ridge area.', 'bark' ); ?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group --></main>