<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     9.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>

	<section class="related products">

		<?php
		$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'woocommerce' ) );

		if ( $heading ) :
			?>
			<h2 class="text-center"><?php echo esc_html( $heading ); ?></h2>
		<?php endif; ?>
		<?php if(get_theme_mod('internet_service_provider_pro_related_page_paragraph')!=''){ ?>
			<p class="theme-para mb-lg-0 mb-sm-0 mb-2 text-center"><?php echo esc_html(get_theme_mod('internet_service_provider_pro_related_page_paragraph')); ?></p>
		<?php } ?>
		<?php woocommerce_product_loop_start(); ?>
		<div class="row">


			<?php foreach ( $related_products as $related_product ) : ?>

					<?php
						global $product;
					$post_object = get_post( $related_product->get_id() );

					setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

					// wc_get_template_part( 'content', 'product' );
					?>
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-3 product-box-main">
							<div class="product-box mb-3">
								<div class="pro-img">
								<?php the_post_thumbnail();?>
									<div class="product-icon d-flex justify-content-center  gap-2">
										<div class="cart-btn">
										<?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_add_to_cart( $query->post, $product ); } ?>
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
			<?php endforeach; ?>
		</div>
		<?php woocommerce_product_loop_end(); ?>

	</section>
	<?php
endif;

wp_reset_postdata();
