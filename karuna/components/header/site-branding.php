<div class="sticky-wrapper">
	<div class="site-branding-wrapper">
		<div class="site-branding">
			<?php karuna_the_custom_logo(); ?>
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<?php get_template_part( 'components/navigation/navigation', 'top' ); ?>

		<?php
			if ( function_exists( 'karuna_woocommerce_header_cart' ) ) {
				karuna_woocommerce_header_cart();
			}
		?>
	</div><!-- .site-branding-wrapper -->
</div><!-- .sticky-wrapper -->