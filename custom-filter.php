<?php
function get_shop_page_filter(){

	$paged_from_post = isset($_POST['data']['paged']) ? $_POST['data']['paged'] : null;
	$paged_from_query = get_query_var('paged');

	$paged = $paged_from_post ? $paged_from_post : ($paged_from_query ? $paged_from_query : 1);

	$args = array(
		'post_type'       =>  'product',
		'post_status'     =>  'publish',
		'posts_per_page'  =>  6,
		'paged'           => $paged
	);

	if ( $_POST['data'] ) {
		$post_data = $_POST['data'];

		if ( isset( $post_data['search_value'] ) ) {
			$args['s'] = $post_data['search_value'];
		}

		$meta_query_array = array();

		$tax_query_array = array(
			'relation' => 'AND'
		);

		if( isset( $post_data['products_categories'] ) && count( $post_data['products_categories'] ) ) {
			$category = $post_data['products_categories'];

			array_push( $tax_query_array, array(
			  'taxonomy'  =>  'product_cat',
			  'field'     =>  'term_id',
			  'terms'     =>  $category
			));
		}
		if( isset( $post_data['values'] ) && count( $post_data['values'] ) ) {

			array_push( $meta_query_array,
			array(
				array(
					'key' => '_price',
					'value' => array($post_data['values'][0], $post_data['values'][1]),
					'compare' => 'BETWEEN',
					'type' => 'numeric',
					)
					)
				);

		}

		$args['meta_query'] = $meta_query_array;
		$args['tax_query'] = $tax_query_array;
	}

	$loop = new WP_Query($args);
	$shop_page_loop_html = '';

	ob_start();
	if ($loop->have_posts()):
		while ($loop->have_posts()):
			$loop->the_post();
			global $product; ?>

			<div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-3 product-box-main">
				<div class="product-box mb-3">
					<div class="pro-img">
					<?php the_post_thumbnail();?>
						<div class="product-icon d-flex justify-content-center  gap-2">
							<div class="cart-btn">
							<?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_add_to_cart( $loop->post, $product ); } ?>
							</div>
							<?php if ( class_exists( 'YITH_WCWL' ) ) {  ?>
								<div class="wishlist_text">
								<?php echo do_shortcode(get_theme_mod('internet_service_provider_pro_our_products_add_to_wishlist', '[yith_wcwl_add_to_wishlist]')); ?>
								</div>
							<?php } else {
								echo "Please install and activate YITH WooCommerce Wishlist to add product wishlist";
							} ?>
							<div class="quick-view">
								<?php echo do_shortcode('[woosq id="'. get_the_ID() .'"]'); ?>
							</div>
						</div>
					</div>
					<div class="product-content">
					<h5 class="product-title">
						<a href="<?php the_permalink(); ?>">
						<?php echo get_the_title(); ?>
						</a>
					</h5>
					</div> 
					<h4 class="product-price text-center">
						<?php echo $product->get_price_html(); ?>
						</h4>
					<a class="theme-btn" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('internet_service_provider_pro_our_product_order_now_button')); ?></a>
				</div>
			</div>

<?php endwhile;
	endif;

	$shop_page_loop_html = ob_get_clean();

	$base = $_POST['data']['base_url'];

	if (strpos($base, '?') !== false) {
      	$base .= '&paged=%#%';
    } else {
      	$base .= '?paged=%#%';
    }

	$base = str_replace( 999999999, '%#%', $base );

	$current = 1;
	$total = $loop->max_num_pages;

	$products_categories = isset($_POST['data']['products_categories']) ? $_POST['data']['products_categories'] : array();
    $imploded_products_categories = implode(',', $products_categories);

	$pages = paginate_links(
		array(
			'base'      => add_query_arg('topage', '%#%'),
			'format'    => '',
			'current'   => max(1, $paged),
			'total'     => $total,
			'prev_text' => '<i class="fas fa-chevron-left"></i>',
			'next_text' => '<i class="fas fa-chevron-right"></i>',
			'type'      => 'array',
			'add_args'  => array(
				'search_value' => isset($_POST['data']['search_value']) ? $_POST['data']['search_value'] : '',
				'products_categories' =>  $imploded_products_categories
			)
		)
	);

	$current_path = $_SERVER['REQUEST_URI'];

    $shop_page_url = wp_make_link_relative(get_permalink( wc_get_page_id( 'shop' ) ));

    $to_replace_link = wp_make_link_relative(home_url()) . '/wp-admin/admin-ajax.php';

    if ($pages) {

		if (strpos(implode('', $pages), '/wp-admin/admin-ajax.php') !== false) {
			foreach ($pages as &$page) {
				$page = str_replace($to_replace_link, $shop_page_url, $page);
			}
		}
	}

	$response_data = array(
		'html'          =>  $shop_page_loop_html,
		'pagination'    =>  $pages
	);

	wp_send_json( $response_data );
	exit;
}

add_action('wp_ajax_get_shop_page_filter','get_shop_page_filter');
add_action('wp_ajax_nopriv_get_shop_page_filter','get_shop_page_filter');
?>