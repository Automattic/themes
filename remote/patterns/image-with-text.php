<?php
/**
 * Title: Image with text
 * Slug: remote/image-with-text
 * Categories: featured, text, columns
 */
?>
<!-- wp:image {"align":"wide","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image alignwide size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Laptop.jpg" alt="<?php echo esc_attr__( 'Picture of a laptop', 'remote' ); ?>"/></figure>
<!-- /wp:image -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"50px","padding":{"top":"20px"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:20px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Now that I’m working from home, I find that I am spending more time with my family, exercising more, and getting more sleep. This has not been at the expense of my productivity at work — if anything, my productivity has improved as well. I’ve become a pro at collaborating effectively across time zones. Most of my colleagues are in Europe or Asia, but I’m in way over California. I’d been worried that the distance would become a problem for us, but we’ve embraced asynchronous communication styles.', 'remote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"27%"} -->
<div class="wp-block-column" style="flex-basis:27%"><!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'I setup my home office on day one, but it wasn’t ergonomically correct for me. So I’ve been revising it throughout the past few months.', 'remote' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
