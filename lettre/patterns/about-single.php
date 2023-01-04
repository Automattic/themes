<?php
/**
 * Title: About the author
 * Slug: lettre/about-single
 * Categories: featured, about
 */
?>

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":"30px"}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"120px"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:120px"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gray-square.png" alt="<?php echo esc_attr__( 'A generic profile picture.', 'lettre' ); ?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0px","top":"0px"}}},"fontSize":"large"} -->
<h2 class="has-large-font-size" style="margin-top:0px;margin-bottom:0px"><?php echo esc_html__( 'Manuel de Carlo', 'lettre' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Hello! I’m the author of this newsletter. I’m a professor of literature at the University of Culture, in Brazil.', 'lettre' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->'
