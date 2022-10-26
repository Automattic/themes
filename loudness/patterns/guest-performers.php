<?php
/**
 * Title: Guest Performers
 * Slug: loudness/guest-performers
 * Categories: featured
 */
?>
<!-- wp:heading -->
<h2><?php echo esc_html__( 'Guest Performers', 'loudness' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group">

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large">
	<img src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/guest-1.jpg'; ?>" alt="<?php echo esc_attr__( 'Headshot of woman wearing a green top and sunglasses, looking in the distance.', 'loudness' ); ?>"/>
	<figcaption class="wp-element-caption"><?php echo esc_html__( 'Spicy Little Wings', 'loudness' ); ?></figcaption></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large">
	<img src="<?php echo esc_url( get_stylesheet_directory_uri() ) . '/assets/images/guest-2.jpg'; ?>" alt="<?php echo esc_attr__( 'Headshot of man wearing black sunglasses looking into the camera.', 'loudness' ); ?>"/>
	<figcaption class="wp-element-caption"><?php echo esc_html__( 'DJ Vert', 'loudness' ); ?></figcaption></figure>
<!-- /wp:image -->

</div>
<!-- /wp:column -->

</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->