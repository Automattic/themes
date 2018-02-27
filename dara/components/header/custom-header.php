<?php if ( get_header_image() ) : ?>
	<div class="custom-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
		</a>
	</div><!-- .custom-header -->
<?php endif; // End header image check. ?>
