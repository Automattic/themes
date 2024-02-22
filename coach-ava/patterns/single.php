<?php
/**
 * Title: single
 * Slug: coachava/single
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"7.5rem","bottom":"7.5rem"},"margin":{"top":"0rem","bottom":"0rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0rem;margin-bottom:0rem;padding-top:7.5rem;padding-bottom:7.5rem"><!-- wp:group {"tagName":"main","lock":{"move":false,"remove":false},"align":"wide"} -->
<main class="wp-block-group alignwide"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"1rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="padding-right:1rem"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0.5rem","right":"1rem","bottom":"0.5rem","left":"1rem"}},"border":{"radius":"0px"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-radius:0px;padding-top:0.5rem;padding-right:1rem;padding-bottom:0.5rem;padding-left:1rem"><!-- wp:post-terms {"term":"category"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"2.5rem"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":1,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"300","letterSpacing":"-0.01rem"}},"fontSize":"x-large"} /-->

<!-- wp:template-part {"slug":"post-meta","area":"uncategorized"} /-->

<!-- wp:post-content {"lock":{"move":false,"remove":false},"align":"wide","layout":{"type":"constrained","justifyContent":"left"}} /--></div>
<!-- /wp:group -->

<!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop"><!-- wp:comments-title {"showPostTitle":false} /-->

<!-- wp:comment-template -->
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"spacing":{"blockGap":"1em","margin":{"bottom":"2.5rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-bottom:2.5rem"><!-- wp:avatar {"size":56} /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:comment-author-name /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":"0.5em"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:comment-date {"format":"M j, Y"} /-->

<!-- wp:comment-edit-link /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link /--></div>
<!-- /wp:group -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":""} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"blockGap":"5rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0.5rem","right":"1rem","bottom":"0.5rem","left":"1rem"}},"border":{"radius":"0px"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-radius:0px;padding-top:0.5rem;padding-right:1rem;padding-bottom:0.5rem;padding-left:1rem"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","textTransform":"uppercase","fontStyle":"normal","fontWeight":"300","letterSpacing":"0.07rem"}}} -->
<p style="font-size:0.9rem;font-style:normal;font-weight:300;letter-spacing:0.07rem;text-transform:uppercase">Author</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"80px","height":"80px","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/coach-headshot.png" alt="" style="object-fit:cover;width:80px;height:80px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p>Ava Reed is the passionate and insightful blogger behind our coaching platform. With a deep commitment to personal and professional development, Ava brings a wealth of experience and expertise to our coaching programs.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"0.07rem"}}} -->
<p style="font-size:0.9rem;font-style:normal;font-weight:700;letter-spacing:0.07rem;text-transform:uppercase"><a href="https://coaching.mystagingwebsite.com/about/" data-type="page" data-id="57">about the Coach ›</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"2rem"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0.5rem","right":"1rem","bottom":"0.5rem","left":"1rem"}},"border":{"radius":"0px"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-radius:0px;padding-top:0.5rem;padding-right:1rem;padding-bottom:0.5rem;padding-left:1rem"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","textTransform":"uppercase","fontStyle":"normal","fontWeight":"300","letterSpacing":"0.07rem"}}} -->
<p style="font-size:0.9rem;font-style:normal;font-weight:300;letter-spacing:0.07rem;text-transform:uppercase">NEWSLETTER</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"1.3rem","lineHeight":"1.5","letterSpacing":"0.01rem"}}} -->
<h1 class="wp-block-heading" style="font-size:1.3rem;font-style:normal;font-weight:700;letter-spacing:0.01rem;line-height:1.5">Weekly thoughts on Personal Development</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>We know that life's challenges are unique and complex for everyone. Coaching is here to help you find yourself and realize your full potential.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Subscribe</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0rem","bottom":"0rem"},"blockGap":"0rem"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0rem;margin-bottom:0rem"><!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"","margin":{"top":"0rem","bottom":"0rem"},"padding":{"top":"7.5rem","bottom":"7.5rem"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"backgroundColor":"primary","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-color has-primary-background-color has-text-color has-background has-link-color" style="margin-top:0rem;margin-bottom:0rem;padding-top:7.5rem;padding-bottom:7.5rem"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"2rem","padding":{"right":"1rem"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide" style="padding-right:1rem"><!-- wp:heading -->
<h2 class="wp-block-heading">Embrace change and transform your life with me</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Schedule a free consultation and find out how mindset coaching can help you.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"contrast","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-link-color wp-element-button">Schedule call</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"2px"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/pexels-ekaterina-bolovtsova-4049992.jpg" alt="" style="border-radius:2px;aspect-ratio:4/3;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-basic","align":"full"} /--></div>
<!-- /wp:group -->