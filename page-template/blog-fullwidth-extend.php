<?php
/**
 * Template Name:Blog Full Width Extend
 */

 get_header();

 get_template_part('template-parts/banner'); ?>

<?php do_action('internet_service_provider_pro_before_blog'); ?>

<div id="full-width-blog">
	<div class="container">
    	<div class="content_page row">
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
					$p++; endwhile;
					wp_reset_postdata(); ?>
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
			<?php else : ?>
				<h3><?php esc_html_e('Not Found','internet-service-provider-pro'); ?></h3>
			<?php endif; ?>
        	<div class="clearfix"></div>
		</div>
        <div class="clearfix"></div>
	</div>
</div>

<?php do_action('internet_service_provider_pro_after_blog'); ?>

<?php get_footer(); ?>
