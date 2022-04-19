<?php
/**
 * Title: Header image
 * Slug: stewart/header-image
 * Categories: header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:image {"align":"full","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image alignfull size-large">
<img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/header.jpg'; ?>" alt="<?php echo esc_html__( 'An abstract image featuring a brushstroke.', 'stewart' ); ?>"/>
</figure>
<!-- /wp:image -->

<!-- wp:spacer {"height":70} -->
<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
