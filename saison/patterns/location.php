<?php
/**
 * Title: Location
 * Slug: saison/location
 * Categories: featured, text
 * Inserter: yes
 */
?>

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( '92 St. Faiths Lane,', 'saison' ); ?><br><?php echo esc_html__( 'Norwich NR1 1NE', 'saison' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><a href="#"><?php esc_html_e('email@example.com', 'saison');?></a><br><?php esc_html_e('+00 123 456 789', 'saison');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size"><?php echo esc_html__( 'Opening Hours', 'saison' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Tuesday to Sunday: 12am - 10pm', 'saison' ); ?><br><?php echo esc_html__( 'Monday: Closed', 'saison' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:image {"id":462,"sizeSlug":"full","linkDestination":"none","align":"wide","style":{"color":{}}} -->
<figure class="wp-block-image alignwide size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/home-image-1-scaled.jpg" alt="" class="wp-image-462"/></figure>
<!-- /wp:image -->