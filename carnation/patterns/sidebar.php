<?php
/**
 * Title: sidebar
 * Slug: carnation/sidebar
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"60px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">●</mark> About Me</h6>
<!-- /wp:heading -->

<!-- wp:image {"id":1855,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"6px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/pexels-melike-benli-landscape.png" alt="" class="wp-image-1855" style="border-radius:6px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","lineHeight":1.6}}} -->
<p style="font-size:0.9rem;line-height:1.6"><?php echo esc_html__( 'I’m Jane, the creator and author behind this blog. I’m a minimalist and simple living enthusiast who has dedicated her life to living with less and finding joy in the simple things.', 'carnation' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":6} -->
<h6 class="wp-block-heading"><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">●</mark> <?php echo esc_html__( 'Recent Articles', 'carnation' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:query {"queryId":24,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"width":"","height":"160px","align":"wide","style":{"border":{"radius":"6px","top":{"radius":"0px","width":"0px","style":"none"},"right":{"color":"#f5f2eb00","width":"0px","style":"none"},"bottom":{"radius":"0px","width":"0px","style":"none"},"left":{"radius":"0px","width":"0px","style":"none"}},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"lineHeight":"1.4"}},"fontSize":"medium"} /-->

<!-- wp:post-date {"displayType":"modified","style":{"typography":{"fontSize":"0.8rem","textTransform":"uppercase","letterSpacing":"0.05em","fontStyle":"normal","fontWeight":"400"}}} /-->

<!-- wp:spacer {"height":"10px"} -->
<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->