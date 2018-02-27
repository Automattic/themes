<div class="header-wrapper clear">
	<div class="site-branding">
		<?php if ( is_front_page() && is_home() ) : ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php else : ?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php endif; ?>
	</div><!-- .site-branding -->

	<?php get_template_part( 'components/navigation/navigation', 'top' ); ?>
</div><!-- .header-wrapper -->

<?php if ( '' != get_header_image() && ( is_home() || is_front_page() || is_archive() || is_search() ) ) { ?>
	<div class="site-description-wrapper">
		<?php affinity_the_site_logo(); ?>

		<?php $description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo $description; /* WPCS: xss ok. */ ?></a></p>
		<?php endif; ?>
	</div><!-- .site-description-wrapper -->
<?php } ?>

<?php if ( is_singular() && ! is_front_page() && ( '' != get_header_image() || has_post_thumbnail() ) ) {
	the_title( '<h1 class="entry-title">', '</h1>' );
} ?>