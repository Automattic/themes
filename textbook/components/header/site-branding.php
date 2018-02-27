		<div class="header-wrap">

			<?php textbook_the_custom_logo(); ?>

			<div class="site-branding">

			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>

			<?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>

			</div><!-- .site-branding -->

			<div class="search-toggle">
				<a href="#search-container" class="search-toggle-link" aria-expanded="false" aria-controls="search-container">
					<svg version="1.1" id="search-open" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
						<path d="M14.7,13.3L11,9.6c0.6-0.9,1-2,1-3.1C12,3.5,9.5,1,6.5,1S1,3.5,1,6.5S3.5,12,6.5,12c1.2,0,2.2-0.4,3.1-1l3.7,3.7L14.7,13.3z M2.5,6.5c0-2.2,1.8-4,4-4s4,1.8,4,4s-1.8,4-4,4S2.5,8.7,2.5,6.5z"/>
					</svg>
					<span><?php esc_html_e( 'Search', 'textbook' ); ?></span>
				</a>
			</div>

			<?php textbook_social_menu(); ?>

		</div><!-- .header-wrap -->