<?php declare( strict_types = 1 ); ?>
<?php
/**
 * Title: sponsors
 * Slug: foam/sponsors
 * Categories: text
 * Inserter: yes
 */
?>

<!-- wp:paragraph -->
<p><?php esc_html_e('FOAM_ is proudly sponsored by a group of digital brands.', 'foam' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"10vh","bottom":"10vh"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:10vh;margin-bottom:10vh"><!-- wp:image {"align":"center","width":260,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/foam_logos.png" alt="" width="260" /></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
