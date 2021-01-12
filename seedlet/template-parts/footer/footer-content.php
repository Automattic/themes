<?php if ( ! ( true === get_theme_mod( 'hide_site_footer', false ) && is_front_page() && is_page() ) ) : ?>
	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
	<?php get_template_part( 'template-parts/footer/footer-menu' ); ?>
<?php endif; ?>

<?php
get_template_part( 'template-parts/footer/footer-info' );
