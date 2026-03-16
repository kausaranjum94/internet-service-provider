<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

// Banner image

$shop_page_id = get_page_id_by_title_global('Shop');

$img = get_post_meta($shop_page_id, 'vw_title_banner_image_wp_custom_attachment', true);
$display = '';
$display_title_bbanner = '';
$vw_title_banner_image_title_on_off = get_post_meta($shop_page_id, 'vw_title_banner_image_title_on_off', true);
if($vw_title_banner_image_title_on_off == 'on') $display = 'style=display:none;';
$vw_title_banner_image_title_below_on_off = get_post_meta($shop_page_id, 'vw_title_banner_image_title_below_on_off', true);
if($vw_title_banner_image_title_below_on_off != 'on') $display_title_bbanner = 'style=display:none;';
if( $img != '' ){ ?>

<div class="title-box banner-img" style="background-image:url(<?php echo esc_url( $img); ?>)">
    <div class="banner-page-text container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-10">
                <div class="above_title">
                    <!-- <h1>Category</h1> -->
					<?php 
					if (is_shop()) {
						echo "<h1>Shop</h1>";
					} elseif (is_product_category()) {
						$category = get_queried_object();
						echo "<h1> ";
						echo esc_html($category->name);
						echo "</h1> ";
					}
					?>
                    <?php if ( get_theme_mod('internet_service_provider_pro_site_breadcrumb_enable', true) != '' ) { ?>
                    <div class=" bradcrumbs">
                        <?php internet_service_provider_pro_shop_breadcrumbs(); ?>
                    </div>
                    <?php }
	              ?>
                </div>
            </div>
            <div class="col-lg-7 col-sm-5 col-5">

            </div>
        </div>
    </div>
</div>

<div class="container main_title" <?php echo esc_attr($display_title_bbanner); ?>>
    <h1><?php the_title();?></h1>
    <?php if ( get_theme_mod('internet_service_provider_pro_site_breadcrumb_enable', true) != '' ) { ?>
    <div class="container bradcrumbs py-3 b2">
        <?php internet_service_provider_pro_the_breadcrumb(); ?>
    </div>
    <?php } ?>

</div>
<?php }else{ ?>
<div class="container main_title">
    <h1><?php the_title();?></h1>
    <?php if ( get_theme_mod('internet_service_provider_pro_site_breadcrumb_enable', true) != '' ) { ?>
    <div class="container bradcrumbs py-3 b2">
        <?php internet_service_provider_pro_the_breadcrumb(); ?>
    </div>
    <?php } ?>

</div>

<?php }
// Banner image END


if(get_theme_mod('internet_service_provider_pro_post_product_general_settings_shop_sidebar',true)=='1'){

	$postcol1="col-lg-9 col-md-8";
	$postcol2="col-lg-3 col-md-4";

} else {

	$postcol1="col-lg-12 col-md-12";
	$postcol2="";
}
?>
<section class="position-relative filter-page-section">
    <!-- <div class="container ps-4 pb-3">
		<h3 class="filter-head">Filters</h3>
		</div> -->

    <div class="shop shop-product">
        <?php /**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
        <div class="container">


            <div class="row">
                <?php if(get_theme_mod('internet_service_provider_pro_products_shop_page_sidebar',true)=='1'){ ?>
                <div class="<?php echo esc_html($postcol2); ?>">
                    <?php
					 get_template_part('template-parts/filters/filters');
				?>
                </div>
                <?php } ?>

                <div class="<?php echo esc_html($postcol1); ?>">
                    <header class="woocommerce-products-header">
                        <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                        <h1 class="woocommerce-products-header__title page-title">
                            <?php woocommerce_page_title(); ?></h1>
                        <?php endif; ?>

                        <?php
				/**
				 * Hook: woocommerce_archive_description.
				 *
				 * @hooked woocommerce_taxonomy_archive_description - 10
				 * @hooked woocommerce_product_archive_description - 10
				 */
				//do_action( 'woocommerce_archive_description' );

				?>
                    </header>

                    <?php

			if ( have_posts() ) {

				/**
				 * Hook: woocommerce_before_shop_loop.
				 *
				 * @hooked wc_print_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );

				woocommerce_product_loop_start();

				if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();
						global $product;
						/**
						 * Hook: woocommerce_shop_loop.
						 *
						 * @hooked WC_Structured_Data::generate_product_data() - 10
						 */

						do_action( 'woocommerce_shop_loop' );?>
						<div class="col-xl-4 col-md-6 col-sm-6 col-12 mb-3 product-box-main">
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
                    <?php 	}
				}
				woocommerce_product_loop_end();
	//wc_get_template_part( 'content', 'product' );
				?><nav class="woocommerce-pagination">
                        <?php
				echo paginate_links(
					array(
						'base'      => add_query_arg('topage', '%#%'),
						'format'    => '',
						'prev_text' => '<i class="fas fa-chevron-left"></i>',
						'next_text' => '<i class="fas fa-chevron-right"></i>',
						'type'      => 'list'
					)
				);?>
                    </nav><?php
				// do_action( 'woocommerce_after_shop_loop' );
			} else {
				/**
				 * Hook: woocommerce_no_products_found.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			} ?>
                </div>

            </div>
        </div>
        <?php

	/**
	 * Hook: woocommerce_after_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	do_action( 'woocommerce_after_main_content' );?>
    </div>
</section>
<?php
get_footer( 'shop' );