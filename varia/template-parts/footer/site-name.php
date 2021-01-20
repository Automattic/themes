<?php $blog_info = get_bloginfo( 'name' ); ?>
<?php if ( ! empty( $blog_info ) ) : ?>
	<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><span class="comma">,</span>
<?php endif; ?>
<?php
	/* translators: 1: WordPress link, 2: WordPress. */
	printf(
		'<a href="%1$s" class="imprint">proudly powered by %2$s</a>.',
		esc_url( __( 'https://wordpress.org/', 'varia' ) ),
		'WordPress'
	);
	?>
