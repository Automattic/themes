<div class="site-info">
	<?php get_template_part( 'template-parts/footer/site-name', '' ); ?>
	<?php
	/* translators: 1: WordPress link, 2: WordPress. */
	printf(
		'<a href="%1$s" class="imprint">proudly powered by %2$s</a>.',
		esc_url( __( 'https://wordpress.org/', 'varia' ) ),
		'WordPress'
	);
	?>
	<?php get_template_part( 'template-parts/footer/privacy-policy', '' ); ?>
</div><!-- .site-info -->
