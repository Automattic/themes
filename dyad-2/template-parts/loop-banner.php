<?php
/**
 * Banner / Featured content loop
 * @package Dyad
 */

?>


<div id="site-banner" class="site-banner<?php if ( ( is_front_page() || is_home() ) && dyad_2_has_banner_posts( 2 ) ) { echo ' enable-slider'; } else { echo ' no-slider'; } ?>">

	<div class="site-banner-inner">

		<?php

		if ( ( is_front_page() && is_page() && has_post_thumbnail() ) || ( is_single() && 'image' == get_post_format() ) ) {

			// if front page is static page or if this is single image post and has a featured image, display that.
			get_template_part( 'template-parts/content', 'featured-img' );

		} else if ( dyad_2_has_banner_posts( 1 ) ) {

			// if there are featured posts, display those as a slideshow
			$featured_posts = dyad_2_get_banner_posts();

			foreach ( (array) $featured_posts as $order => $post ) {
				setup_postdata( $post );
				get_template_part( 'template-parts/content', 'featured-post' );
			}
			wp_reset_postdata();

		} else {

			//Fall back to Custom Header
			get_template_part( 'template-parts/content', 'custom-header' );

		} ?>

	</div><!-- .site-banner-inner -->

</div><!-- #site-banner -->


