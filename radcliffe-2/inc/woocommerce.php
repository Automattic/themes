<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package radcliffe-2
 */

/**
 * WooCommerce setup function.
 *
 * See: https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 *
 * @return void
 */
function radcliffe_2_woocommerce_setup() {
	add_theme_support( 'woocommerce', apply_filters( 'radcliffe_2_woocommerce_args', array(
		'single_image_width'    => 600,
		'thumbnail_image_width' => 300,
		'product_grid'          => array(
			'default_columns' => 3,
			'default_rows'    => 4,
			'min_columns'     => 1,
			'max_columns'     => 6,
			'min_rows'        => 1
		)
	) ) );

	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}

add_action( 'after_setup_theme', 'radcliffe_2_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets
 *
 * @return void
 */
function radcliffe_2_woocommerce_scripts() {
	wp_enqueue_style( 'radcliffe-2-woocommerce-style', get_template_directory_uri() . '/woocommerce.css' );
	wp_style_add_data( 'radcliffe-2-woocommerce-style', 'rtl', get_stylesheet_directory_uri() . '/woocommerce-rtl.css' );
}

add_action( 'wp_enqueue_scripts', 'radcliffe_2_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * See: https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag
 *
 * @param  array $classes css classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class
 */
function radcliffe_2_woocommerce_active_body_class( $classes ) {

	$classes[] = 'woocommerce-active';

	// If no header menu exists, add a body class to reposition the shop mini-cart
	if ( ! has_nav_menu( 'menu-1' ) ) {
		$classes[] = 'menu-1-empty';
	}

	return $classes;
}

add_filter( 'body_class', 'radcliffe_2_woocommerce_active_body_class' );

/**
 * Products per page
 *
 * @return integer number of products
 */
function radcliffe_2_woocommerce_products_per_page() {
	return absint( apply_filters( 'radcliffe_2_woocommerce_products_per_page', 12 ) );
}

// Legacy WooCommerce products per page filter.
if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.3', '<' ) ) {
	add_filter( 'loop_shop_per_page', 'radcliffe_2_woocommerce_products_per_page' );
}

/**
 * Product gallery thumnbail columns
 *
 * @return integer number of columns
 */
function radcliffe_2_woocommerce_thumbnail_columns() {
	return absint( apply_filters( 'radcliffe_2_woocommerce_product_thumbnail_columns', 4 ) );
}

add_filter( 'woocommerce_product_thumbnails_columns', 'radcliffe_2_woocommerce_thumbnail_columns' );

/**
 * Default loop columns on product archives
 *
 * @return integer products per row
 */
function radcliffe_2_woocommerce_loop_columns() {
	return absint( apply_filters( 'radcliffe_2_woocommerce_loop_columns', 3 ) );
}

// Legacy WooCommerce columns filter.
if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.3', '<' ) ) {
	add_filter( 'loop_shop_columns', 'radcliffe_2_woocommerce_loop_columns' );
}

/**
 * Related Products Args
 *
 * @param array $args related products args.
 * @return array $args related products args
 */
function radcliffe_2_woocommerce_related_products_args( $args ) {
	$args = apply_filters( 'radcliffe_2_woocommerce_related_products_args', array(
		'posts_per_page' => 3,
		'columns'        => 3,
	) );

	return $args;
}

add_filter( 'woocommerce_output_related_products_args', 'radcliffe_2_woocommerce_related_products_args' );

if ( ! function_exists( 'radcliffe_2_woocommerce_product_columns_wrapper' ) ) {
	/**
	 * Product columns wrapper
	 *
	 * @return  void
	 */
	function radcliffe_2_woocommerce_product_columns_wrapper() {
		$columns = radcliffe_2_loop_columns();
		echo '<div class="columns-' . absint( $columns ) . '">';
	}
}

add_action( 'woocommerce_before_shop_loop', 'radcliffe_2_woocommerce_product_columns_wrapper', 40 );

if ( ! function_exists( 'radcliffe_2_loop_columns' ) ) {
	/**
	 * Default loop columns on product archives
	 *
	 * @return integer products per row
	 */
	function radcliffe_2_loop_columns() {
		$columns = 3; // 3 products per row
		if ( function_exists( 'wc_get_default_products_per_row' ) ) {
			$columns = wc_get_default_products_per_row();
		}
		return apply_filters( 'radcliffe_2_loop_columns', $columns );
	}
}

if ( ! function_exists( 'radcliffe_2_woocommerce_product_columns_wrapper_close' ) ) {
	/**
	 * Product columns wrapper close
	 *
	 * @return  void
	 */
	function radcliffe_2_woocommerce_product_columns_wrapper_close() {
		echo '</div>';
	}
}

add_action( 'woocommerce_before_shop_loop', 'radcliffe_2_woocommerce_sorting_wrap', 3 );

if ( ! function_exists( 'radcliffe_2_woocommerce_sorting_wrap' ) ) {
	/**
	 * Sorting wrapper
	 *
	 * @return  void
	 */
	function radcliffe_2_woocommerce_sorting_wrap() {
		echo '<div class="woocommerce-sorting-wrap">';
	}
}

add_action( 'woocommerce_before_shop_loop', 'radcliffe_2_woocommerce_sorting_wrap_close', 30 );

if ( ! function_exists( 'radcliffe_2_woocommerce_sorting_wrap_close' ) ) {
	/**
	 * Sorting wrapper close
	 *
	 * @return  void
	 */
	function radcliffe_2_woocommerce_sorting_wrap_close() {
		echo '</div><!-- END .sorting-wrap -->';
	}
}

add_action( 'woocommerce_after_shop_loop', 'radcliffe_2_woocommerce_product_columns_wrapper_close', 40 );

/**
 * Remove default WooCommerce wrapper
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'radcliffe_2_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content
	 * Wraps all WooCommerce content in wrappers which match the theme markup
	 *
	 * @return void
	 */
	function radcliffe_2_woocommerce_wrapper_before() {
		?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
		<?php
	}
}

add_action( 'woocommerce_before_main_content', 'radcliffe_2_woocommerce_wrapper_before' );

if ( ! function_exists( 'radcliffe_2_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 *
	 * @return void
	 */
	function radcliffe_2_woocommerce_wrapper_after() {
		?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php
	}
}

add_action( 'woocommerce_after_main_content', 'radcliffe_2_woocommerce_wrapper_after' );

if ( ! function_exists( 'radcliffe_2_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments
	 * Ensure cart contents update when products are added to the cart via AJAX. Also adds cart icon SVG
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX
	 */
	function radcliffe_2_woocommerce_cart_link_fragment( $fragments ) {
		global $woocommerce;

		ob_start();
		radcliffe_2_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}

add_filter( 'woocommerce_add_to_cart_fragments', 'radcliffe_2_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'radcliffe_2_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link
	 * Displayed a link to the cart including the number of items present and the cart total
	 *
	 * @return void
	 */
	function radcliffe_2_woocommerce_cart_link() {
		?>
			<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'radcliffe-2' ); ?>">
				<?php echo radcliffe_2_get_svg( array( 'icon' => 'cart', 'title' => esc_html__( 'View your shopping cart', 'radcliffe-2' ) ) ); ?>
				<?php /* translators: number of items in the mini cart. */ ?>
				<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span>
				<span class="count"><?php echo wp_kses_data( sprintf( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'radcliffe-2' ), WC()->cart->get_cart_contents_count() ) );?></span>
			</a>
		<?php
	}
}

if ( ! function_exists( 'radcliffe_2_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart
	 *
	 * @return void
	 */
	function radcliffe_2_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php radcliffe_2_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
			</li>
		</ul>
		<?php
	}
}

/**
 * Remove breadcrumbs
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

/**
 * Add breadcrumbs after
 *
 * We know the content wrapper is added at priority 10, so
 * let's add the breadcrumbs before that, at priority 5
 */
add_action( 'woocommerce_before_shop_loop', 'woocommerce_breadcrumb', 5 );

/**
 * Workaround to prevent is_shop() from failing due to WordPress core issue
 *
 * @link https://core.trac.wordpress.org/ticket/21790
 * @param  array $args infinite scroll args.
 * @return array       infinite scroll args.
 */
function radcliffe_2_woocommerce_is_shop_page() {
	global $wp_query;

	$front_page_id        = get_option( 'page_on_front' );
	$current_page_id      = $wp_query->get( 'page_id' );
	$is_static_front_page = 'page' === get_option( 'show_on_front' );

	if ( $is_static_front_page && $front_page_id === $current_page_id  ) {
		$is_shop_page = ( $current_page_id === wc_get_page_id( 'shop' ) ) ? true : false;
	} else {
		$is_shop_page = is_shop();
	}

	return $is_shop_page;
}

/**
 * Move the sale flash badge
 */
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 6 );
remove_action ( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
add_action ( 'woocommerce_single_product_summary', 'woocommerce_show_product_sale_flash', 5 );
