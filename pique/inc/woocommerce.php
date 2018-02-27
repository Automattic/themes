<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package Pique
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */
function pique_woocommerce_setup() {
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 726,
		'single_image_width'    => 700,
	) );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'pique_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function pique_woocommerce_scripts() {
	wp_enqueue_script( 'pique-woocommerce-scripts', get_template_directory_uri() . '/assets/js/woocommerce.js', array( 'jquery' ), '', true );
	wp_enqueue_style( 'pique-woocommerce-style', get_template_directory_uri() . '/woocommerce.css' );

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				 url("' . $font_path . 'star.woff") format("woff"),
				 url("' . $font_path . 'star.ttf") format("truetype"),
				 url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'pique-woocommerce-style', $inline_font );

}
add_action( 'wp_enqueue_scripts', 'pique_woocommerce_scripts' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function pique_woocommerce_image_dimensions() {
    global $pagenow;

	if ( ! isset( $_GET['activated'] ) || $pagenow != 'themes.php' ) {
		return;
	}

	$single = array(
		'width'  => '700',   // px
		'height' => '700',   // px
		'crop'   => false    // true
	);

    // Image Single product image size
    update_option( 'shop_single_image_size', $single );
}
add_action( 'after_switch_theme', 'pique_woocommerce_image_dimensions', 1 );

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function pique_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'pique_woocommerce_active_body_class' );

/**
 * Products per page.
 *
 * @return integer number of products.
 */
function pique_woocommerce_products_per_page() {
	return 12;
}
add_filter( 'loop_shop_per_page', 'pique_woocommerce_products_per_page' );

/**
 * Product gallery thumnbail columns.
 *
 * @return integer number of columns.
 */
function pique_woocommerce_thumbnail_columns() {
	return 4;
}
add_filter( 'woocommerce_product_thumbnails_columns', 'pique_woocommerce_thumbnail_columns' );

/**
 * Default loop columns on product archives.
 *
 * @return integer products per row.
 */
function pique_woocommerce_loop_columns() {
	return 3;
}
add_filter( 'loop_shop_columns', 'pique_woocommerce_loop_columns' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function pique_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 3,
		'columns'        => 3,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'pique_woocommerce_related_products_args' );

if ( ! function_exists( 'pique_woocommerce_product_columns_wrapper' ) ) {
	/**
	 * Product columns wrapper.
	 *
	 * @return  void
	 */
	function pique_woocommerce_product_columns_wrapper() {
		$columns = pique_woocommerce_loop_columns();
		echo '<div class="columns-' . absint( $columns ) . '">';
	}
}
add_action( 'woocommerce_before_shop_loop', 'pique_woocommerce_product_columns_wrapper', 40 );

if ( ! function_exists( 'pique_woocommerce_product_columns_wrapper_close' ) ) {
	/**
	 * Product columns wrapper close.
	 *
	 * @return  void
	 */
	function pique_woocommerce_product_columns_wrapper_close() {
		echo '</div>';
	}
}
add_action( 'woocommerce_after_shop_loop', 'pique_woocommerce_product_columns_wrapper_close', 40 );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'pique_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function pique_woocommerce_wrapper_before() {
		?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
		<?php
	}
}
add_action( 'woocommerce_before_main_content', 'pique_woocommerce_wrapper_before' );

if ( ! function_exists( 'pique_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function pique_woocommerce_wrapper_after() {
		?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'pique_woocommerce_wrapper_after' );

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'pique_woocommerce_header_cart' ) ) {
			pique_woocommerce_header_cart();
		}
	?>
 */

if ( ! function_exists( 'pique_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function pique_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		pique_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'pique_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'pique_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function pique_woocommerce_cart_link() {
		?>
			<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'pique' ); ?>">
				<?php /* translators: number of items in the mini cart. */ ?>
				<span class="amount"><i class="fa fa-shopping-cart"></i> <?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span>
				<span class="count"><?php echo wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'pique' ), WC()->cart->get_cart_contents_count() ) );?></span>
			</a>
		<?php
	}
}

if ( ! function_exists( 'pique_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function pique_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php pique_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
					$instance = array(
						'title' => '',
					);

					the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}

/**
 * Place a cart icon with number of items and total cost in the menu bar.
 *
 * Source: http://wordpress.org/plugins/woocommerce-menu-bar-cart/
 */
add_filter( 'wp_nav_menu_items', 'pique_woocommerce_menu_cart', 10, 2 );

function pique_woocommerce_menu_cart( $menu, $args ) {

	//
	if ( $args->theme_location == 'primary' ) {

		// $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

		ob_start();

			ob_start();
			pique_woocommerce_cart_link();
			$new_cart_link = ob_get_clean();

			ob_start();
			the_widget( 'WC_Widget_Cart', array( 'title' => '' ) );
			$new_cart_widget = ob_get_clean();

			$menu_item = '<li class="menu-item site-header-cart right">' . $new_cart_link;
			$menu_item .= '<ul class="sub-menu"><li>' . $new_cart_widget . '</li></ul>';
			$menu_item .= '</li>';

			echo $menu_item;

		$menu .= ob_get_clean();
	}

	return $menu;
}

/**
 * Adds custom classes to the array of post classes.
 *
 * @param array $classes Classes for the post element.
 * @return array
 */
function pique_woocommerce_post_classes( $classes ) {

	// Remove the panel class from products in archive views
	if ( is_archive() && is_woocommerce() ) :
		// $classes[] = 'pique-panel';
		$classes = preg_grep( '/^pique-panel$/', $classes, PREG_GREP_INVERT );

	endif;

	return $classes;
}
add_filter( 'post_class', 'pique_woocommerce_post_classes' );

/**
 * Remove result count & sorting
 */
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

/**
 * Add result count & sorting to woocommerce archive description in page header
 */
add_action( 'woocommerce_archive_description', 'woocommerce_result_count', 20 );
add_action( 'woocommerce_archive_description', 'woocommerce_catalog_ordering', 30 );

/**
 * Workaround to prevent is_shop() from failing due to WordPress core issue
 *
 * @link https://core.trac.wordpress.org/ticket/21790
 * @param  array $args infinite scroll args.
 * @return array       infinite scroll args.
 */
function pique_woocommerce_is_shop_page() {
	global $wp_query;
	$front_page_id        = get_option( 'page_on_front' );
	$current_page_id      = $wp_query->get( 'page_id' );
	$shop_page_id         = apply_filters( 'woocommerce_get_shop_page_id', get_option( 'woocommerce_shop_page_id' ) );
	$is_static_front_page = 'page' === get_option( 'show_on_front' );
	if ( $is_static_front_page && $front_page_id === $current_page_id  ) {
		$is_shop_page = ( $current_page_id === wc_get_page_id( 'shop' ) ) ? true : false;
	} else {
		$is_shop_page = is_shop();
	}
	return $is_shop_page;
}

/**
 * Jetpack infinite scroll duplicates posts where orderby is anything other than modified or date
 * This filter offsets the products returned by however many are displayed per page
 *
 * @link https://github.com/Automattic/jetpack/issues/1135
 * @param  array $args infinite scroll args.
 * @return array       infinite scroll args.
 */
function pique_woocommerce_jetpack_duplicate_products( $args ) {
	if ( ( isset( $args['post_type'] ) && 'product' === $args['post_type'] ) || ( isset( $args['taxonomy'] ) && 'product_cat' === $args['taxonomy'] ) ) {
		$args['offset'] = $args['posts_per_page'] * $args['paged'];
	}
 	return $args;
}
add_filter( 'infinite_scroll_query_args', 'pique_woocommerce_jetpack_duplicate_products', 100 );

/**
 * Override number of products per page in Jetpack infinite scroll.
 *
 * @param  array $args infinite scroll args.
 * @return array       infinite scroll args.
 */
function pique_woocommerce_jetpack_products_per_page( $args ) {
	if ( is_array( $args ) && ( pique_woocommerce_is_shop_page() || is_product_taxonomy() || is_product_category() || is_product_tag() ) ) {
		 $args['posts_per_page'] = pique_woocommerce_products_per_page();
	}
	return $args;
}
add_filter( 'infinite_scroll_settings', 'pique_woocommerce_jetpack_products_per_page' );