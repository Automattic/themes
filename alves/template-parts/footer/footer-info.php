<div class="site-info">
	<?php get_template_part( 'template-parts/footer/site-name', '' ); ?>
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'alves' ) ); ?>" class="imprint">
		<?php
		/* translators: %s: WordPress. */
		printf( __( 'proudly powered by %s.', 'alves' ), 'WordPress' );
		?>
	</a>
</div>
