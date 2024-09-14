<?php
/**
 * Title: index
 * Slug: bysshe/index
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"dimensions":{"minHeight":"100vh"},"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group" style="min-height:100vh;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:group {"tagName":"header","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<header class="wp-block-group"><!-- wp:paragraph {"align":"right","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"xxx-small"} -->
<p class="has-text-align-right has-xxx-small-font-size" style="line-height:1.3"><?php esc_html_e('•', 'bysshe');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"xxx-small"} -->
<p class="has-text-align-right has-xxx-small-font-size" style="line-height:1.3"><?php esc_html_e('• •', 'bysshe');?></p>
<!-- /wp:paragraph --></header>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"50px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"main","layout":{"type":"constrained","contentSize":""}} -->
<main class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","contentSize":"36px"}} -->
<div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/wolfgang-hasselmann-pVr6wvUneMk-unsplash-scaled.jpg","dimRatio":0,"minHeight":50,"minHeightUnit":"vh","isDark":false,"style":{"layout":{"selfStretch":"fixed","flexSize":"50vh"}}} -->
<div class="wp-block-cover is-light" style="min-height:50vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/wolfgang-hasselmann-pVr6wvUneMk-unsplash-scaled.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"xxx-small"} -->
<p class="has-text-align-center has-xxx-small-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:site-title {"level":0,"fontSize":"large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"10%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:10%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--80)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"xx-small"} -->
<p class="has-xx-small-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Poetry, in a general sense, may be defined to be “the expression of the imagination”: and poetry is connate with the origin of man.', 'bysshe');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"40px","style":{"layout":[]}} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-date {"format":"M j Y","isLink":true,"className":"nowrap"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:spacer {"height":"0px","style":{"layout":{"flexSize":"50px","selfStretch":"fixed"}}} -->
<div style="height:0px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"tagName":"footer","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<footer class="wp-block-group"><!-- wp:paragraph {"align":"right","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"xxx-small"} -->
<p class="has-text-align-right has-xxx-small-font-size" style="line-height:1.3"><?php esc_html_e('• •', 'bysshe');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"right","className":"no-underline","style":{"typography":{"lineHeight":"1.3","fontStyle":"normal","fontWeight":"400","textTransform":"uppercase"}},"fontSize":"xxx-small"} -->
<p class="has-text-align-right no-underline has-xxx-small-font-size" style="font-style:normal;font-weight:400;line-height:1.3;text-transform:uppercase"><?php
	/* Translators: WordPress link. */
	$wordpress_link = '<a href="' . esc_url( __( 'https://wordpress.org', 'bysshe' ) ) . '" rel="nofollow">WordPress</a>';
	echo sprintf(
		esc_html__( 'Designed with %1$s', 'bysshe' ),
		$wordpress_link
	);
?></p>
<!-- /wp:paragraph --></footer>
<!-- /wp:group --></div>
<!-- /wp:group -->
