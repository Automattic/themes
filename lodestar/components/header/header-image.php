
<div class="custom-header">
	<?php
		$header_image = get_header_image();
		$jetpack_portfolio_featured_image = get_option( 'jetpack_portfolio_featured_image' );

		// If this is a single post or page with a featured image (but not a portfolio)
		if ( has_post_thumbnail() && ( is_singular() && 'jetpack-portfolio' !== get_post_type() && lodestar_jetpack_featured_image_display() ) ) :
			$post_thumbnail_id = get_post_thumbnail_id( $post->ID );
			$thumbnail_attributes = wp_get_attachment_image_src( $post_thumbnail_id, 'lodestar-featured-image' );
			?>

			<div class="custom-header-image" style="background-image: url(<?php echo esc_url( $thumbnail_attributes[0] ); ?>)">
				<?php get_template_part( 'components/header/site', 'branding' ); ?>
			</div>

		<?php
		// Else if this is a portfolio archive, and the Portfolio featured image is set
		// TODO: Decide if this image should also be shown for Portfolio types and tags archives
		elseif (
			( is_post_type_archive( 'jetpack-portfolio' ) || is_tax( 'jetpack-portfolio-type' ) || is_tax( 'jetpack-portfolio-tag') || 'jetpack-portfolio' === get_post_type() ) && isset( $jetpack_portfolio_featured_image ) && '' != $jetpack_portfolio_featured_image ) :

			$featured_image_attributes = wp_get_attachment_image_src( $jetpack_portfolio_featured_image, 'lodestar-featured-image' ); ?>

			<div class="custom-header-image" style="background-image: url(<?php echo esc_url( $featured_image_attributes[0] ); ?>)">
				<?php get_template_part( 'components/header/site', 'branding' ); ?>
			</div>

		<?php
		// Else if the Custom Header image has been set
		elseif ( ! empty( $header_image ) ) : ?>

			<div class="custom-header-image" style="background-image: url(<?php echo esc_url( $header_image ); ?>)">
				<?php get_template_part( 'components/header/site', 'branding' ); ?>
			</div>

		<?php
		// Otherwise, show an empty header background.
		else : ?>
			<div class="custom-header-image">
				<?php get_template_part( 'components/header/site', 'branding' ); ?>
			</div>
	<?php endif; ?>

</div><!-- .custom-header -->
