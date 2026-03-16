<?php
/**
 * Template Name:Blog with Right Sidebar
 */

get_header();

get_template_part('template-parts/banner'); 

$date_svg = file_get_contents(get_template_directory_uri().'/assets/images/date.svg');
$admin_svg = file_get_contents(get_template_directory_uri().'/assets/images/admin.svg');
$catgory_svg = file_get_contents(get_template_directory_uri().'/assets/images/category.svg');
?>

<?php do_action('internet_service_provider_pro_before_blog'); ?>

<section id="blog-right-sidebar">
	<div class="container">
	    <div class="middle-align">
		    <div class="row">
				<div class="col-lg-8 col-md-7 content_page">
					<div class="row">
						<?php if ( have_posts() ) : ?>
					      	<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
								$args = array(
								   'paged' => $paged,
								   'category_name' => get_theme_mod('internet_service_provider_pro_category_setting'),
			             'posts_per_page' => 6
								);
							$custom_query = new WP_Query( $args );
							while($custom_query->have_posts()) :
							   $custom_query->the_post();
							 
								get_template_part( 'template-parts/post/post-content' );

							 endwhile; // end of the loop.
							wp_reset_postdata(); ?>
						<?php else : ?>
							<h2><?php _e('Not Found','internet-service-provider-pro'); ?></h2>
						<?php endif; ?>
					</div>
					<div class="navigation">
	              	<?php
									$big = 999999999;
									echo paginate_links( array(
										'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
										'format' => 'paged=%#%',
										'current' =>  (get_query_var('paged') ? get_query_var('paged') : 1),
										'total' => $custom_query->max_num_pages,
										'prev_text'          => __( '<i class="fas fa-chevron-left"></i>', 'internet-service-provider-pro' ),
										'next_text'          => __( '<i class="fas fa-chevron-right"></i>', 'internet-service-provider-pro' ),
									) );
									?>
            </div>
				</div>
				<div class="col-lg-4 col-md-5" id="sidebar">

					<?php dynamic_sidebar('sidebar-1'); ?>
				</div>
		        <div class="clearfix"></div>
		    </div>
	    </div>
	</div>
</section>

<?php do_action('internet_service_provider_pro_after_blog'); ?>

<?php get_footer(); ?>
