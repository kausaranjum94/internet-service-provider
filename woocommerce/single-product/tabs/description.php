<?php
/**
 * Description tab
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 2.0.0
 */

defined('ABSPATH') || exit;

global $post;
global $wpdb;
global $product;

$post_id = get_the_ID();
$ratings = $wpdb->get_results("
	SELECT meta_value, COUNT(DISTINCT {$wpdb->prefix}commentmeta.comment_id) as count
	FROM {$wpdb->prefix}commentmeta
	LEFT JOIN {$wpdb->prefix}comments ON {$wpdb->prefix}commentmeta.comment_id = {$wpdb->prefix}comments.comment_ID
	WHERE {$wpdb->prefix}commentmeta.meta_key = 'rating'
	AND {$wpdb->prefix}comments.comment_post_ID = $post_id
	GROUP BY meta_value
");

$heading = apply_filters('woocommerce_product_description_heading', __('Description', 'woocommerce'));
$review_count = $product->get_review_count();

?>

<?php if ($heading): ?>
	<h2 class="desc-head pb-lg-2"><?php echo esc_html($heading); ?></h2>
	<p class="desc-para"><?php echo esc_html(the_content()); ?></p>

	<p class="desc-raing-head pt-4 pb-4"><?php echo esc_html("Rating") ?></p>
	<div class="single-pro-rating d-md-flex d-sm-block d-block justify-content-between align-items-start">
		<div class="wrapper-inner d-md-flex d-sm-block d-block">
			<div class="rating-sale pe-xl-0 pe-lg-2 pe-md-1 pe-3" style="position: relative;    border-right: 1px solid #e9e9e9;">
				<div class="bold-rating align-self-center pe-2 pe-lg-4 pe-md-1 d-flex justify-content-md-start justify-content-sm-center justify-content-center">
					<span>
						<?php echo number_format((float)average_rating(), 1, '.', ''); ?>
					</span>
					<i class="fa fa-star" aria-hidden="true"></i>
				</div>
				<div class="total_sale align-self-center">
					<span>
						<?php //echo wc_get_rating_html( $average, $rating_count ); // WPCS: XSS ok. ?>

						<?php //phpcs:disable ?>
						<a href="#reviews" class="woocommerce-review-link"
							rel="nofollow"><?php printf(_n('%s customer review', '%s', $review_count, 'woocommerce'), '<span class="count">' . esc_html($review_count) . '</span>'); ?></a>
						<?php // phpcs:enable ?>
						Verified Buyer
					</span>
				</div>
			</div>
			<div class="rating-progress align-self-center ps-lg-4 ps-md-2 ps-sm-4 ps-2 pe-2 mb-md-0 mb-sm-3 mb-4">
				<span>
					<?php
					if ($ratings) {

						$rating_counts = [];
						$total_ratings = 0;
						foreach ($ratings as $rating) {
							$rating_counts[$rating->meta_value] = $rating->count;
							$total_ratings += $rating->count;
						}

						for ($i = 5; $i >= 1; $i--) {

							$rating_number = $i;
							$count = isset($rating_counts[$i]) ? $rating_counts[$i] : 0;
							$percentage = ($total_ratings > 0) ? ($count / $total_ratings) * 100 : 0;
							?>

							<div class="rating-bar pt-1">
								<span class="rating-number" style="align-items: center; display:flex; color:#dcd5d5;gap:3px"><?php echo $i; ?><i
										class="fa fa-star" aria-hidden="true" style="color:#dcd5d5"></i>
									<div class="progress">
										<div data-progress="<?php echo $count; ?>"></div>
									</div>
									<span class="rating-count"><?php echo $count; ?></span>
								</span>
							</div>
						<?php }
					}
					?>
				</span>
			</div>
		</div>
		<div class="meta-field-call">
			<i class="<?php echo get_theme_mod('product_helpline_icon'); ?>"></i>
			<div class="helpline-text">
				<span><?php echo get_theme_mod('product_helpline_fields'); ?></span>
				<span><?php echo get_theme_mod('product_helpline_timing'); ?></span>
			</div>
		</div>
	</div>




<?php endif; ?>
