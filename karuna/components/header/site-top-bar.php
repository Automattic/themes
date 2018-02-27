<div class="top-bar">
	<div class="top-bar-wrapper">
		<?php $description = get_bloginfo( 'description', 'display' );

		if ( $description || is_customize_preview() ) : ?>
			<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
		<?php endif; ?>

		<?php karuna_social_menu(); ?>
	</div><!-- .top-bar-wrapper -->
</div><!-- .top-bar -->