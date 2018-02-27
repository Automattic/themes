<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package Libretto
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<header class="nav-bar">
			<?php if ( ! is_home() ) : // On the blog index page the site title is displayed below nav-bar ?>
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<?php endif; ?>

			<nav id="site-navigation" class="navigation-main" role="navigation">
				<div class="menu-toggle"><span class="mobile-site-title"><?php bloginfo( 'name' ); ?></span>
					<button id="menu-icon">
					  <span></span>
					  <span></span>
					  <span></span>
					</button>
				</div>
				<div class="screen-reader-text skip-link">
					<a href="#content" title="<?php esc_attr_e( 'Skip to content', 'libretto' ); ?>"><?php esc_attr_e( 'Skip to content', 'libretto' ); ?></a>
				</div>
				<div class="menu-wrapper">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => false ) ); ?>
					<?php get_search_form(); ?>
				</div>
			</nav><!-- .site-navigation -->
		</header><!-- .header-bar -->

		<?php if ( ! is_attachment() ) : // Don't show header for attachments ?>

			<header id="masthead" class="site-header" role="banner"

			<?php
			/*
			 * If we have a custom image set, we're going to do some manipulation to the masthead height via JS,
			 * This means that we need to pass the height of the image is being shown as a data-attribute.
			 * This way, JS will know our image height without resorting to anything complicated.
			 */
			$libretto_header_image_height = libretto_get_header_image( 'height' );
			if ( isset( $libretto_header_image_height ) ) :
				echo 'data-image-height="'. absint( $libretto_header_image_height ) . '"';
			endif;
			?>

			>

				<!-- PAGE HEADER -->
				<div class="title-block">

				<?php if ( is_home() ) : // Show the site title & tagline ?>
					<?php if ( function_exists( 'jetpack_the_site_logo' ) ) :
						jetpack_the_site_logo();
					endif; ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h3 class="site-description"><?php bloginfo( 'description' ); ?></h3>

				<?php elseif ( is_single() ) : // Show the post title and metadata for posts ?>
					<div class="entry-meta">
						<?php libretto_posted_on(); ?>
					</div><!-- .entry-meta -->
					<h1><?php the_title(); ?></h1>

				<?php elseif ( is_page() ) : // Show the page title for pages ?>
					<h1><?php the_title(); ?></h1>

				<?php elseif ( is_archive() ) : // Show archive title
					the_archive_title( '<h1>', '</h1>' );
					the_archive_description( '<h3>', '</h3>' );
				?>

				<?php elseif ( is_404() ) : // Show "page not found" ?>
					<h1><?php esc_html_e( 'Error', 'libretto' ); ?></h1>
					<h3><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'libretto' ); ?></h3>

				<?php elseif ( is_search() ) : // Search results ?>
					<h1><?php esc_html_e( 'Search results', 'libretto' ); ?></h1>
					<h3><?php printf( esc_html__( 'You searched for %s', 'libretto' ), '<span>' . get_search_query() . '</span>' ); ?></h3>

				<?php endif; ?>

				</div><!-- .title-block -->
			</header><!-- #masthead -->
		<?php endif; ?>
