<?php
/**
 * Template Name: Testimonials Template
*/

get_header(); get_template_part( 'template-parts/banner' ); ?>
<div id="testimonials" class="testimonial_page_template my-5">
	<div class="container">
		<div class="testimonials-content row position-relative " data-aos="fade-right" data-aos-duration="2000">
      <?php if ( defined( 'internet_service_provider_pro_POSTTYPE_VERSION' ) ) {
        $theme_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $query = new WP_Query( array( 
          'post_type' => 'testimonials',
          'paged' => $theme_paged, 
          ) ); 
        if ( $query->have_posts() ) :  while ($query->have_posts()) : $query->the_post(); ?>
          <div class="col-lg-4 col-md-4 col-sm-6 mb-5 testimonial-block-outer">
            <div class="testimonial_outer <?php echo esc_attr($amp_class); ?>" data-aos="zoom-in-up" data-aos-duration="2000">
              <div class="testimonial-block quote_box">
                <div class="testimonials-image-box position-relative">
                  <div class="media">
                    <div class="testimonials_image">
                      <?php if(has_post_thumbnail()){ ?>
                        <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="<?php the_title(); ?>">
                      <?php } ?>
                    </div>
                    <div class="media-body">
                        <h5 class="testimonial-title">  
                          <?php the_title(); ?>
                        </h5>
                        <?php if(get_post_meta(get_the_ID(),'internet_service_provider_pro_posttype_testimonial_location',true) != ''){ ?>
                        <div class="t-location">
                          <?php echo esc_html(get_post_meta(get_the_ID(),'internet_service_provider_pro_posttype_testimonial_location',true)); ?>
                        </div>
                        <?php } ?>
                    </div>
                  </div>
                </div>
                <div class="testimonials-info position-relative">
                  <?php the_content(); ?>
                </div>
                <?php if(get_post_meta(get_the_ID(),'internet_service_provider_pro_posttype_star_review',true) != ''){ ?>
                  <div class="testimonial-star"> 
                    <?php for ($k=0; $k <=4 ; $k++) {
                      $rating = esc_html(get_post_meta(get_the_ID(),'internet_service_provider_pro_posttype_star_review',true));
                      $final_rating = isset($rating) ? $rating : 0 ;
                      if ($final_rating <= $k) {?>
                            <!-- filled -->
                          <span class="without_filled"><i class="fas fa-star"></i></span>
                      <?php }else{?>
                          <!-- // without filled -->
                          <span ><i class="fas fa-star"></i></span>
                      <?php }
                    } ?>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        <?php endwhile; endif; ?>
      <?php } else{ ?>
        <h4 class="post-type-msg text-center"><?php echo esc_html_e('Please install Internet Service Provider Pro Posttype plugin and add your Testimonials to enable this section','internet-service-provider-pro')?></h4>
      <?php } ?>

      <div class="navigation">
        <?php 
          $big = 999999999;
          echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => 'paged=%#%',
            'current' =>  (get_query_var('paged') ? get_query_var('paged') : 1),
            'total' => $query->max_num_pages
          ) );
        ?>
      </div>

    </div>
  </div>
</div>
<?php get_footer(); ?>
