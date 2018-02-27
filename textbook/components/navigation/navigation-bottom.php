<?php if ( has_nav_menu( 'footer' ) ) : ?>
	<nav class="footer-navigation" role="navigation">
	<?php wp_nav_menu(
		array(
			'depth'          => 1,
			'theme_location' => 'footer',
			'menu_id'        => 'footer-menu'
		) ); ?>
	</nav><!-- .footer-navigation -->
<?php endif; ?>

<?php textbook_social_menu(); ?>